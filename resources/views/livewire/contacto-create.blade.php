<div class="w-full max-w-xs mr-4 border">
      <h2 class="font-bold text-lg text-center">Nuevo Contacto</h2>
      <form wire:submit.prevent="save" class="w-full p-2">            
            <select wire:model="operacion_id" class="w-full mt-2">
                  <option value="">Seleccione una Operación</option>
                  @foreach ($operaciones as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                  @endforeach
            </select>            
            @error('operacion_id') <span class="text-right text-red-500 text-xs">{{ $message }}</span> @enderror

            <input type="text" wire:model="alias" placeholder="Nombre o Alias" class="w-full mt-2">
            @error('alias') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            
            <input type="text" wire:model="telefono" placeholder="Teléfono" class="w-full mt-2">
            @error('telefono') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            <button type="submit" class="btn btn-blue w-full mt-2">Guardar</button>
      </form>
</div>