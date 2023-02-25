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

  

    public static $propertyNames = [
        "name" => "Cat's Name",
        "dob" => "Date of Birth",
        "colour" => "Colour",
        "fav_food" => "Favourite Food"
    ];   

    public static function getMinBirthDate() {

        $today =  date(('Y-m-d'));
        $strtotimeInput = $today . ' -30 year';

        $dateTimestamp = strtotime($strtotimeInput);
        $thirtyYearsAgo = date('Y-m-d', $dateTimestamp);
        
        return $thirtyYearsAgo;
    }

    public static function getMaxBirthDate() {
 
        return date(('Y-m-d'));
    }
    
}
