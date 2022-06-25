<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NewComponent extends Component
{
    public $name1;
    public $fruits;
    public function __construct($name1 = null, $fruits = null)
    {
        $this->name1 = $name1;
        $this->fruits = $fruits;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.new-component');
    }
}
