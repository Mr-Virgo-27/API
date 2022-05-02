<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type',
        'model',
        'fuel',
        'color',
        'brand',
        'location',
        'image_path',
        'mileage',
        'doors',
        'number_of_seats',
        'price',
        'gearbox',
        'year',
    ];
}
