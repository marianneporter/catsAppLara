<?php

namespace App\View\Components\Cat\Forms;

use Illuminate\View\Component;
use App\Models\Cat;

class AddEditForm extends Component
{
    public $mode;
    public $method;   
    public $colours;
    public $colourTitle;
    public $favFoods;
    public $favFoodTitle;
    public $dobTitle;

    public function __construct($mode, $method)
    {
    
       $this->mode = $mode;
       $this->method = $method;        

       $this->colours = Cat::$colours;
       $this->favFoods = Cat::$favFoods;      
       
       $this->colourTitle = Cat::$propertyNames['colour'];
       $this->favFoodTitle = Cat::$propertyNames['fav_food'];
       $this->dobTitle = Cat::$propertyNames['dob'];
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
