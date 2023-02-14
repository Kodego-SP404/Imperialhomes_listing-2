<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="//unpkg.com/alpinejs" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#1e40af",
                        },
                    },
                },
            };
        </script>
        <title>IMPERIALHOMES | You're my homie</title>
    </head>
    <body>
       <!-- ####################################### Start Navbar ########################################### -->
    <nav
    class=" px-2 sm:px-4 py-2.5 bg-sky-900 min-w-full md:min-w-screen z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
      <a href="/" class="flex items-center">
        <img src="/" class="h-6 mr-3 sm:h-9">
        <span class="self-center text-xl font-semibold whitespace-nowrap text-amber-500">IMPERIAL</span><span
          class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">HOMES</span>
      </a>

      <div class="flex lg:order-2">
        <ul class="flex space-x-6 mr-6 text-lg">
            <button
            class="text-white bg-amber-500 hover:bg-amber-400 focus:ring-2 focus:outline-none focus:ring-amber-300 font-medium rounded-lg text-sm px-5 py-2 text-center mr-5 md:mr-0"><a
            href="/listings/create"
            class="text-white"
            >Post Properties</a
        ></button>
            @auth                  
            <li>
                <a href="/listings/manage" class="hover:text-laravel"
                    ><span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"><i class="fa-solid fa-gear"></i>
                    </span></a
                >
            </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                @csrf
                <button type="submit">
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white" ><i class="fa-solid fa-right-from-bracket"></i></span>
                </button>
                </form>
            </li>
            @else
            <li>
                <a href="/register" class="hover:text-laravel"
                    ><i class="fa-solid fa-user-plus"></i> Register</a
                >
            </li>
            <li>
                <a href="/login" class="hover:text-laravel"
                    ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                    Login</a
                >
            </li>
            @endauth
        </ul>


        <button data-collapse-toggle="navbar-sticky" type="button"
          class="inline-flex items-center p-2 text-sm text-amber-500 rounded-lg lg:hidden hover:bg-amber-100 focus:outline-none focus:ring-2 focus:ring-amber-200"
          aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
              clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      
      <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
        <ul
          class="flex flex-col p-4 mt-4 lg:flex-row lg:space-x-8 lg:mt-0 lg:text-sm lg:font-medium lg:border-0">
          
          <li>
            <a href="/"
              class="block py-2 pl-3 pr-4 text-white rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0 focus:text-amber-500"
              aria-current="page"><i class="fa-solid fa-house"></i> HOME</a>
          </li>
          <li>
            <a href="#about-us"
              class="block py-2 pl-3 pr-4 text-white rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
                class="fa-solid fa-magnifying-glass"></i> ABOUT</a>
          </li>
          <li>
            <a href="/property"
              class="block py-2 pl-3 pr-4 text-white rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
                class="fa-solid fa-city"></i> PROPERTIES</a>
          </li>
          <li>
            <a href="/agents"
              class="block py-2 pl-3 pr-4 text-white rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
                class="fa-solid fa-user-tie"></i> AGENTS</a>
          </li>
          <li>
            <a href="#contacts"
              class="block py-2 pl-3 pr-4 text-white rounded hover:text-white hover:bg-amber-500 lg:hover:bg-transparent lg:hover:text-amber-500 lg:p-0"><i
                class="fa-solid fa-envelope"></i> CONTACTS</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  
        <main>
            {{$slot}}
            <x-featured-property />
            <x-about-us />
            <x-testimonial />
            <x-contact />
        </main>
        <x-footer />
        <x-flash-message />
    </body>
</html>