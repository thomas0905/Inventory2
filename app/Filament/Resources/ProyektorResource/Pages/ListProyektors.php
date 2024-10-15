<?php

namespace App\Filament\Resources\ProyektorResource\Pages;

use App\Filament\Resources\ProyektorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProyektors extends ListRecords
{
    protected static string $resource = ProyektorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
