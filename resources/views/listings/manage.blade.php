<x-layout>
  <x-card class="p-10">
    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Manage Properties
        </h1>
    </header>

    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless($listings->isEmpty())
            @foreach($listings as $listing)

            <tr class="border-gray-300">
                <tr>
                    <th>Property Name</th>
                    <th>Image</th>
                </tr>
                <td class="px-4 py-8 border-t border-b text-center border-gray-300 text-lg">
                    <a href="/listings/{{$listing->id}}"> {{$listing->propertyName}} </a>
                </td>
                <td class="px-4 py-8 border-t border-b flex justify-center border-gray-300 text-lg">
                    <img
                  class="w-10 mr-6 mb-6 "
                  src="{{$listing->file ? asset('storage/' . $listing->file) : asset('images/no-image.png')}}"
                  alt=""
                />
                </td>
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <a href="/listings/{{$listing->id}}/edit" class="text-white bg-sky-600 hover:bg-sky-700 marker:block font-medium rounded-lg text-sm px-5 py-2.5 text-center"><i class="fa-solid fa-pen-to-square"></i>
                        Edit</a>
                </td>

                
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                  <form method="POST" action="/listings/{{$listing->id}}">
                    @csrf
                    @method('DELETE')
                    <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="text-white bg-red-600 hover:bg-red-800 marker:block font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button"><i class="fa-solid fa-trash"></i>
                        Delete
                       </button>

                       <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-md md:h-auto">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                    <span class="sr-only">Close</span>
                                </button>
                                <div class="p-6 text-center">
                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this product?</h3>
                                    <button data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                        Yes, I'm sure
                                    </button>
                                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                  <p class="text-center">No Listings Found</p>                  
                </td>                
            </tr>
            @endunless
        </tbody>
    </table>
  </x-card>

</x-layout>


 