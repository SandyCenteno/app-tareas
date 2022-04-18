<nav class="bg-blue-900 shadow-lg">
    <div class="mx-auto px-4">
        <div class="flex justify-between">

            <!-- Logo -->
            <div class="flex space-x-7">
                <div>
                    <a href="/" class="flex items-center py-4 px-2 text-white">
                       Logo
                    </a>
                </div>
            </div>
        

            <!-- Navbar items -->
            <div class="hidden md:flex items-center space-x-3 ">
                <a href="/" class="py-2 px-2 font-medium text-white rounded hover:bg-blue-500 hover:text-white transition duration-300">
                    Inicio
                </a>
                <a href="/" class="py-2 px-2 font-medium text-white rounded transition duration-300">
                    <img class="inline-block h-6 w-6 rounded-full ring-2 ring-white" src="{{ asset('/img/user.jpg') }}" alt="">
                </a>
            </div>

            <!-- Menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-500 hover:text-white " x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div class="hidden mobile-menu bg-white">
        <ul class="">

            <li class="active">
                <a href="/" class="bg-blue-500 block text-sm px-2 py-4 hover:bg-blue-500 transition duration-300">
                    Inicio
                </a>
            </li>

        </ul>
    </div>

</nav>