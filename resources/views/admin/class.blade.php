@extends('layouts.dashboard')

@section('Title', 'SmartSchool')

@section('content')
    <div class="main-content flex-1 bg-gray-200 md:pb-5 h-screen">
        <div class="bg-blue-500 ">
            <div class="py-2 px-5 border-blue-900 border-b-4 shadow-xl text-2xl text-white flex justify-between items-center">
                    <h3 class="font-medium pl-2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100"><a href="{{ route('dashboardClass') }}">Class</a></h3>
                    <div class="flex z-10" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="800">
                        <a href="{{ route('home') }}" class="block md:inline-block text-white text-xl font-medium transition duration-500 transform hover:-translate-y-0 hover:scale-110 hover:text-yellow-400 px-3 py-2">Home</a>
                        <div x-data="{ dropdownOpen: false }" class="relative px-3" data-aos="zoom-in" data-aos-delay="300" data-aos-duration="800">
                            <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md focus:outline-none">
                                <img class="rounded-full h-12 w-12" src="{{ asset('image/ui.png') }}" alt="image">
                            </button>

                            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                            <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-28 bg-white rounded-md shadow-xl z-20 text-center font-medium">
                                <a href="{{ route('Admin') }}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    My Profile
                                </a>
                                <a href="{{ route('AdminEdit') }}" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                    Settings
                                </a>
                                <form class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white" action="{{ route('logout') }}" method="post">
                                @csrf
                                @method('POST')
                                    <button class="font-medium" type="submit">
                                        Sign Out
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="flex flex-1 px-7 justify-end mt-7">
            <div class="flex" data-aos="fade-right" data-aos-duration="800" data-aos-delay="800">
                <a href="{{ route('classCreate') }}" class="shadow-lg flex-1 flex items-center justify-center rounded-full px-5 py-2 space-x-2 bg-red-500 hover:bg-red-400 text-white font-semibold transition delay-150 duration-300 transform hover:-translate-y-0 hover:scale-105">
                    <i class="far fa-plus-square"></i>
                    <p>Create</p>
                </a>
            </div>
        </div>


            <div class="px-7 mt-7">
                <table class="table-auto text-left bg-blue-500 rounded-xl w-full display text-blue-900 shadow-xl" id="table_id" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <thead>
                        <tr class="grid grid-cols-11 py-2">
                            <th class="col-span-1 text-center">NO</th>
                            <th class="col-span-3">NAME</th>
                            <th class="col-span-2">SUBJECT</th>
                            <th class="col-span-2 text-center">VIEW</th>
                            <th class="col-span-3 px-20">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="bg-blue-200 ">
                        <tr class="grid grid-cols-11 py-5 font-semibold" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="700">
                            <td class="col-span-1 text-center">1</td>
                            <td class="col-span-3">Learning HTML Basic</td>
                            <td class="col-span-2">HTML</td>
                            <td class="col-span-2 text-center">100</td>
                            <td class="col-span-3 flex items-center font-medium gap-x-3 text-white">
                                <a href="{{ route('classEdit') }}" class="bg-yellow-500 hover:bg-yellow-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Edit</a>
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Delete</a>
                                <a href="{{ route('classDetail') }}" class="bg-blue-500 hover:bg-blue-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Detail</a>
                            </td>
                        </tr>
                        <tr class="grid grid-cols-11 py-5 font-semibold" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="800">
                            <td class="col-span-1 text-center">2</td>
                            <td class="col-span-3">Learning HTML Basic</td>
                            <td class="col-span-2">HTML</td>
                            <td class="col-span-2 text-center">100</td>
                            <td class="col-span-3 flex items-center font-medium gap-x-3 text-white">
                                <a href="{{ route('classEdit') }}" class="bg-yellow-500 hover:bg-yellow-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Edit</a>
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Delete</a>
                                <a href="{{ route('classDetail') }}" class="bg-blue-500 hover:bg-blue-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Detail</a>
                            </td>
                        </tr>
                        <tr class="grid grid-cols-11 py-5 font-semibold" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="900">
                            <td class="col-span-1 text-center">3</td>
                            <td class="col-span-3">Learning HTML Basic</td>
                            <td class="col-span-2">HTML</td>
                            <td class="col-span-2 text-center">100</td>
                            <td class="col-span-3 flex items-center font-medium gap-x-3 text-white">
                                <a href="{{ route('classEdit') }}" class="bg-yellow-500 hover:bg-yellow-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Edit</a>
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Delete</a>
                                <a href="{{ route('classDetail') }}" class="bg-blue-500 hover:bg-blue-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Detail</a>
                            </td>
                        </tr>
                        <tr class="grid grid-cols-11 py-5 font-semibold" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="1000">
                            <td class="col-span-1 text-center">4</td>
                            <td class="col-span-3">Learning HTML Basic</td>
                            <td class="col-span-2">HTML</td>
                            <td class="col-span-2 text-center">100</td>
                            <td class="col-span-3 flex items-center font-medium gap-x-3 text-white">
                                <a href="{{ route('classEdit') }}" class="bg-yellow-500 hover:bg-yellow-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Edit</a>
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Delete</a>
                                <a href="{{ route('classDetail') }}" class="bg-blue-500 hover:bg-blue-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

