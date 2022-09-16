<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
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
                                 <li><span class="border-l-indigo-500">{{$item->operacion->name}}</span> <span class="pr-4 text-green-500">{{$item->telefono}}</span> {{$item->alias}}
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
         </div>
    </div>
</x-app-layout>
