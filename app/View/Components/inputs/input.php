<?php

namespace App\View\Components\inputs;

use Illuminate\View\Component;

class input extends Component
{
    public $binding, $name, $placeholder, $type, $full;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $name, $placeholder=null, $binding=null, $full=false)
    {
        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder ?? $name;
        $this->binding = $binding;
        $this->full = $full ? '' : 'md:w-1/2';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.input');
    }
}
