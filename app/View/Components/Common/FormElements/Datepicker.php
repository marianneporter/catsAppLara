<?php

namespace App\View\Components\Common\FormElements;

use Illuminate\View\Component;

class Datepicker extends Component
{
    public $name;     
    public $title;        
    public $content;  
    public $datepickerId;
    public $dispDate;

    public $dpMinDate = null;
    public $dpMaxDate = null;
    public $dpDefaultDate = null;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $title, $mode, $content, $minDate, $maxDate )
    {
        $this->name = $name;
        $this->title = $title;
        $this->mode = $mode;       
        $this->content = $content;   
        $this->dispDate = $this->content == null ? null : $this->getDateForCal($content);   
        $this->datepickerId = $name . 'Datepicker';   

       
        
        if ($mode == 'Edit') {
            $this->dpMinDate     = $minDate;
            $this->dpMaxDate     = $maxDate;          
        }

     
 
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

    private function getDateForCal($dbDate) {
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

        $elements = explode( '-', $dbDate);

        $yyyy = $elements[0];
        
        $mthNo= (intval($elements[1])) - 1;
        $m = $months[$mthNo];  

        $d = ltrim($elements[2], '0');
        $dispDate = $d . ' ' . $m . ' ' . $yyyy;  
        
        return $dispDate;
    }
}
