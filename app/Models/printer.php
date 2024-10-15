<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class printer extends Model
{
    use HasFactory;
    
    protected $fillable =  [
        "idinventaris",
        "merk_type",
        "brand",
        "specifications",
        "purchase_date",
        "price",
        "status",

    ];

  

}
