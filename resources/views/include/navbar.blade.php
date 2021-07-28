<nav class="grid grid-cols-3 items-center py-5 px-10 fixed z-10 w-screen transition-all duration-300" id="navbar">
    <a href="{{ route('landingpage') }}">
        <img src="{{ asset('image/logo.png') }}" alt="Logo" width="40" />
    </a>
    <div class="py-1 hidden md:block mx-auto" >
        <div class="bg-white flex items-center rounded-full">
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
    <div class="flex md:hidden">
        <button id="hamburger">
            <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
            <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
    </div>
    <div class="toggle justify-end hidden md:flex w-full md:w-auto text-right text-bold font-medium mt-5 md:mt-0 border-t-2 border-black md:border-none">
        <a href="{{ route('landingpage') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3">Home</a>
        <a href="{{ route('class') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3">Class</a>
        <a href="{{ route('subject') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3">Subject</a>
        <a href="{{ route('student') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3"><p>Sign In</p></a>
        <a href="{{ route('reStudent') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3"><p class="md:border-b-2 border-gray-300 border-0">Sign Up</p></a>
        {{-- <button class="ml-5" id="dark"><img src="{{ asset('image/moon.svg') }}" alt="dark mode" width="20"></button> --}}
    </div>
</nav>
