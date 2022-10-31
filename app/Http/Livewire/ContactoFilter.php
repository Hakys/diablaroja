<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactoFilter extends Component
{
    public $operacion;

    public function render()
    {
        $contactos = $this->operacion->contactos()->paginate(10);
        return view('livewire.contacto-filter',compact('contactos'));
    }
}
