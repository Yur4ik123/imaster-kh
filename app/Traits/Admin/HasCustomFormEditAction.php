<?php

namespace App\Traits\Admin;

use Filament\Pages\Actions\Action;

trait HasCustomFormEditAction
{
    protected function getActions(): array
    {
        $resource = static::getResource();

        return array_merge(
            [Action::make('save')->label('Сохранить')->action('save')],
        //   (($resource::hasPage('view') && $resource::canView($this->getRecord())) ? [$this->getViewAction()] : []),
        //($resource::canDelete($this->getRecord()) ? [$this->getDeleteAction()] : []),
        );
    }

    protected function mutateData(&$data)
    {
        if (!isset($data['translations'])) {
            $data['translations'] = [];
            foreach ($this->record->translations as $translation) {
                $data[$translation['locale']] = $translation->toArray();
            }
        }
        $data['referer'] = request()->server('HTTP_REFERER');
    }
    protected function mutateMeta(&$data) {

        if(!isset($data['meta'])) {
            $data['meta'] = [];
            foreach ($this->record?->meta?->translations??[] as $meta) {
                $data[$meta->locale]['meta'] = $meta->toArray();
            }
        }
        return $data;

    }
}

