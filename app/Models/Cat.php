<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'dob', 'colour', 'fav_food'];

    public static $colours = [ 'Black', 'White', 'Ginger', 'Grey', 'Tabby', 
                               'Tortoiseshell', 'Black and White', 'Ginger and White' ];

    public static $favFoods = [ 'Fish', 'Chicken', 'Wet Cat Food', 'Dry Cat Food'];

                               
}
