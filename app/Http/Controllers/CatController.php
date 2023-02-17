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

    
    public function store(Request $request) {       
         
        $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]*$/|min:3|max:50',
            'disp_dob' => 'required',   
            'colour' => 'required',
            'fav_food' => 'required' 
        ], [
            'name.required' => "Please enter the cat's name",
            'name.regex' => "Cats Name can contain only letters and spaces",
            'disp_dob.required' => "Please enter the cat's date of birth",
            'colour.required' => "Please enter the cat's colour",
            'fav_food.required' => "Please enter the cat's favourite food"
        ]);           
 
        Cat::create([
            'name' => $request->name,            
            'dob' =>  $request->dob,
            'colour' => $request->colour,
            'fav_food' => $request->fav_food
        ]);
 
        return redirect('/')->with('message', 'Cat created successfully!');
  
     }
}  