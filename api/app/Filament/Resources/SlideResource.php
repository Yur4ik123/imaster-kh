<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Models\Slide;
use Filament\Forms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SlideResource extends Resource
{
    protected static ?string $model = Slide::class;
    protected static ?string $slug = 'slides';
    protected static ?string $label = "Всі cлайди";
    protected static ?string $pluralLabel = 'Всі cлайди';
    protected static ?string $navigationLabel = 'Слайдер';
//    protected static ?string $navigationGroup = 'Слайдер';
    protected static ?string $breadcrumb = 'Слайдер';
    protected static ?string $recordTitleAttribute = 'id';

    protected static ?string $navigationIcon = 'heroicon-o-film';

    public static function form(Form $form): Form
    {
        $tabs = [];
        foreach (config('translatable.locales') as $locale) {
            $tabs[] = Tabs\Tab::make($locale)->schema([
                Forms\Components\RichEditor::make($locale . '.header')->label('Заголовок')
                    ->required(),
                Forms\Components\RichEditor::make($locale . '.subheader')->label('Підзаголовок'),
            ]);
        }
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_published')->label('Опублікувати')->default(true),
                Tabs::make('')->tabs($tabs),
                Forms\Components\FileUpload::make('image')->label('Картинка')->image(),
            ])
            ->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label("ID"),
                Tables\Columns\TextColumn::make('header')->label("Заголовок"),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
         //   'view' => Pages\ViewSlide::route('/{record}'),
            'edit' => Pages\EditSlide::route('/{record}/edit'),
        ];
    }
}
