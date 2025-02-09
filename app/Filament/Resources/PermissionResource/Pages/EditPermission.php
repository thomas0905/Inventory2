<?php

namespace App\Filament\Resources\PermissionResource\Pages;

use App\Filament\Resources\PermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermission extends EditRecord
{
    protected static string $resource = PermissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getCreateNotificationTitle(): string
    {
        return 'Edit Permission Berhasil';
    }
    protected function getRedirecturl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}
