<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;
use Session;


class Message extends Component
{ 
    public $messageText;
    public $typeClass;
     
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {     
        if (Session::has('messageData')) {
            $messageData = Session::get('messageData');
            $this->messageType = $messageData['type'];
            $this->messageText = $messageData['text'];
            $this->typeClass = 'status-' .  $messageData['type']; 
        } else {
            $this->messageType = null;
            $this->messageText = null;
        } 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.message');
    }
}
