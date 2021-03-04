<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processor extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand', 'model', 'coreNumber', 'threadsNumber','speedMax', 'speedBase', 'thermal','cache1', 'cache2', 'cache3', 'temperature', 'package', 'description', 'avaible'
    ];
}
