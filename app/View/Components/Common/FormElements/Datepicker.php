<?php

namespace App\View\Components\Common\FormElements;

use Illuminate\View\Component;

class Datepicker extends Component
{
    public $name;
    public $dispName;
    public $id;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $title)
    {

        $this->name = $name;
        $this->title = $title;
        $this->dispName = 'disp_' . $name;
        $this->id = $name . 'DatepickerId';
      
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.form-elements.datepicker');
    }
}
