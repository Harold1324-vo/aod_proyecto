<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'model', 'processor', 'sizeRam', 'capacityHDD', 'weight', 'color', 'sizeScreen', 'description', 'usbNumber', 'commentary', 'available' 
    ];
}
