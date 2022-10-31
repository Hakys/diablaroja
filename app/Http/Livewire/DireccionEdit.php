<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Direccion;

class DireccionEdit extends Component
{
    public Direccion $direccion;
    
    protected $rules = [
        'direccion.tipo_id' => 'required|exists:tipos,id',
        'direccion.full_name' => 'required',
        'direccion.telefono' => 'required',
        'direccion.nif' => 'required',
        'direccion.email' => 'required',
        'direccion.direccion' => 'required',
        'direccion.cp' => 'required',
        'direccion.poblacion' => 'required',
        'direccion.provincia' => 'required',
        'direccion.pais' => 'required',
    ];

    public function render()
    {
        return view('livewire.direccion-edit');
    }

    public function save(){
        //$this->validate();
        //$this->contacto->update();
        return redirect()->route('contactos.show', [$this->direccion->contacto->telefono]);
        //$this->emitTo('contactos','mount');
    }
}
