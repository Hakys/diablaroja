<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Operacion;

//use Livewire\WithPagination;
//use WithPagination;

class OperacionFilter extends Component
{
    public function render()
    {
        $operaciones = Operacion::all();
        return view('livewire.operacion-filter',compact('operaciones'));
    }
    
    public function showModal(){
        $this->emit(event: 'showModal');
    }
}
