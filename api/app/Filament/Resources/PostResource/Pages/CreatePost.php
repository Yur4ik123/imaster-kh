<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function handleRecordCreation(array $data): Model
    {

        $res = parent::handleRecordCreation($data);
        $meta = [];
        foreach (config('translatable.locales') as $locale) {
            $meta[$locale] = $data[$locale]['meta'];
            //   $meta[$locale] = $meta;
            unset($meta['slug'], $meta['title'], $meta['description']);
        }
        return $res->meta()->create($meta);
    }

    //    TODO:Обработка редиректа после сохранения
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
