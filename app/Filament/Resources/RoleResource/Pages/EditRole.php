<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRole extends EditRecord
{
    protected static string $resource = RoleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getCreateNotificationTitle(): string
    {
        return 'Create Role Berhasil';
    }
    protected function getRedirecturl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
