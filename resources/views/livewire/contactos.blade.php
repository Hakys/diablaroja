<div class="flex flex-row space-x-2">
    <div class="basis-1/4 border-2 p-2">              
        <h1 class="font-bold text-lg text-center">Operaciones</h1>
        @if($operaciones)
            <ul>
                @foreach ($operaciones as $item)
                    <li><button wire:click="setOperacion({{$item->id}})" 
                        class="{{($operacion_id==$item->id)?'font-bold text-blue-700':''}}">{!!$item->icon!!} {{$item->name}}</button></li> 
                @endforeach
            </ul>
        @endif  
        @livewire('contacto-create')
    </div>
    <div class="basis-3/4 border-2 p-2">
        <h1 class="font-bold text-lg text-center">Contactos y Direcciones</h1>
        @if($contactos)
            <ul>
                @foreach ($contactos as $item)
                    <li> 
                        <a href="{{ route('contactos.show',$item->telefono) }}" class="text-blue-700 underline" >
                            <span class="pr-4 text-green-500">{{$item->telefono}}</span> {{$item->alias}}
                        </a>
                        <ul class="pl-6">
                            @foreach ($item->direccions as $subitem)
                                <li>{{$subitem->tipo->name}} {{$subitem->direccion}} {{$subitem->poblacion}}</li>
                            @endforeach
                        </ul> 
                    </li>
                @endforeach
            </ul>
        @else
            <span class="text-red-500">No hay elementos a mostrar</span>
        @endif
    </div>
</div>

