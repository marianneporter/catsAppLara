<?php

namespace App\View\Components\Cat\Forms;

use Illuminate\View\Component;
use App\Models\Cat as CatModel;

class Select extends Component
{
    public $type;
    public $test;
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type)
    {
        $this->type = $type;
        $this->test = "test hello";

        if($this->type == 'colour') {
            $this->options = CatModel::$colours;
        } else {
            $this->options = CatModel::$favFoods;
        }        
      
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cat.forms.select');
    }
}
