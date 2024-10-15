<?php

namespace App\Filament\Resources\BarangcatagoryResource\Pages;

use App\Filament\Resources\BarangcatagoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBarangcatagory extends EditRecord
{
    protected static string $resource = BarangcatagoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function getTitle(): string{
        Return "Edit Barang Catagory";
    }
}
