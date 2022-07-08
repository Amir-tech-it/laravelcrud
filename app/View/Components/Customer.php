<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Customer extends Component
{
    public $name;
    public $label;
    public $id;
    public $type;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$label,$id,$type,$value)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.customer');
    }
}
