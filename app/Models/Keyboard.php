<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'model', 'maker', 'color', 'weight', 'hight', 'broad', 'resolution', 'usbNumber', 'platform','so', 'description', 'commentary', 'available' 
    ];
}
