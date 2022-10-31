<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-none">
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
                                    <li>
                                        {!!$item->icon!!} {{$item->name}}
                                    </li> 
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
                        <h1 class="font-bold text-lg text-center">Métodos de Pago</h1>
                        @if($metodospagos)
                            <ul>
                                @foreach ($metodospagos as $item)
                                    <li> {!!$item->icon!!} {{$item->name}} </li> 
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="basis-auto space-y-2">
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">
                            <a href="{{ route('contactos')}}" class="text-blue-700">Contactos</a></h1>                        
                        @if($contactos)
                            Número de Entradas: {{$contactos->count()}}
                        @endif
                        @livewire('operacion-filter')
                    </div>
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Direcciones</h1>
                        @if($direcciones)
                            Número de Entradas: {{$direcciones->count()}}
                        @endif
                    </div>
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Facturas</h1>
                        @if($facturas)
                            Número de Entradas: {{$facturas->count()}}
                        @endif
                    </div>
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Envios</h1>
                        @if($envios)
                            Número de Entradas: {{$envios->count()}}
                        @endif
                    </div>
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">Pagos</h1>
                        @if($pagos)
                            Número de Entradas: {{$pagos->count()}}
                        @endif
                    </div>
                    <div class="basis-auto border-2 p-2 flex-nowrap">
                        <h1 class="font-bold text-lg text-center">
                            <a href="{{ route('productos')}}" class="text-blue-700">Productos</a></h1>
                        <a href="{{route('read-xml','DL1')}}">Importar Archivo</a><br>
                        <a href="{{route('read-xml','DL2/5')}}">Importar Productos</a><br>
                        @if($pagos)
                            Número de Entradas: {{$productos->count()}}
                        @endif
                    </div>
                    @livewire('hello-world')
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
    @push('modals')
        @livewire('contacto-create')
    @endpush
</x-app-layout>
