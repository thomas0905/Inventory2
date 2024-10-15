<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;
    // protected function getRedirectUsrUrl(): string
    // {
    //     return $this->get_resources()::getUrl('index');
    // }

    // protected function getCreateNotificationTitle(): string
    //     {
    //         return 'User Registered';
    //     }
}
