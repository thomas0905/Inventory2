<?php

namespace App\Filament\Resources\PermissionResource\Pages;

use App\Filament\Resources\PermissionResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePermission extends CreateRecord
{
    protected static string $resource = PermissionResource::class;
    protected function getCreateNotificationTitle(): string
        {
                return 'Permission Berhasil';
        }
    protected function getRedirecturl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}

