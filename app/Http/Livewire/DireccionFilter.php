<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DireccionFilter extends Component
{
    public $direccions;
    
    public function render()
    {
        return view('livewire.direccion-filter');
    }
}
