<?php

namespace App\View\Components\Cat\Forms;

use Illuminate\View\Component;
use App\Models\Cat;

class AddEditForm extends Component
{
    public $mode;
    public $method; 

    public $colours;
    public $favFoods;
    public $minDob;
    public $maxDob;  

    public $nameTitle;
    public $dobTitle;
    public $colourTitle;    
    public $favFoodTitle; 


    
    public $cat;

    public function __construct($mode, $cat=null)
    {
    
       $this->mode = $mode;
       $this->method = $mode == 'Create' ? 'POST' : 'PUT';

       if ($this->mode == 'Create') {
            $this->method ='POST';
            $this->cat = new Cat();
            $this->cat->name = '';
            $this->cat->dob = '';
            $this->cat->colour = '';
            $this->cat->fav_food = '';
          
       } else {
            $this->method ="PUT";
            $this->cat = $cat;

       }

       $this->colours = Cat::$colours;
       $this->favFoods = Cat::$favFoods;   
       $this->minDob = Cat::getMinBirthDate(); 
       $this->maxDob = Cat::getMaxBirthDate();  

       $this->nameTitle= Cat::$propertyNames['name'];
       $this->dobTitle = Cat::$propertyNames['dob'];
       $this->colourTitle = Cat::$propertyNames['colour'];
       $this->favFoodTitle = Cat::$propertyNames['fav_food'];
   
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cat.forms.add-edit-form');
    }
}
