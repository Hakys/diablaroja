<x-app-layout>
    <x-slot name="header">
        <a href="{{ route('dashboard') }}" class="text-blue-700 mr-2"><i class="fa-solid fa-angles-left"></i></a>
        {{ __('Contactos') }}
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            @livewire('contactos')
        </div>
    </div>  
</x-app-layout>
