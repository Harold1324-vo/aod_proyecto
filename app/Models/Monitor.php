<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand', 'model', 'inches', 'usbNumber', 'vgaNumber', 'hdmiNumber' , 'color', 'typeHD', 'timeAnswer', 'speed', 'speakers', 'description', 'commentary', 'avaible'
    ];
}
