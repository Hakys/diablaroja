<div>
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

