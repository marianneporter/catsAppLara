<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CatAddEditForm extends Component
{
    public $mode;
    public $method;
   

    public function __construct($mode, $method)
    {
       $this->mode = $mode;
       $this->method = $method;       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cat-add-edit-form');
    }
}
