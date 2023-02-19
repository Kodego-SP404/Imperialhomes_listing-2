<x-layout>
<section
      class="flex justify-center h-full gradient-form bg-gray-200 md:h-screen"
    >
      <div class="container py-12 px-6 h-full">
        <div
          class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800"
        >
          <div class="xl:w-10/12">
            <div class="block bg-white shadow-lg rounded-lg">
              <div
                class="flex justify-center items-center lg:flex lg:flex-wrap g-0"
              >
                <div class="lg:w-6/12 px-4 md:px-0">
                  <div class="md:p-12 md:mx-6">
                    <div class="text-center">
                      <img
                        class="mx-auto w-48 pb-7"
                        src="/Capstone_01/images/logo.png"
                        alt="logo"
                      />
                    </div>
                    <form class="p-10 bg-white rounded shadow-xl" method="POST" action="/users">
                            @csrf
                              <div class="mb-6">
                                  <label for="name" class="inline-block text-lg mb-2">
                                      Name
                                  </label>
                                  <input
                                      type="text"
                                      class="border border-gray-200 rounded p-2 w-full"
                                      name="name"
                                      value="{{old('name')}}"
                                  />
                                  @error('name')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                              </div>
                        
                              <div class="mb-6">
                                  <label for="email" class="inline-block text-lg mb-2"
                                      >Email</label
                                  >
                                  <input
                                      type="email"
                                      class="border border-gray-200 rounded p-2 w-full"
                                      name="email"
                                      value="{{old('email')}}"
                                  />
                                  <!-- Error Example -->
                                  @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                              </div>
                        
                              <div class="mb-6">
                                  <label
                                      for="password"
                                      class="inline-block text-lg mb-2"
                                  >
                                      Password
                                  </label>
                                  <input
                                      type="password"
                                      class="border border-gray-200 rounded p-2 w-full"
                                      name="password"
                                  />
                                  @error('password')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                              </div>
                        
                              <div class="mb-6">
                                  <label
                                      for="password2"
                                      class="inline-block text-lg mb-2"
                                  >
                                      Confirm Password
                                  </label>
                                  <input
                                      type="password"
                                      class="border border-gray-200 rounded p-2 w-full"
                                      name="password_confirmation"
                                  />
                                  @error('password_confirmation')
                                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                                  @enderror
                              </div>
                        
                              <div class="mt-3">
                                <button
                                type="submit"
                                class="inline-block px-6 py-2 border-2 border-amber-400 text-amber-400 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                                data-mdb-ripple="true"
                                data-mdb-ripple-color="light"
                              >
                               Register 
                            </div>                             
                                </button>
                              <div class="flex items-center py-6">
                                <p class="mb-0 mr-2">Already have an account?</p><a href="/login"> <span class="text-amber-400">Log in</span></a>
                              </div>
                          </form>                      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
</x-layout>