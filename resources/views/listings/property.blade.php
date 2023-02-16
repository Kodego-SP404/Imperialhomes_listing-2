<x-layout>
  @include('partials._navbar')

  <div
  class="relative overflow-hidden bg-no-repeat bg-cover"
  style="
    background-position: 50%;
    background-image: url('/images/pedro-lastra-Nyvq2juw4_o-unsplash.jpg');
    height: 550px;
  "
>
  <div
    class="absolute top-0 right-0 bottom-0 left-0 w-full h-full overflow-hidden bg-fixed"
    style="background-color: rgba(0, 0, 0, 0.6)"
  >
    <div class="flex justify-center items-center h-full">
      <div class="text-center text-white px-6 md:px-12">
        <ol class="list-reset flex items-center justify-center">
          <li>
            <a href="#" class="text-1xl text-white hover:text-black"
              >Home</a
            >
          </li>
          <li><span class="text-gray-500 mx-2">/</span></li>
          <li>
            <a href="#" class="text-1xl text-yellow-900"
              >Properties</a
            >
          </li>
        </ol>
        <h3 class="text-7xl text-yellow-500 font-bold mb-8 animate__animated animate__fadeInUp animate__fast">PROPERTIES</h3>
      </div>
    </div>
  </div>
</div>

  @include('partials._search')
  


<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

@unless(count($listing) == 0)

@foreach ($listings as $listing)
  <x-listing-card :listing="$listing" />
@endforeach

@else
  <p>No Listings Found using unless</p>
@endunless
</div> 

 <div class="mt-6 p-4">
  {{$listings->links()}}
</div>
  
  
  
    </div>
  </x-layout>
  <x-footer />