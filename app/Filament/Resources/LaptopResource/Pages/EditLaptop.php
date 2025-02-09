<?php

namespace App\Filament\Resources\LaptopResource\Pages;

use App\Filament\Resources\LaptopResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaptop extends EditRecord
{
    protected static string $resource = LaptopResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string{
        Return "Edit Laptop";
    }

    protected function getRedirectUrl(): string
    {
        // Arahkan ke halaman list (index) setelah create
        return $this->getResource()::getUrl('index');
    }
    
}
