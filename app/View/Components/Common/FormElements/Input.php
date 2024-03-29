<?php

namespace App\View\Components\Common\FormElements;

use Illuminate\View\Component;

class Input extends Component
{
    public $name;
    public $title;  
    public $mode; 
    public $content;
    public $inputType;
    public $autocomplete;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,
                                $title,
                                $mode,
                                $content="",
                                $inputType="text",
                                $auth="false")
    {        
        $this->name  = $name;
        $this->title = $title;
        $this->mode  = $mode;
        $this->content  = $content;
        $this->inputType = $inputType;
        if ($auth == "true") {
            if ($inputType == 'password') {
                $this->autocomplete = "new-password";
            } else {
                $this->autocomplete = "one-time-code";
            }
        } else {
            $this->autocomplete = "on";
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.form-elements.input');
    }
}
