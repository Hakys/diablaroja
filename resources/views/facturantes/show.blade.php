<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Facturantes') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
           <div class="flex flex-row space-x-2">
                <div class="basis-1/4 border-2 p-2">
                    
                </div>
                <div class="basis-3/4 border-2 p-2">
                    <h1 class="font-bold text-lg text-center">Facturantes y Direcciones</h1>
                    @if($facturantes)
                        <ul>
                            @foreach ($facturantes as $item)
                                <li><span class="pr-4 text-green-500">{{$item->telefono}}</span> {{$item->alias}} - {{$item->tipo_facturas->first()->name}}</li> 
                                @if($item->direccions)
                                    <ul class="pl-6">
                                        @foreach ($item->direccions as $subitem)
                                            <li>{{$subitem->direccion}} {{$subitem->poblacion}}</li>
                                        @endforeach
                                    </ul> 
                                @endif
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
