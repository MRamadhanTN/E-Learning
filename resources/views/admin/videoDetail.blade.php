@extends('layouts.dashboard')

@section('Title', 'SmartSchool')

@section('content')
    <div class="main-content flex-1 bg-gray-200 md:pb-5">
        <div class="bg-blue-500 ">
            <div
            class="
              py-2 px-5
              border-blue-900 border-b-4
              shadow-xl
              text-2xl text-white
              flex justify-between items-center
            "
            >
                <h3 class="font-medium pl-2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">Video / Detail</h3>
                <div class="flex z-10" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
                        <a href="{{ route('landingpage') }}" class="block md:inline-block text-white text-xl font-medium transition duration-500 transform hover:-translate-y-0 hover:scale-110 hover:text-yellow-400 px-3 py-2">Home</a>
                        <div x-data="{ dropdownOpen: false }" class="relative px-3" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="800">
                            <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md focus:outline-none">
                                <img class="rounded-full h-12 w-12" src="{{ asset('image/ui.png') }}" alt="image">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                            <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-28 bg-white rounded-md shadow-xl z-20 text-center">
                                <a href="{{ route('Admin') }}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    My Profile
                                </a>
                                <a href="{{ route('AdminEdit') }}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Settings
                                </a>
                                <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Sign Out
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>


        <div class="mt-10 mb-5 flex justify-center items-center" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="700">
            <div class="bg-blue-500 shadow-lg px-12 py-8 rounded-2xl text-white">
                <h1 class="text-4xl font-bold mb-5 text-center">Review Video</h1>
                <form action="#" method="post" class="flex flex-col items-start">
                    <label class="text-lg font-bold">Title</label>
                    <h1 class="mb-5">Intro HTML Intro HTML</h1>

                    <label class="text-lg font-bold">Theory</label>
                    <h4 class="mb-5">Learning Basic Programming</h4>

                    <label class="text-lg font-bold mb-2">Video</label>
                    <iframe width="450" height="315" src="https://www.youtube.com/embed/CSu7M7K18to" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </form>
                <div class="flex justify-end mt-8">
                    <a href="{{ route('videoEdit')}}" class="rounded-full text-lg font-bold px-8 py-1 text-center bg-yellow-500 hover:bg-yellow-400 transition duration-500 transform hover:-translate-y-0 hover:scale-110 tracking-wider shadow-lg">Edit</a>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

