<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-none">
            <a href="{{ route('controlpanel') }}" class="underline text-blue-700 mr-2"><i class="fa-solid fa-angles-left"></i></a>
            {{ __('Facturas') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="flex flex-row space-x-2">
                <div class="basis-1/4 border-2 p-2">
                     
                </div>
                <div class="basis-3/4 border-2 p-2">
                    <h1 class="font-bold text-lg text-center">Facturas</h1>
                    @if($facturas)
                        <ul>
                            @foreach ($facturas as $item)
                                <li>
                                    <span class="border-l-indigo-500">{{$item->operacion->name}} </span>
                                    <span class="font-bold"> {{$item->fecha}}</span> 
                                    <span class="pr-4 {{$item->estado->color}}">{{$item->num_factura}} {{$item->estado->name}}</span> 
                                    {{$item->emisor->full_name}} ->
                                    {{$item->receptor->full_name}}
                                    ({{$item->concepto->name}})
                                    <span class="pr-4 text-red-700">{{$item->total}} €</span><br>
                                    Envios: 
                                    <ul>
                                        @foreach ($item->envios as $subitem)
                                            <li>{{$subitem->name}} {{$subitem->pivot->seguimiento}} 
                                                <span class="pr-4 text-red-700">{{$subitem->pivot->total}}€</span></li>
                                        @endforeach
                                    </ul>
                                    Envios: 
                                    <ul>
                                        @foreach ($item->pagos as $subitem)
                                            <li>{{$subitem->name}} <span class="pr-4 text-red-700">{{$subitem->pivot->total}}€</span></li>
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
         </div>
    </div>
</x-app-layout>
