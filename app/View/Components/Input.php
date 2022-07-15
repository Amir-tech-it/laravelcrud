<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $id;
    public $type;
    public $label;
    public $name;
    // public $demo;
    public $value;
    // public $is_check;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $label, $name, $id,  $value)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
        $this->id = $id;
        // $this->demo = $demo;
        $this->value = $value ;
        // $this->is_check = $is_check; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
