<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $fillable = [
        "operacion_id","name","telefono","slug"
    ];

    //Relación 1:M padre
    public function operacion(){
        return $this->belongsTo(Operacion::class);
    }
    
    //Relación 1:M hijos
    public function direccions(){
        return $this->hasMany(Direccion::class);
    }

    //URL Amigable
    public function getRouteKeyName(){
        return 'telefono';
    }

    public function __invoke(){
        $contactos = Contacto::all();
        return view('contactos.show',compact('contactos'));
    }
}
