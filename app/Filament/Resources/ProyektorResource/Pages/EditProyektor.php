<?php

namespace App\Filament\Resources\ProyektorResource\Pages;

use App\Filament\Resources\ProyektorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProyektor extends EditRecord
{
    protected static string $resource = ProyektorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
