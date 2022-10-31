<?php

namespace App\Http\Livewire;

use App\Models\Contacto;
use App\Models\Operacion;
use Livewire\Component;
use Illuminate\Support\Str;

class ContactoCreate extends Component
{
    public $contactos;    
    public $operaciones; 
    public $operacion_id; 
    public $alias;
    public $telefono;
   
    protected $rules = [
        'operacion_id' => 'required|exists:operacions,id',
        'alias' => 'required|unique:contactos,alias',
        'telefono' => 'required|unique:contactos,telefono',
    ];

    public function render()
    {
        $this->operaciones = Operacion::all();
        return view('livewire.contacto-create');
    }

    public function save(){
        $this->validate();
        $c = Contacto::create([
            'operacion_id' => $this->operacion_id,
            "alias" => $this->alias,
            'telefono' => $this->telefono,
            'slug' => Str::slug($this->telefono),
        ]);
        $this->reset();
        $this->emitTo('contactos','mount');
    }
}
