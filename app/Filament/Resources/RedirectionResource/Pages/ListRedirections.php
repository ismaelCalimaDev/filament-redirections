<?php

namespace App\Filament\Resources\RedirectionResource\Pages;

use App\Filament\Resources\RedirectionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRedirections extends ListRecords
{
    protected static string $resource = RedirectionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
