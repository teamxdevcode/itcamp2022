<?php

namespace App\View\Components\inputs;

use Illuminate\View\Component;

class select extends Component
{
    public $binding, $name, $full, $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $binding=null, $full=false, $options=[])
    {
        // dd(json_encode($options));
        $this->name = $name;
        $this->binding = $binding;
        $this->full = $full ? '' : 'md:w-1/2';
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.inputs.select');
    }
}
