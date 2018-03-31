<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    protected $table='cordinate';

    protected $fillable = [
        'y_coordinates'
    ];
}
