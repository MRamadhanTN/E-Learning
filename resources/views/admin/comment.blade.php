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
                <h3 class="font-medium pl-2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">Comment</h3>
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
            <div class="px-7 mt-10">
                <table class="table-auto text-left bg-blue-500 rounded-xl w-full display text-blue-900 shadow-xl" id="table_id" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="100">
                    <thead>
                        <tr class="grid grid-cols-12 py-2">
                            <th class="col-span-1 text-center">NO</th>
                            <th class="col-span-4">COMMENT</th>
                            <th class="col-span-2">CLASS</th>
                            <th class="col-span-2">USER</th>
                            <th class="col-span-1 text-center">DATE</th>
                            <th class="col-span-2 text-center">ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="bg-blue-200">
                        <tr class="grid grid-cols-12 py-5 font-semibold items-start" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="700">
                            <td class="col-span-1 text-center">1</td>
                            <td class="col-span-4 overflow-y-auto overflow-x-hidden h-14 pr-5 example">
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                            </td>
                            <td class="col-span-2">Learning PHP</td>
                            <td class="col-span-2">Budiman</td>
                            <td class="col-span-1 text-center">
                                <p>03/08/2021</p>
                                <p class="text-sm">20.00 AM</p>
                            </td>
                            <td class="col-span-2 flex justify-center font-medium text-white">
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Delete</a>
                            </td>
                        </tr>
                        <tr class="grid grid-cols-12 py-5 font-semibold items-start" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="700">
                            <td class="col-span-1 text-center">2</td>
                            <td class="col-span-4 overflow-y-auto overflow-x-hidden h-14 pr-5 example">
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                            </td>
                            <td class="col-span-2">Learning PHP</td>
                            <td class="col-span-2">Budiman</td>
                            <td class="col-span-1 text-center">
                                <p>03/08/2021</p>
                                <p class="text-sm">20.00 AM</p>
                            </td>
                            <td class="col-span-2 flex justify-center font-medium text-white">
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Delete</a>
                            </td>
                        </tr>
                        <tr class="grid grid-cols-12 py-5 font-semibold items-start" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="700">
                            <td class="col-span-1 text-center">3</td>
                            <td class="col-span-4 overflow-y-auto overflow-x-hidden h-14 pr-5 example">
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                            </td>
                            <td class="col-span-2">Learning PHP</td>
                            <td class="col-span-2">Budiman</td>
                            <td class="col-span-1 text-center">
                                <p>03/08/2021</p>
                                <p class="text-sm">20.00 AM</p>
                            </td>
                            <td class="col-span-2 flex justify-center font-medium text-white">
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Delete</a>
                            </td>
                        </tr>
                        <tr class="grid grid-cols-12 py-5 font-semibold items-start" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="700">
                            <td class="col-span-1 text-center">4</td>
                            <td class="col-span-4 overflow-y-auto overflow-x-hidden h-14 pr-5 example">
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                                 Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy Lorem
                            </td>
                            <td class="col-span-2">Learning PHP</td>
                            <td class="col-span-2">Budiman</td>
                            <td class="col-span-1 text-center">
                                <p>03/08/2021</p>
                                <p class="text-sm">20.00 AM</p>
                            </td>
                            <td class="col-span-2 flex justify-center font-medium text-white">
                                <a href="#" class="bg-red-500 hover:bg-red-400 rounded-full px-4 py-1 transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

