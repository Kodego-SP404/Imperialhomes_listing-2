<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto my-20">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
               Edit your property
            </h2>
            <p class="mb-4">Everyone deserves the opportunuity of home</p>
        </header>
    
        <form method="POST" action="/listings" enctype="multipart/form-data">
          @csrf
            <div class="mb-6">
                <label
                    for="propertyName"
                    class="inline-block text-lg mb-2"
                    >Property Name</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="propertyName" value="{{old('propertyName')}}"/>
                  @error('propertyName')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            <div class="mb-6">
                <label
                    for="propertyType"
                    class="inline-block text-lg mb-2"
                    >Property Type</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="propertyType" value="{{old('propertyType')}}"/>
                  @error('propertyType')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            <div class="mb-6">
                <label for="title" class="inline-block text-lg mb-2"
                    >Model</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="model"
                    value="{{old('model')}}"
                />
                @error('Model')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            <div class="mb-6">
                <label
                    for="location"
                    class="inline-block text-lg mb-2"
                    >Location</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="location"
                    value="{{old('location')}}"
                />
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            {{-- <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2"
                    >Contact Email</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="email"
                    value="{{old('email')}}"
                />
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div> --}}
    
            <div class="mb-6">
                <label
                    for="Price"
                    class="inline-block text-lg mb-2"
                >
                Price
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="price"
                    value="{{old('price')}}"
                />
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="tags"
                    placeholder="Example: For sale or For Rent"
                    value="{{old('tags')}}"
                />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                   Upload Photo
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="logo"
                />
                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            <div class="mb-6">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                   Description
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="description"
                    rows="10"
                    value="{{old('description')}}"
                ></textarea>
                  @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                  @enderror
            </div>
    
            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Submit
                </button>
    
                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
  </x-layout>