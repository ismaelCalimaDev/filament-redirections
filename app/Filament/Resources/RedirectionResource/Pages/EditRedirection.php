<?php

namespace App\Filament\Resources\RedirectionResource\Pages;

use App\Filament\Resources\RedirectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRedirection extends EditRecord
{
    protected static string $resource = RedirectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
