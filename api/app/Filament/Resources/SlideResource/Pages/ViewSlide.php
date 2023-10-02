<?php

namespace App\Filament\Resources\SlideResource\Pages;

use App\Filament\Resources\SlideResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSlide extends ViewRecord
{
    protected static string $resource = SlideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
