<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z ]*$/|min:3|max:50',
            'dob' => 'required',   
            'colour' => 'required',
            'fav_food' => 'required'            
        ];
    }

    public function messages() {
        return [
            'name.required' => "Please enter the cat's name",
            'name.regex' => "Cats Name can contain only letters and -",
            'dob.required' => "Please enter the cat's date of birth",
            'colour.required' => "Please enter the cat's colour",
            'fav_food.required' => "Please enter the cat's favourite food"        
        ]; 
    }
}
