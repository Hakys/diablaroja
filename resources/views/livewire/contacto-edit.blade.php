<div>
    <h2 class="font-bold text-lg text-left">Detalles del Contacto:</h2>        
    <form wire:submit.prevent="save" class="w-full mr-4 border">
        <div class="flex -p-2">  
            <div class="w-1/4 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="operacion">
                    Operación
                </label>          
                <select name="operacion" wire:model="contacto.operacion_id" class="w-full mb-1">
                    <option value="">Seleccione una</option>
                    @foreach ($operaciones as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>            
                @error('contacto.operacion_id') <span class="text-right text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/2 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="alias">
                    Nombre o Alias
                </label> 
                <input type="text" name="alias" wire:model="contacto.alias" placeholder="Nombre o Alias" class="w-full mb-1">
                @error('contacto.alias') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/8 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="telefono">
                    Teléfono
                </label> 
                <input type="text" name="telefono" wire:model="contacto.telefono" placeholder="Teléfono" class="w-full mb-1">
                @error('contacto.telefono') <span class="text-red-500 text-xs mb-1">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/8 p-2">
                <button type="submit" class="h-full flex items-end pb-2"><i class="fa-regular fa-floppy-disk fa-2x"></i></button>
            </div>
        </div>
    </form>
</div>