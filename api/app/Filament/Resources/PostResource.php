<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $slug = 'posts';
    protected static ?string $label = "Всі пости";
    protected static ?string $pluralLabel = 'Всі пости';
    protected static ?string $navigationLabel = 'Блог';
//    protected static ?string $navigationGroup = 'Блог';
    protected static ?string $breadcrumb = 'Блог';
    protected static ?string $recordTitleAttribute = 'id';
    protected static ?string $navigationIcon = 'heroicon-o-device-tablet';

    public static function form(Form $form): Form
    {
        $tabs = [];
        foreach (config('translatable.locales') as $locale) {
            $tabs[] = Tabs\Tab::make($locale)->schema([
                Forms\Components\TextInput::make($locale . '.title')->label('Заголовок')
                    ->reactive()
                    ->required()
                    ->afterStateUpdated(function (Set $set, $state) use ($locale) {
                        $set($locale . '.meta.slug', \Str::slug($state));
                    }),
                Forms\Components\RichEditor::make($locale . '.content')->label('Конетент'),
                TextInput::make($locale . '.meta.slug')->label('URL'),
                TextInput::make($locale . '.meta.title')->label('Meta title'),
                Textarea::make($locale . '.meta.description')->label('Meta description'),
            ]);
        }
        return $form
            ->schema([
                Tabs::make('')->tabs($tabs),
                Forms\Components\FileUpload::make('image')->label('Картинка')->image(),
                Forms\Components\Toggle::make('is_published')->label('Опублікувати')
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label("ID"),
                Tables\Columns\TextColumn::make('title')->label("Заголовок"),
                Tables\Columns\ImageColumn::make('image')->label("Прев'ю")->size(100),
                Tables\Columns\ToggleColumn::make('is_published')->label('Опубліковано')
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //     RelationManagers\PostsRelationManager::class
        ];
    }
    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            // 'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
