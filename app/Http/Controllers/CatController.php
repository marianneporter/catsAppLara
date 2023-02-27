<?php

namespace App\Http\Controllers;
use App\Models\Cat;
use App\Http\Requests\CatRequest;

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
    
    public function store(CatRequest $request) {    

        $validated = $request->validated();
 
        Cat::create($validated);
 
        return redirect('/')->with('message',  $validated['name'] . ' created successfully!');
  
    }
         
    public function edit(Cat $cat) {               
        return view('cats.edit', ['cat' => $cat]);        
    }    

    public function update(CatRequest $request, Cat $cat) {

        $validated = $request->validated();

        $cat->update($validated);       

        return redirect('/')->with('message', $validated['name'] .' updated successfully!');  

    }

    public function destroy(Cat $cat) {       

   //     $cat->delete(); 
        return redirect('/')->with('message', $cat->name . ' is deleted');    
     }
    
}  