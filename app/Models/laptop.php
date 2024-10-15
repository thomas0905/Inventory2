<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class laptop extends Model
{
    use HasFactory;
    // public function barangcatagory(): BelongsTo
    // {
    //     return $this->belongsTo(barangcatagory::class);
    // }
 

    protected $fillable =  [
        "idinventaris",
        "nameLaptop",
        "brand",
        "id_Catagory",
        "specifications",
        "purchase_date",
        "price",
        "status",

    ];
}
