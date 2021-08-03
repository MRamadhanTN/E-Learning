<div
    class="
        bg-gradient-to-b
        from-blue-500
        to-blue-800
        border-blue-900 border-r-4
        z-10
        lg:w-64
        md:w-48
    "
    >
    <div
        class="
        lg:w-full
        md:content-start
        "
    >
        <ul
        class="
            flex flex-row
            md:flex-col
            md:py-3
            text-center
            w-auto
        "
        >
        <li class="mx-auto my-5 cursor-pointer">
            <a data-aos="fade up" data-aos-duration="500" data-aos-delay="100" href="{{ route('dashboard') }}">
                <img src="{{ asset('image/logo.png') }}" alt="Logo" width="70" />
            </a>
        </li>
        <li class="flex-1">
            <a
            href="{{ route('dashboard') }}"
            class="
                block
                md:py-3
                align-middle
                text-white
                hover:text-yellow-400
                transition
                duration-150

                {{ Request::url() == url('/dashboard') ? ' bg-blue-800' : '' }}
                "
                >
                <span
                class="
                pb-1
                md:pb-0
                text-xl
                block
                font-bold
                md:inline-block
                transition duration-500 transform hover:-translate-y-0 hover:scale-110
                "
                >Dashboard</span
            >
            </a>
        </li>
        <li class="flex-1">
            <a
            href="{{ route('dashboardClass') }}"
            class="
                block
                md:py-3
                align-middle
                text-white
                hover:text-yellow-400
                transition
                duration-150

                {{ Request::is('Dashboard/Class*') ? ' bg-blue-800' : '' }}
                "
                >
                <span
                class="
                pb-1
                md:pb-0
                text-xl
                transition duration-500 transform hover:-translate-y-0 hover:scale-110
                block
                font-bold
                md:inline-block
                "
                >Class</span
            >
            </a>
        </li>
        <li class="flex-1">
            <a
            href="{{ route('dashboardSubject') }}"
            class="
                block
                md:py-3
                align-middle
                text-white
                hover:text-yellow-400
                transition
                duration-150

                {{ Request::is('Dashboard/Subject*') ? ' bg-blue-800' : '' }}
                "
                >
                <span
                class="
                pb-1
                md:pb-0
                text-xl
                block
                font-bold
                md:inline-block
                transition duration-500 transform hover:-translate-y-0 hover:scale-110
                "
                >Subject</span
            >
            </a>
        </li>
        <li class="flex-1">
            <a
            href="{{ route('dashboardTheory') }}"
            class="
                block
                md:py-3
                align-middle
                text-white
                hover:text-yellow-400
                transition
                duration-150

                {{ Request::is('Dashboard/Theory*') ? ' bg-blue-800' : '' }}
                "
                >
                <span
                class="
                pb-1
                md:pb-0
                text-xl
                transition duration-500 transform hover:-translate-y-0 hover:scale-110
                block
                font-bold
                md:inline-block
                "
                >Theory</span
            >
            </a>
        </li>
        <li class="flex-1">
            <a
            href="{{ route('dashboardVideo') }}"
            class="
                block
                md:py-3
                align-middle
                text-white
                hover:text-yellow-400
                transition
                duration-150

                {{ Request::is('Dashboard/Video*') ? ' bg-blue-800' : '' }}
                "
                >
                <span
                class="
                pb-1
                md:pb-0
                text-xl
                transition duration-500 transform hover:-translate-y-0 hover:scale-110
                block
                font-bold
                md:inline-block
                "
                >Video</span
            >
            </a>
        </li>
        <li class="flex-1">
            <a
            href="{{ route('dashboardComment') }}"
            class="
                block
                md:py-3
                align-middle
                text-white
                hover:text-yellow-400
                transition
                duration-150

                {{ Request::is('Dashboard/Comment*') ? ' bg-blue-800' : '' }}
                "
                >
                <span
                class="
                pb-1
                md:pb-0
                text-xl
                transition duration-500 transform hover:-translate-y-0 hover:scale-110
                block
                font-bold
                md:inline-block
                "
                >Comment</span
            >
            </a>
        </li>
        <li class="flex-1">
            <a
            href="#"
            class="
                block
                md:py-3
                align-middle
                text-white
                hover:text-yellow-400
                transition
                duration-150
                "
                >
                <span
                class="
                pb-1
                md:pb-0
                text-xl
                transition duration-500 transform hover:-translate-y-0 hover:scale-110
                block
                font-bold
                md:inline-block
                "
                >Logout</span
            >
            </a>
        </li>
        </ul>
    </div>
    </div>
