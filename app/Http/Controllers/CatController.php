<?php

namespace App\Http\Controllers;
use App\Models\Cat;

use Illuminate\Http\Request;

class CatController extends Controller
{

    public function index() {
        return view('cats.index', [      
            'cats' => Cat::all()        
        ]);
    }
    
    public function create() {
        return view('cats.create');
    }
}
          


