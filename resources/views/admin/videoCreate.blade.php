@extends('layouts.dashboard')

@section('Title', 'SmartSchool')

@section('content')
    <div class="main-content flex-1 bg-gray-200 md:pb-5 h-screen">
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
                <h3 class="font-medium pl-2">Video / Create</h3>
                <div class="flex">
                        <a href="{{ route('landingpage') }}" class="block md:inline-block text-white text-xl font-medium transition duration-500 transform hover:-translate-y-1 hover:scale-105 hover:text-yellow-400 px-3 py-2">Home</a>
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
                    </div>
            </div>
        </div>


        <div class="mt-16 mb-5 flex justify-center items-center">
            <div class="bg-blue-500 px-10 py-6 rounded-2xl text-white text-center">
                <h1 class="text-4xl font-bold mb-3">Create Video</h1>
                <form action="#" method="post" class="flex flex-col items-start">
                    <label class="text-lg font-medium">Title</label>
                    <input type="text" class="shadow-lg text-blue-900 focus:outline-none rounded-xl w-96 bg-gray-100 px-4 py-2 mb-3" placeholder="enter title video">

                    <label class="text-lg font-medium">Image</label>
                    <input type="file" class="shadow-lg text-blue-900 focus:outline-none rounded-xl w-96 bg-gray-100 px-4 py-2 mb-3 font-medium">

                    <label class="text-lg font-medium">Theory</label>
                    <select name="skill" id="skill" class="focus:outline-none shadow-lg rounded-xl w-96 text-blue-900 font-medium bg-gray-100 px-4 py-2 mb-3">
                        <option class="font-medium" value="#">Learning Programming</option>
                        <option class="font-medium" value="#">Learning Design Basic</option>
                    </select>
                </form>
                <div class="flex justify-end mt-5">
                    <button class="rounded-full text-lg font-bold px-4 py-1 text-center bg-yellow-500 hover:bg-yellow-400 transition duration-300 tracking-wider">Create</button>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

