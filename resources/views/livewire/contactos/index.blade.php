<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-none">
            <a href="{{ route('controlpanel') }}" class="underline text-blue-700 mr-2"><i class="fa-solid fa-angles-left"></i></a>
            {{ __('Contactos') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
           <div class="flex flex-row space-x-2">
                <div class="basis-1/4 border-2 p-2">
                    
                </div>
                <div class="basis-3/4 border-2 p-2">
                    <h1 class="font-bold text-lg text-center">Contactos y Direcciones</h1>
                    
                </div>
           </div>
        </div>
    </div>
</x-app-layout>
