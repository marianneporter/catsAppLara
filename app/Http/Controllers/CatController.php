<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Cat;
use App\Http\Requests\CatRequest;

class CatController extends Controller
{

     public function index() {    

        return view('cats.index', [              
               'cats' => Cat::orderBy('name', 'asc')->paginate(8)
        ]);
    }
    
    public function create() {
        return view('cats.create');
    }
    
    public function store(CatRequest $request) {    

        $validated = $request->validated();
 
        Cat::create($validated);

        $messageText =  $validated['name'] .' created successfully!';
        Session::flash("messageData",
                     [ 'type' => 'success', 
                       'text' => $messageText ]); 
        return redirect('/');  
    }
         
    public function edit(Cat $cat) {               
        return view('cats.edit', ['cat' => $cat]);        
    }    

    public function update(CatRequest $request, Cat $cat) {
        
        $validated = $request->validated();   
        
        $cat->update($validated); 
   
        $messageText =  $validated['name'] .' updated successfully!';
        Session::flash("messageData",
                       [ 'type' => 'success', 
                         'text' => $messageText ]);
  
        return redirect('/');
    }

    public function destroy(Cat $cat) {       

        $cat->delete(); 
   
        $messageText =  $cat->name . ' is deleted';
        session()->flash("messageData",
                         [ 'type' => 'success', 
                           'text' => $messageText ]);

        return redirect('/');    
     }
    
}  