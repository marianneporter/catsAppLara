<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required|regex:/^[a-zA-Z ]*$/|min:2|max:50',
            'last_name' => 'required|regex:/^[a-zA-Z \-\'\,]*$/|min:3|max:50',
            'email' => ['required', 'email', Rule::unique("users", "email") ], 
            'password' => 'required|confirmed|min:6'                    
        ];
    }

    public function messages() {
        return [
            'first_name.required' => "Please enter your first name",
            'last_name.required' => "Please enter your last name",
            'first_name.regex' => "Names can contain only letters and -",
            'last_name.regex' => "Names can contain only letters and -",
            'email.required' => "Please enter your email",
            'email.email' => "Please enter a valid email",
            'email.unique' => "Account already exists for this email",
            'password.required' => "Please enter a password",
            'password.min' => "Password must have at least 6 characters",
            'password.confirmed' => "Password and confirmed passwords do not match"        
        ]; 
    }

    
}
