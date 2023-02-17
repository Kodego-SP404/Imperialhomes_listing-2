<x-layout>
@include('partials._search')

<a href="/" class="inline-block text-black ml-4 mb-4"
                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
  
      <x-card class="p-10">
        <div class="grid grid-cols-2 items-center">
            <div class="">
                <img
                class="w-100 h-full mr-6 rounded-tl-3xl rounded-bl-3xl"
                src="{{$listing->file ? asset('storage/' . $listing->file) : asset('images/h10.jpg')}}"
                alt=""
            />
            </div>
            <div class="bg-sky-900 h-full rounded-tr-3xl rounded-br-3xl">
                <div class="p-5 flex flex-col gap-3">
                    <h3 class="text-5xl text-yellow-500 font-bold mb-2">{{$listing->propertyName}}</h3>
            
                  <div class="flex items-center gap-2">
                    <span>
                        <x-listing-tags :tagsCsv="$listing-> tags"/>
                    </span>           
                    <span class="text-lg text-white">
                        <i class="fa-solid fa-location-dot text-white"></i> {{$listing->location}}
                    </span>
                  </div>
                  <div class="text-xl font-light text-white">
                    {{$listing->model}}
                  </div>
            
                    
                  <div class="text-lg mb-2 text-white">
                    <span class="text-white">Php </span>
                    {{$listing->price}}
                 </div>
                    
                  <div class="mt-2 flex gap-2">
                    <button class="bg-yellow-500 hover:opacity-90
                    px-6 py-2 rounded-md text-white">Buy Me</button>
                  </div>
                </div>
                <div class="p-5">
                    <h3 class="text-3xl font-bold mb-2 text-yellow-500">
                        Property Description
                    </h3>
                    <div class="text-lg space-y-6 text-white">
                        <p>
                          {{$listing->description}}
                        </p>
        
                    </div>
                </div>
                </div>
                  
                </div>
                
            </div>
        </div>
        
        </x-card>
 




    


</x-layout>