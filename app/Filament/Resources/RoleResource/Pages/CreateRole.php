<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRole extends CreateRecord
{
    protected static string $resource = RoleResource::class;
    protected function getCreateNotificationTitle(): string
    {
        return 'Create Role Berhasil';
    }
    protected function getRedirecturl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

// protected function getCreateNotificationTitle(): string
// {
//     return 'User Role Registered';
// }

