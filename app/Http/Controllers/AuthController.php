<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class AuthController extends Controller
{
  
    public function create() {   
        return view('auth.register');
    }
  
    public function store(RegisterRequest $request) {
        //create the user
        $validated=$request->validated();

        User::create($validated);

        $messageText =  'Welcome ' . $validated['first_name'] .', you have registered successfully';
        $request->session()->flash("messageData",
                                   [ 'type' => 'success', 
                                     'text' => $messageText ]);        

        return redirect('/');

    }

    public function login() {
        // return login form
        return view('auth.login');
    }

    public function authenticate(LoginRequest $request) {    
        // check credentials and login if valid 
        $validated=$request->validated();

        if(auth()->attempt($validated)) {
            session()->regenerate();
            $messageText =  'Welcome ' .  auth()->user()->first_name .', you have logged in successfully';
            $request->session()->flash("messageData",
                                       [ 'type' => 'success', 
                                         'text' => $messageText ]);  

            return redirect('/');
        }

        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);

    }

    public function logout(Request $request) {
        auth()->logout();

        $messageText =  'Thank you for logging out. See you soon!';
        $request->session()->flash("messageData",
                                   [ 'type' => 'success', 
                                     'text' => $messageText ]);  

        return redirect('/auth/login');

    }

  
}
