<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
           <div class="flex flex-row space-x-2">
                <div class="basis-1/4 border-2 p-2">
                    <h1 class="font-bold text-lg text-center">Operaciones</h1>
                    @if($operaciones)
                        <ul>
                            @foreach ($operaciones as $item)
                                <li>{!!$item->icon!!} {{$item->name}}</li> 
                            @endforeach
                        </ul>
                    @else
                        <span class="text-red-500">No hay elementos a mostrar</span>
                    @endif
                </div>
                <div class="basis-1/4 border-2 p-2">
                    <h1 class="font-bold text-lg text-center">Tipos de Facturas</h1>
                    @if($tipofacturas)
                        <ul>
                            @foreach ($tipofacturas as $item)
                                <li>{!!$item->icon!!} <span class="{!!$item->color!!}">{{$item->name}} - {{$item->descripcion}}</span></li> 
                            @endforeach
                        </ul>
                    @else
                        <span class="text-red-500">No hay elementos a mostrar</span>
                    @endif
                </div>
                <div class="basis-1/4 border-2 p-2">
                    <h1 class="font-bold text-lg text-center">Estados</h1>
                    @if($estados)
                        <ul>
                            @foreach ($estados as $item)
                                <li> <p class="{!!$item->color!!}"> {!!$item->icon!!} {{$item->name}} </p></li> 
                            @endforeach
                        </ul>
                    @else
                        <span class="text-red-500">No hay elementos a mostrar</span>
                    @endif
                </div>
                <div class="basis-1/4 border-2 p-2">
                    <h1 class="font-bold text-center">Conceptos</h1>
                    @if($conceptos)
                        <ul class="flex flex-row flex-wrap">
                            @foreach ($conceptos as $item)
                                <li> <p class=""> <i class="fa-regular fa-circle-check"></i> {{$item->name}} </p> </li> 
                            @endforeach
                        </ul>
                    @else
                        <span class="text-red-500">No hay elementos a mostrar</span>
                    @endif
                </div>
           </div>
        </div>
    </div>
</x-app-layout>
