<div class="mx-6 border border-zinc-600">
    <!--
    <h3 class="font-bold text-lg text-left pl-2 bg-zinc-600 text-white">
        <div class="flex">
            <div class="w-1/4 border-r border-r-white px-2">{{$direccion->tipo->name}}</div>
            <div class="w-full px-2">{{$direccion->direccion}} {{$direccion->poblacion}}</div>
            <div class="w-1/4 border-x border-l-white whitespace-nowrap px-2">F. Emitidas: {{$direccion->facturas_emitidas->count()}}</div>
            <div class="w-1/4 whitespace-nowrap px-2">F. Recibidas: {{$direccion->facturas_recibidas->count()}}</div>
            <div class="w-1/8 border-l border-l-white px-2"><button type="buton" class=""><i class="fa-solid fa-angles-down"></i></button></div>
        </div>
    </h3>
    -->   
    <form wire:submit.prevent="save" class="">
        <div class="flex -px-2">  
            <div class="w-1/4 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="direccion">
                    Tipo de Operación
                </label>   
                <select name="direccion" wire:model="direccion.tipo_id" class="w-full mb-1">
                    <option value="" class="italic">Seleccione uno</option>
                    @foreach ($direccion->tipo->operacion->tipos as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>            
                @error('direccion.tipo_id') <span class="text-right text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/2 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="full_name">
                    Nombre Completo
                </label> 
                <input type="text" name="full_name" wire:model="direccion.full_name" placeholder="Nombre Completo" class="w-full mb-1 placeholder:italic">
                @error('direccion.full_name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/4 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="telefono">
                    Teléfono
                </label> 
                <input type="text" name="telefono" wire:model="direccion.telefono" placeholder="Teléfono" class="w-full mb-1 placeholder:italic">
                @error('direccion.telefono') <span class="text-red-500 text-xs mb-1">{{ $message }}</span> @enderror
            </div>
            
        </div>
        <div class="flex -px-2">  
            <div class="w-3/4 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="direccion">
                    Dirección
                </label> 
                <input type="text" name="direccion" wire:model="direccion.direccion" placeholder="Dirección" class="w-full mb-1 placeholder:italic">
                @error('direccion.direccion') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/4 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="cp">
                    Código Postal
                </label> 
                <input type="text" name="cp" wire:model="direccion.cp" placeholder="Código Postal" class="w-full mb-1 placeholder:italic">
                @error('direccion.cp') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="flex -px-6">              
            <div class="w-1/3 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="poblacion">
                    Población
                </label> 
                <input type="text" name="poblacion" wire:model="direccion.poblacion" placeholder="Población" class="w-full mb-1 placeholder:italic">
                @error('direccion.poblacion') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/3 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="provincia">
                    Provincia
                </label> 
                <input type="text" name="provincia" wire:model="direccion.provincia" placeholder="Provincia" class="w-full mb-1 placeholder:italic">
                @error('direccion.provincia') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-1/3 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="pais">
                    País
                </label> 
                <input type="text" name="pais" wire:model="direccion.pais" placeholder="Pais" class="w-full mb-1 placeholder:italic">
                @error('direccion.pais') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="flex -px-6">  
            <div class="w-1/3 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="nif">
                    CIF ó NIF
                </label> 
                <input type="text" name="nif" wire:model="direccion.nif" placeholder="CIF ó NIF" class="w-full mb-1 placeholder:italic">
                @error('direccion.nif') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="w-2/3 p-2">
                <label class="block text-gray-700 font-bold mb-1" for="email">
                    Correo Electrónico
                </label> 
                <input type="text" name="email" wire:model="direccion.email" placeholder="Correo Electrónico" class="w-full mb-1 placeholder:italic">
                @error('direccion.email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>   
            <div class="w-1/8 p-2 flex justify-center items-center space-x-2">
                <button type="submit" class="h-full flex items-end pb-2"><i class="fa-regular fa-floppy-disk fa-2x "></i></button>
                <button type="submit" class="h-full flex items-end pb-2"><i class="fa-solid fa-trash-can fa-2x "></i></button>
            </div>
        </div>
    </form>
</div>
