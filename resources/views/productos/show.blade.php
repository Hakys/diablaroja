<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-none">
            <a href="{{ route('productos') }}" class="underline text-blue-700 mr-2"><i class="fa-solid fa-angles-left"></i></a>
            {{ __('Productos: ').$producto->referencia }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-8 sm:px-6 lg:px-8">
            <div class="flex flex-row space-x-2">
                <div class="basis-1/4 border-2 p-2">
                    
                </div>
                <div class="basis-3/4 border-2 p-2">                    
                    <div class="flex flex-wrap left-0 max-w-full mb-2">
                        <div class="basis-1/10 h-24"> 
                            <img class="p-1 border max-w-full h-full" 
                                src="{{ $producto->url_image?$producto->url_image:url('/storage/images/no_disponible.jpg') }}">
                        </div>                                   
                        <div class="pl-2">
                            <span class="border-l-indigo-500">{{$producto->referencia}} </span> 
                            <span class="pr-4"><a href="{{$producto->url}}" target="_blank">{{$producto->title}}</a></span><br/> 
                            <span class="font-bold">{{$producto->release_at}} </span>
                        </div>                        
                    </div>
                </div>
            </div>
         </div>
    </div>
</x-app-layout>
