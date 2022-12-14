<div>
    <h2 class="font-bold text-lg text-left">Direcciones Asociadas:</h2>
    <div id="accordion-collapse" data-accordion="collapse" class="w-full">
        @foreach ($direccions as $direccion)
                <h3 id="accordion-collapse-heading-{{$direccion->id}}" class="flex text-lg border border-l-4  border-zinc-600">
                    <button type="button" class="flex items-center font-semibold justify-between 
						hover:text-white text-left hover:bg-zinc-600
						focus:ring-2 focus:ring-gray-200
						w-3/4" 
						data-accordion-target="#accordion-collapse-body-{{$direccion->id}}" 
						aria-expanded="false" 
						aria-controls="accordion-collapse-body-{{$direccion->id}}">
                        
						<div class="w-1/4 border-r border-r-white px-2">{{$direccion->tipo->name}}</div>
						<div class="w-full px-2">{{$direccion->direccion}} {{$direccion->poblacion}}</div>
						
                        <svg data-accordion-icon class="w-7 h-7 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" 
								clip-rule="evenodd"></path>
						</svg>
                    </button><div class="border-x border-l-white whitespace-nowrap px-2">
							<i class="fa-solid fa-file-export"></i></i><a href="#">
							<span class="text-sm"> {{$direccion->facturas_emitidas->count()}} Emitidas</a></span>
						</div>
						<div class="whitespace-nowrap px-2">
							<i class="fa-solid fa-file-import"></i>
							<span class="text-sm"> {{$direccion->facturas_recibidas->count()}} Recibidas</span>
						</div>
                </h3>  
                <div id="accordion-collapse-body-{{$direccion->id}}" class="hidden mb-2" aria-labelledby="accordion-collapse-heading-{{$direccion->id}}">  
                    @livewire('direccion-edit',['direccion'=> $direccion], key($direccion->id)) 
                </div>
        @endforeach
    </div> 

<hr/>

<!-- This is an example component -
<div class="max-w-2xl mx-auto bg-white p-16 rounded">

	<div id="accordion-collapse" data-accordion="collapse">
		<h2 id="accordion-collapse-heading-1">
			<button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium text-left border border-gray-200 dark:border-gray-700 border-b-0 text-gray-900 dark:text-white bg-gray-100 dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-t-xl" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                <span>What is Flowbite?</span>
                <svg data-accordion-icon class="w-6 h-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
		</h2>
		<div id="accordion-collapse-body-1" aria-labelledby="accordion-collapse-heading-1">
			<div class="p-5 border border-gray-200 dark:border-gray-700 dark:bg-gray-900 border-b-0">
				<p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is an open-source library of interactive
					components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.</p>
				<p class="text-gray-500 dark:text-gray-400">Check out this guide to learn how to <a
						href="#" target="_blank"
						class="text-blue-600 dark:text-blue-500 hover:underline">get started</a> and start developing
					websites even faster with components on top of Tailwind CSS.</p>
			</div>
		</div>
		<h2 id="accordion-collapse-heading-2">
			<button type="button" class="flex items-center focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 justify-between p-5 w-full font-medium border border-gray-200 dark:border-gray-700 border-b-0 text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                <span>Is there a Figma file available?</span>
                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
		</h2>
		<div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
			<div class="p-5 border border-gray-200 dark:border-gray-700 border-b-0">
				<p class="mb-2 text-gray-500 dark:text-gray-400">Flowbite is first conceptualized and designed using the
					Figma software so everything you see in the library has a design equivalent in our Figma file.</p>
				<p class="text-gray-500 dark:text-gray-400">Check out the <a href="https://flowbite.com/figma/"
						target="_blank" class="text-blue-600 dark:text-blue-500 hover:underline">Figma design system</a>
					based on the utility classes from Tailwind CSS and components from Flowbite.</p>
			</div>
		</div>
		<h2 id="accordion-collapse-heading-3">
			<button type="button" class="flex items-center border focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-800 border-gray-200 dark:border-gray-700 justify-between p-5 w-full font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                <span>What are the differences between Flowbite and Tailwind UI?</span>
                <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </button>
		</h2>
		<div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
			<div class="p-5 border border-gray-200 dark:border-gray-700 border-t-0">
				<p class="mb-2 text-gray-500 dark:text-gray-400">The main difference is that the core components from
					Flowbite are open source under the MIT license, whereas Tailwind UI is a paid product. Another
					difference is that Flowbite relies on smaller and standalone components, whereas Tailwind UI offers
					sections of pages.</p>
				<p class="mb-2 text-gray-500 dark:text-gray-400">However, we actually recommend using both Flowbite,
					Flowbite Pro, and even Tailwind UI as there is no technical reason stopping you from using the best
					of two worlds.</p>
				<p class="mb-2 text-gray-500 dark:text-gray-400">Learn more about these technologies:</p>
				<ul class="list-disc pl-5 dark:text-gray-400 text-gray-500">
					<li><a href="https://flowbite.com/pro/" target="_blank"
							class="text-blue-600 dark:text-blue-500 hover:underline">Flowbite Pro</a></li>
					<li><a href="https://tailwindui.com/" rel="nofollow" target="_blank"
							class="text-blue-600 dark:text-blue-500 hover:underline">Tailwind UI</a></li>
				</ul>
			</div>
		</div>
	</div>
-->
</div>
@push('scripts')
    <script src="https://unpkg.com/flowbite@1.3.3/dist/flowbite.js"></script>    
@endpush

  
</div>