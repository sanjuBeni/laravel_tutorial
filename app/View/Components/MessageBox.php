<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MessageBox extends Component
{
    public $name;
    public function __construct($name = null)
    {
        $this->name = $name;
    }


    public function render()
    {
        return <<<'blade'
<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h2>{{$name}}</h2>
    <p>{{$slot}}</p>
    <h4>{{$slotName}}</h4>
</div>
blade;
    }
}
