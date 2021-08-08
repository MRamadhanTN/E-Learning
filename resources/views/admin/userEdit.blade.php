@extends('layouts.dashboard')

@section('Title', 'SmartSchool')

@section('content')
    <div class="main-content flex-1 bg-gray-200 md:pb-5 h-full">
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
                <h3 class="font-medium pl-2" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100"><a href="{{ route('Admin') }}">Profile</a> / <a href="{{ route('AdminEdit') }}">Edit</a></h3>
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


        <div class="mt-10 mb-5 flex justify-center items-center" data-aos="zoom-in" data-aos-duration="500">
            <div class="bg-blue-500 shadow-lg px-10 py-8 rounded-2xl text-white text-center">
                <h1 class="text-4xl font-bold mb-3">Edit Profile</h1>
                <form action="#" method="post" class="flex flex-col items-center">
                    <label class="text-lg font-medium">Username</label>
                    <input type="text" class="text-center shadow-lg text-blue-900 focus:outline-none rounded-xl w-96 bg-gray-100 px-4 py-2 mb-3" value="Muhamad Ramadhan Tri Nurdias" placeholder="enter username">

                    <label class="text-lg font-medium">Email</label>
                    <input type="email" class="text-center shadow-lg text-blue-900 focus:outline-none rounded-xl w-96 bg-gray-100 px-4 py-2 mb-3" value="Nurdias45@gmail.com" placeholder="example@email.com">

                    <label class="text-lg font-medium">Image</label>
                    <input type="text" class="text-center shadow-lg text-blue-900 focus:outline-none rounded-xl w-96 bg-gray-100 px-4 py-2 mb-3" placeholder="link" value="http://127.0.0.1:8000/EditProfileStudent#">

                    <label class="text-lg font-medium">Password</label>
                    <input type="password" class="text-center shadow-lg text-blue-900 focus:outline-none rounded-xl w-96 bg-gray-100 px-4 py-2 mb-3" value="*********" placeholder="enter your password">

                    <label class="text-lg font-medium">Confirm Password</label>
                    <input type="password" class="text-center shadow-lg text-blue-900 focus:outline-none rounded-xl w-96 bg-gray-100 px-4 py-2 mb-3" value="*********" placeholder="repeat your password">

                    <label class="text-lg font-medium">Skill</label>
                    <select name="skill" id="skill" class="font-semibold shadow-lg text-blue-900 focus:outline-none rounded-xl w-96 bg-gray-100 px-4 py-2 mb-3">
                        <option class="font-semibold" value="#">Programming</option>
                        <option class="font-semibold" value="#">Design Grapich</option>
                    </select>
                </form>
                <div class="flex justify-end mt-5">
                    <button type="submit" class="rounded-full text-lg font-bold px-8 py-1 text-center bg-yellow-500 hover:bg-yellow-400 tracking-wider transition duration-300 shadow-lg delay-150 transform hover:-translate-y-0 hover:scale-110">Save</button>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

