<?php

namespace App\View\Components\Cat\Forms;

use Illuminate\View\Component;

class CatNameInput extends Component
{
    public $mode;
    public $name;     

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mode, $name)
    {
        $this->mode = $mode;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cat.forms.cat-name-input');
    }
}
