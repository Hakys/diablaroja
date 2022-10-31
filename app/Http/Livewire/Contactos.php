<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contacto;
use App\Models\Operacion;

class Contactos extends Component
{
    public $contactos;
    public $operaciones;
    public Operacion $operacion;
    public $operacion_id;

    protected $listeners = ['mount'];

    public function mount(){
        $this->operaciones = Operacion::all();
        if($this->operacion_id){
            $this->operacion = Operacion::where('id',$this->operacion_id)->first();
            $this->contactos = $this->operacion->contactos->all();
        }else
            $this->contactos = Contacto::all();
    }

    public function render()
    {
        return view('livewire.contactos');
    }

    public function setOperacion($id){
        $this->operacion_id = $id;
        $this->operacion = Operacion::where('id',$this->operacion_id)->first();
        return $this->contactos = $this->operacion->contactos->all(); 
    }
}
