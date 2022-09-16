<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="flex flex-row space-x-2 flex-wrap">
                <div class="basis-auto space-y-2">
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Operaciones</h1>
                        @if($operaciones)
                            <ul>
                                @foreach ($operaciones as $item)
                                    <li>{!!$item->icon!!} {{$item->name}}</li> 
                                @endforeach
                            </ul>
                        @endif
                    </div> 
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Tipos de Facturas</h1>
                        @if($tipos)
                            <ul>
                                @foreach ($tipos as $item)
                                    <li class="{!!$item->color!!}">{!!$item->operacion->icon!!} {{$item->operacion->name}} {{$item->name}} - {{$item->descripcion}}</li> 
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="basis-auto space-y-2">
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Estados</h1>
                        @if($estados)
                            <ul>
                                @foreach ($estados as $item)
                                    <li class="{!!$item->color!!}">{!!$item->icon!!} {!!$item->de!!} {{$item->name}}</li> 
                                @endforeach
                            </ul>
                        @endif
                    </div> 
                </div>
                <div class="basis-auto space-y-2">
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Mensajerias</h1>
                        @if($mensajerias)
                            <ul>
                                @foreach ($mensajerias as $item)
                                    <li> {!!$item->icon!!} {{$item->name}} - {{$item->total}} € </li> 
                                @endforeach
                            </ul>
                        @endif
                    </div>
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Tipos de Pago</h1>
                        @if($pagos)
                            <ul>
                                @foreach ($pagos as $item)
                                    <li> {!!$item->icon!!} {{$item->name}} </li> 
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <!--
                <div class="basis-auto flex flex-row space-x-2 flex-wrap">
                                   
                    
                                   
                    
                    
                </div> -->
                <div class="basis-auto">
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Conceptos</h1>
                        @if($conceptos)
                            <ul>
                                @foreach ($conceptos as $item)
                                    <li> {!!$item->operacion->icon!!} {{$item->operacion->name}}  {{$item->name}} </li> 
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
           </div>
        </div>
    </div>
</x-app-layout>
