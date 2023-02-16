@props(['listing'])
@vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <script
      src="https://kit.fontawesome.com/782572ab2b.js"
      crossorigin="anonymous"
    ></script>
<x-card>
        
  
        <div class="rounded-lg shadow-lg bg-white mx-5 my-5 ">
          <a href="#!">
            <img
              class="rounded-t-lg"
              src="{{$listing->logo ? asset('images/' . $listing->logo) : asset('images/no-image.png')}}"
              alt=""
            />
          </a>
          <div class="p-6">
            <h5 class="text-gray-900 text-xl font-medium mb-2">{{$listing->propertyName}}</h5>
            <p class="text-gray-700 text-base mb-4">
                {{$listing->propertyType}}
            </p>
            <p>{{$listing->model}}</p>
            
            <div class="text-lg my-4">
            <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
            </div>
            <div class="text-lg my-4">{{$listing->price}}</div>  
            <x-listing-tags :tagsCsv="$listing-> tags"/>
                <br />
            <button
              type="button"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >
              Button
            </button>
            <button
              type="button"
              class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
            >
              <i class="fa-solid fa-cart-plus"></i>
            </button>
          </div>
        </div>
   


  {{-- <div class="flex">
      <img
          class="hidden w-48 mr-6 md:block"
          src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('images/no-image.png')}}"
          alt=""
      />
      <div>
          <h3 class="text-2xl">
              <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
          </h3>
          <div class="text-xl font-bold mb-4">{{$listing->company}}</div>
          <x-listing-tags :tagsCsv="$listing->tags"/>

          <div class="text-lg mt-4">
              <i class="fa-solid fa-location-dot"></i> {{$listing->location}}
          </div>
      </div>
  </div> --}}
</x-card>