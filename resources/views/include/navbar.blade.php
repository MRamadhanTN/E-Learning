<nav class="flex justify-between lg:grid lg:grid-cols-3 items-center py-3 px-10 fixed z-20 w-screen transition-all duration-500" id="navbar">
        <a data-aos="fade up" data-aos-duration="500" data-aos-delay="100" href="{{ route('landingpage') }}">
            <img src="{{ asset('image/logo.png') }}" alt="Logo" width="40" />
        </a>
        <div class="py-1 hidden md:block mx-auto" data-aos="fade-down" data-aos-duration="500" data-aos-delay="200">
            <div class="bg-white flex items-center rounded-full {{ (request()->is(['EditProfileStudent', 'MyProfile'])) ? 'hidden':'' }}">
                <input class="rounded-l-full w-full px-6 text-gray-700 leading-tight focus:outline-none" id="search" type="text" placeholder="Search">
                <div class="p-1">
                    <button id="btn" class="bg-blue-500 text-white rounded-full hover:bg-blue-400 focus:outline-none w-9 h-9 flex items-center justify-center">
                        <svg id="svg" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex md:hidden" data-aos="fade-down" data-aos-duration="500" data-aos-delay="200">
            <button id="hamburger">
                <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
                <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
            </button>
        </div>
        <div class="toggle justify-end hidden md:flex w-full md:w-auto text-right text-bold font-medium mt-5 md:mt-0 border-t-2 border-black md:border-none" data-aos="fade-down" data-aos-duration="500" data-aos-delay="500">
            <a href="{{ route('landingpage') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-500 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3">Home</a>
            <a href="{{ route('class') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-500 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3">Class</a>

            @guest
                <a href="{{ route('student') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-500 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3"><p>Sign In</p></a>
                <a href="{{ route('reStudent') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-500 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3"><p class="md:border-b-2 border-gray-500 border-0">Sign Up</p></a>
            @else
                <a href="{{ route('subject') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-500 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3">Subject</a>
                <div x-data="{ dropdownOpen: false }" class="relative px-3">
                    <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md focus:outline-none">
                        <img class="rounded-full h-12 w-12" src="{{ asset('image/ui.png') }}" alt="image">
                    </button>

                    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                    <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-28 bg-white rounded-md shadow-xl z-20 text-center">
                        <a href="{{ route('profileStudent') }}" class="{{ (request()->is('MyProfile')) ? 'hidden':'block' }} px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                        My Profile
                        </a>
                        <a href="{{ route('editProfileStudent') }}" class="{{ (request()->is('EditProfileStudent')) ? 'hidden':'block' }} px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                        Settings
                        </a>
                        <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                        Sign Out
                        </a>
                    </div>
                </div>
            @endguest
            {{-- <button class="ml-5" id="dark"><img src="{{ asset('image/moon.svg') }}" alt="dark mode" width="20"></button> --}}
        </div>
    </nav>
