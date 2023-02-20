<?php

namespace App\View\Components\Common\FormElements;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;  
    public $options;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($name, $options, $title)
    {
        $this->name = $name;
        $this->options = $options; 
        $this->title = $title;   
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.form-elements.select');
    }
}
