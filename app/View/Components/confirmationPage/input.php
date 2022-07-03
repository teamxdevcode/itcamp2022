<?php

namespace App\View\Components\confirmationPage;

use Illuminate\View\Component;

class input extends Component
{
    public $id, $label, $type, $icon = null;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $label, $type, $icon = null)
    {
        $this->id = $id;
        $this->label = $label;
        $this->type = $type;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.confirmation-page.input');
    }
}
