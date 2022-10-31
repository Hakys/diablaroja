<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class HelloWorld extends Component
{
    public $open;

    public function render()
    {
        return view('livewire.hello-world');
    }
}
