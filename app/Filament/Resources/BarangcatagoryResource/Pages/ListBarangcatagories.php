<?php

namespace App\Filament\Resources\BarangcatagoryResource\Pages;

use App\Filament\Resources\BarangcatagoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangcatagories extends ListRecords
{
    protected static string $resource = BarangcatagoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTitle(): string{
        Return "Barang Catagory";
    }
    
}
