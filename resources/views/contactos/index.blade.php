<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-800 leading-none">
            <a href="{{ route('controlpanel') }}" class="underline text-blue-700 mr-2"><i class="fa-solid fa-angles-left"></i></a>
            {{ __('Contactos') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @livewire('contactos')
        </div>
    </div>  
</x-app-layout>
