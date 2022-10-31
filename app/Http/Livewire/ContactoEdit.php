<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contacto;
use App\Models\Operacion;
use Illuminate\Support\Str;

class ContactoEdit extends Component
{  
    public $operaciones; 
    public Contacto $contacto; 
   
    protected $rules = [
        'contacto.operacion_id' => 'required|exists:operacions,id',
        'contacto.alias' => 'required|unique:contactos,alias,id',
        'contacto.telefono' => 'required|unique:contactos,telefono,id',
    ];

    public function render()
    {
        $this->operaciones = Operacion::all();
        return view('livewire.contacto-edit');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        if(!$this->contacto->originalIsEquivalent('alias'))
            $this->validateOnly('contacto.alias');
        if(!$this->contacto->originalIsEquivalent('telefono'))
            $this->validateOnly('contacto.telefono');    
        $this->contacto->slug = Str::slug($this->contacto->telefono);
        $this->contacto->update();
        return redirect()->route('contactos.show', [$this->contacto]);
        //$this->emitTo('contactos','mount');
    }
}
