<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('contactos') }}" class="underline text-blue-700 mr-2"><i class="fa-solid fa-angles-left"></i></a>
        {{ __('Contacto: '). $contacto->alias." (".$contacto->telefono.")"}}
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
           <div class="flex flex-row space-x-2">
                <div class="basis-1/4 border-2 p-2">
                    
                </div>
                <div class="basis-3/4 border-2 p-2">
                    @livewire('contacto-edit',['contacto' => $contacto],key($contacto->id))      
                    @livewire('direccion-filter',['direccions' => $contacto->direccions])      
                </div>
           </div>
        </div>
    </div>
</x-app-layout>
