<?php

namespace App\Filament\Resources\LaptopResource\Pages;

use App\Filament\Resources\LaptopResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLaptop extends CreateRecord
{
    protected static string $resource = LaptopResource::class;

    public function getTitle(): string{
        Return "Tambah Laptop";
    }
    protected function getRedirectUrl(): string
    {
        // Arahkan ke halaman list (index) setelah create
        return $this->getResource()::getUrl('index');
    }
}
