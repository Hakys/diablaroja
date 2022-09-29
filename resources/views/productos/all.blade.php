<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-none">
            <a href="{{ route('controlpanel') }}" class="underline text-blue-700 mr-2"><i class="fa-solid fa-angles-left"></i></a>
            {{ __('Productos') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-8 sm:px-6 lg:px-8">
            <div class="flex flex-row space-x-2">
                <div class="basis-1/4 border-2 p-2">
                    
                </div>
                <div class="basis-3/4 border">                    
                    @if($productos)
                       <div class="flex flex-col">
                            @foreach ($productos as $item)
                                <div class="flex flex-row flex-nowrap mb-2 border h-24">
                                    <div class="flex w-1/6 border p-1">
                                        <img class="max-w-full h-auto mx-auto" 
                                            src="{{ $item->url_image?$item->url_image:url('/storage/images/no_disponible.jpg') }}">
                                    </div>
                                    <div class="flex w-full border px-2">
                                        {{$item->title}} <br>
                                        Ref: {{$item->referencia}}                                        
                                        Lanzamiento: {{$item->release_at}} <br>
                                        Unds: {{$item->stock}} 
                                        Coste: {{$item->coste}}€ 
                                        IVA: {{$item->vat}}% 
                                        PVP: {{$item->price}}€ <br>                                                                               
                                        Nuevo: {{$item->new}} 
                                        Disponible: {{$item->available}} <br>
                                    </div>
                                    <div class="border whitespace-nowrap p-2 text-right">
                                        <a class="text-pink-500 font-bold text-lg mb-2 underline" href="{{$item->url}}" target="_blank">
                                            Proveedor<i class="ml-2 fa-solid fa-angles-right"></i></a><br>                                       
                                        <a class="text-red-600 font-bold text-lg underline" 
                                            href="https://diablaroja.es/busqueda?controller=search&s={{$item->referencia}}" target="_blank">
                                                Tienda<i class="ml-2 fa-solid fa-angles-right"></i></a><br> 
                                        <a class="text-blue-700 font-bold text-lg underline" 
                                            href="{{ route('productos.show',$item->referencia) }}" target="_blank">
                                                Detalles<i class="ml-2 fa-solid fa-angles-right"></i></a>
                                    </div>
                                </div>
                                <!--    <div class="flex-1 w-1/10 border">
                                        
                                    </div>
                                    <div class="flex-auto w-8/10 border"> </div>
                                    <div class="flex-1 w-1/10 border"> </div>
                                </div>
                                
                                <div class="flex flex-wrap mb-2 h-24">
                                    <div class="w-1/10 w-full"> 
                                        <img class="p-1 border block object-cover object-center w-full h-full" 
                                            src="{{ $item->url_image?$item->url_image:url('/storage/images/no_disponible.jpg') }}">
                                    </div>                                   
                                    <div class="w-8/10 pl-2">
                                        <a href="{{ route('productos.show',$item->referencia) }}" class="underline text-blue-700 mr-2">
                                            {{$item->referencia}}</a> 
                                        <span class="pr-4">{{$item->title}}</span><br/> 
                                        <span class="font-bold">{{$item->release_at}} </span>
                                    </div>
                                    <div class="w-1/10 text-right flex flex-col w-full"> 
                                        <a class="text-pink-500 font-bold text-lg mb-2 underline" href="{{$item->url}}" target="_blank">
                                            Proveedor<i class="ml-2 fa-solid fa-angles-right"></i></a>
                                        <a class="text-red-600 font-bold text-lg underline" 
                                            href="https://diablaroja.es/busqueda?controller=search&s={{$item->referencia}}" target="_blank">
                                            Mi Tienda<i class="ml-2 fa-solid fa-angles-right"></i></a>
                                    </div>
                                </div>
                                -->
                            @endforeach
                        </div>
                    @else
                        <span class="text-red-500">No hay elementos a mostrar</span>
                    @endif
                </div>
            </div>
         </div>
    </div>
</x-app-layout>
