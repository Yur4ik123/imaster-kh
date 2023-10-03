<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentResource\Pages;
use App\Filament\Resources\CommentResource\RelationManagers;
use App\Models\Comment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CommentResource extends Resource
{
    protected static ?string $model = Comment::class;
    protected static ?string $label = "Всі коментарі";
    protected static ?string $pluralLabel = 'Всі коментарі';
    protected static ?string $navigationLabel = 'Коментарі';
//    protected static ?string $navigationGroup = 'Слайдер';
    protected static ?string $breadcrumb = 'Коментарі';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label("Ім'я")->required(),
                Forms\Components\Select::make('rating')->options([
                    0 => '0',
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                ])->label("Оцінка")->required(),
                Forms\Components\Textarea::make('msg')->label("Коментар"),
                Forms\Components\Toggle::make('is_published')->label("Опублікувати")->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status')->label('Статус')
                    ->badge(fn($state)=>$state?true:false)
                    ->color(fn($state) =>  match ($state) {
                        'Опубліковано'=> 'warning',
                        'Не опубліковано'=> 'success',
                    }),
                Tables\Columns\TextColumn::make('name')->label("Ім'я"),
                Tables\Columns\TextColumn::make('rating')->label("Оцінка")->icon('heroicon-o-star'),
                Tables\Columns\TextColumn::make('msg')->label('Коментар')
                    ->limit(30),
                Tables\Columns\TextColumn::make('created_at')->label('Дата')->dateTime('H:i Y-m-d ')
            ])->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
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
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 0 ? 'success' : 'warning';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComment::route('/create'),
            'view' => Pages\ViewComment::route('/{record}'),
            'edit' => Pages\EditComment::route('/{record}/edit'),
        ];
    }
}
