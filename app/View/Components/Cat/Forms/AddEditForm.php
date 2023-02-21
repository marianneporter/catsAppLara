<?php

namespace App\View\Components\Cat\Forms;

use Illuminate\View\Component;
use App\Models\Cat as CatModel;

class AddEditForm extends Component
{
    public $mode;
    public $method;   
    public $colours;
    public $colourTitle;
    public $favFoods;
    public $favFoodTitle;

    public function __construct($mode, $method)
    {
    
       $this->mode = $mode;
       $this->method = $method;        

       $this->colours = CatModel::$colours;
       $this->favFoods = CatModel::$favFoods;      
       
       $this->colourTitle = CatModel::$propertyNames['colour'];
       $this->favFoodTitle = CatModel::$propertyNames['fav_food'];
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