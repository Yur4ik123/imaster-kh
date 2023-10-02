<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequestResource\Pages;
use App\Filament\Resources\RequestResource\RelationManagers;
use App\Models\Request;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequestResource extends Resource
{
    protected static ?string $model = Request::class;
    protected static ?string $label = "Всі запити";
    protected static ?string $pluralLabel = 'Всі запити';
    protected static ?string $navigationLabel = 'Запити';
//    protected static ?string $navigationGroup = 'Слайдер';
    protected static ?string $breadcrumb = 'Запити';
    protected static ?string $navigationIcon = 'heroicon-o-bolt';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Forms\Components\TextInput::make('name')->label("Ім'я")->required(),
               Forms\Components\Toggle::make('is_processed')->label("Опрацьовано")->default(1),
               Forms\Components\TextInput::make('tel')->tel()->label("Телефон")->required(),
               Forms\Components\TextInput::make('email')->email()->label("Email")->required(),
               Forms\Components\Textarea::make('msg')->label("Повідомлення"),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('status')->label('Статус')
                    ->badge(fn($state)=>$state?true:false)
                    ->color(fn($state) =>  match ($state) {
                        'NEW'=> 'warning',
                        'Опрацьовано'=> 'success',
                    }),
                Tables\Columns\TextColumn::make('name')->label("Ім'я"),
                Tables\Columns\TextColumn::make('tel')->label("Телефон")->icon('heroicon-o-phone'),
                Tables\Columns\TextColumn::make('msg')->label('Повідомлення')
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
            'index' => Pages\ListRequests::route('/'),
           'create' => Pages\CreateRequest::route('/create'),
             //'view' => Pages\ViewRequest::route('/{record}'),
            'edit' => Pages\EditRequest::route('/{record}/edit'),
        ];
    }
}
