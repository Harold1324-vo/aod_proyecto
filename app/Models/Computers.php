<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'model', 'processor', 'sizeRam', 'typeRAM', 'capacityHDD', 'weight', 'color', 'sizeScreen', 'so','description', 'usbNumber', 'commentary', 'available' 
    ];
}
