<div>
    <h1 class="font-bold text-lg text-center">Operaciones</h1>
    @if($operaciones)
        <ul>
            @foreach ($operaciones as $item)
                <li><a href="{{ route('contactos.filter', $item) }}" class="text-blue-700">
                    {!!$item->icon!!} {{$item->name}}</a></li> 
            @endforeach
        </ul>
    @endif 
    <x-jet-button wire:click="showModal" class="bg-blue-500 hover:bg-blue-700">
        Add New Item
    </x-jet-button>
</div>
