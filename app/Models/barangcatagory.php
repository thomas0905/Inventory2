<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barangcatagory extends Model
{
    use HasFactory;

    protected $fillable =  [
        "name",
        "description",

    ];    
    public function canAccessFilament(): bool
    {
        return $this->hasRole(['admin']);
    }

}
