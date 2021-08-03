@extends('layouts.dashboard')

@section('Title', 'SmartSchool')

@section('content')
    <div class="main-content flex-1 bg-gray-200 md-pb-5 h-screen">
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
                <h3 class="font-medium pl-2">Subject</h3>
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

        <div class="flex flex-1 px-7 justify-between mt-7">
            <div>
                <a href="#" class="shadow-lg flex flex-1 items-center justify-center rounded-xl px-3 py-2 space-x-2 bg-red-500 text-white font-semibold hover:text-yellow-200 transition delay-150 duration-500 transform hover:-translate-y-0 hover:scale-105">
                    <i class="far fa-trash-alt"></i>
                    <p>Delete All Selected</p>
                </a>
            </div>
            <div class="flex">
                <a href="{{ route('subjectCreate') }}" class="shadow-lg flex-1 flex items-center justify-center rounded-xl px-3 py-2 space-x-2 bg-red-500 text-white font-semibold hover:text-yellow-200 transition delay-150 duration-500 transform hover:-translate-y-0 hover:scale-105">
                    <i class="far fa-plus-square"></i>
                    <p>Create</p>
                </a>
            </div>
        </div>


            <div class="px-7 mt-7">
                <table class="table-auto text-left bg-blue-500 rounded-xl w-full display text-blue-900 shadow-xl" id="table_id">
                    <thead>
                        <tr class="grid grid-cols-10 py-2">
                            <th class="col-span-1 flex justify-center items-center">
                                <input class="checked:bg-blue-600 checked:border-transparent h-4 w-4" type="checkbox">
                            </th>
                            <th class="col-span-1">NO</th>
                            <th class="col-span-2">NAME</th>
                            <th class="col-span-1">IMAGE</th>
                            <th class="col-span-2 text-center">USE</th>
                            <th class="col-span-3 text-center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="bg-blue-200">
                        <tr class="grid grid-cols-10 py-5 font-semibold items-center">
                            <th class="col-span-1 flex justify-center pt-1">
                                <input class="checked:bg-blue-600 checked:border-transparent h-4 w-4" type="checkbox">
                            </th>
                            <td class="col-span-1">1</td>
                            <td class="col-span-2">HTML</td>
                            <td class="col-span-1">
                                <img class="w-12 h-12 rounded-xl shadow-lg" src="{{ asset('image/ui.png') }}" alt="image">
                            </td>
                            <td class="col-span-2 text-center">100</td>
                            <td class="col-span-3 flex pl-5 justify-center font-medium gap-x-3 text-white">
                                <a href="{{ route('subjectEdit') }}" class="bg-yellow-500 hover:bg-yellow-400 rounded-full px-4 py-1 transition duration-300 shadow-lg">Edit</a>
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg">Delete</a>
                                <a href="{{ route('subjectDetail') }}" class="bg-blue-500 hover:bg-blue-400 rounded-full px-4 py-1 transition duration-300 shadow-lg">Detail</a>
                            </td>
                        </tr>

                        <tr class="grid grid-cols-10 py-5 font-semibold items-center">
                            <th class="col-span-1 flex justify-center pt-1">
                                <input class="checked:bg-blue-600 checked:border-transparent h-4 w-4" type="checkbox">
                            </th>
                            <td class="col-span-1">2</td>
                            <td class="col-span-2">PHP</td>
                            <td class="col-span-1">
                                <img class="w-12 h-12 rounded-xl shadow-lg" src="{{ asset('image/ui.png') }}" alt="image">
                            </td>
                            <td class="col-span-2 text-center">50</td>
                            <td class="col-span-3 flex pl-5 justify-center font-medium gap-x-3 text-white">
                                <a href="{{ route('subjectEdit') }}" class="bg-yellow-500 hover:bg-yellow-400 rounded-full px-4 py-1 transition duration-300 shadow-lg">Edit</a>
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg">Delete</a>
                                <a href="{{ route('subjectDetail') }}" class="bg-blue-500 hover:bg-blue-400 rounded-full px-4 py-1 transition duration-300 shadow-lg">Detail</a>
                            </td>
                        </tr>

                        <tr class="grid grid-cols-10 py-5 font-semibold items-center">
                            <th class="col-span-1 flex justify-center pt-1">
                                <input class="checked:bg-blue-600 checked:border-transparent h-4 w-4" type="checkbox">
                            </th>
                            <td class="col-span-1">3</td>
                            <td class="col-span-2">CSS</td>
                            <td class="col-span-1">
                                <img class="w-12 h-12 rounded-xl shadow-lg" src="{{ asset('image/ui.png') }}" alt="image">
                            </td>
                            <td class="col-span-2 text-center">100</td>
                            <td class="col-span-3 flex pl-5 justify-center items-center font-medium gap-x-3 text-white">
                                <a href="{{ route('subjectEdit') }}" class="bg-yellow-500 hover:bg-yellow-400 rounded-full px-4 py-1 transition duration-300 shadow-lg">Edit</a>
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg">Delete</a>
                                <a href="{{ route('subjectDetail') }}" class="bg-blue-500 hover:bg-blue-400 rounded-full px-4 py-1 transition duration-300 shadow-lg">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

