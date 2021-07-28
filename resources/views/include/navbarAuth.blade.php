<nav class="grid grid-cols-2 items-center py-5 px-10 fixed z-10 w-screen transition-all duration-300" id="navbar">
    <a href="{{ url('/') }}">
        <img src="{{ asset('image/logo.png') }}" alt="Logo" width="40" />
    </a>

    <div class="flex md:hidden">
        <button id="hamburger">
            <img class="toggle block" src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png" width="40" height="40" />
            <img class="toggle hidden" src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png" width="40" height="40" />
        </button>
    </div>
    <div class="toggle justify-end hidden md:flex w-full md:w-auto text-right text-bold font-medium mt-5 md:mt-0 border-t-2 border-black md:border-none">
        <a href="{{ url('/') }}" class="block md:inline-block text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3">Home</a>
        <a href="{{ route('student') }}" class="{{ (request()->is('loginStudent')) ? 'hidden':'' }} text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3"><p>Sign In</p></a>
        <a href="{{ route('reStudent') }}" class="{{ (request()->is('registerStudent')) ? 'hidden':'' }} text-blue-900 text-lg transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 px-3 py-3"><p class="md:border-b-2 border-gray-300 border-0">Sign Up</p></a>
        {{-- <button class="ml-5" id="dark"><img src="{{ asset('image/moon.svg') }}" alt="dark mode" width="20"></button> --}}
    </div>
</nav>
