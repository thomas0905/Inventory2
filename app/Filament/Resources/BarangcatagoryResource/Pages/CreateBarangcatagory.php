<?php

namespace App\Filament\Resources\BarangcatagoryResource\Pages;

use App\Filament\Resources\BarangcatagoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBarangcatagory extends CreateRecord
{
    protected static string $resource = BarangcatagoryResource::class;

    
    public function getTitle(): string{
        Return "Tambah Barang Catagory";
    }
}


