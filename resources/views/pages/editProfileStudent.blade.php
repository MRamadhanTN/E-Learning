@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-32" data-aos="fade-up" data-aos-duration="500">
        <div class="text-blue-900 justify-center flex flex-col items-center w-auto" data-aos="fade-up" data-aos-duration="500">
            <div class="rounded-lg bg-yellow-200 flex flex-col py-10 items-center px-10 space-y-7 transition duration-300">
                <div class="text-4xl font-bold text-center">Edit Profile</div>
                <form action="#" method="post" class="flex flex-col gap-y-2 items-center">
                    <label class="text-lg font-medium">Username</label>
                    <input type="text" class="text-center border shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-5" placeholder="Ramadhan">

                    <label class="text-lg font-medium">Email</label>
                    <input type="email" class="text-center border shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-5" placeholder="Nurdias@gmail.com">

                    <label class="text-lg font-medium">Password</label>
                    <input type="password" class="border text-center shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2 mb-5" placeholder="******">

                    <label class="text-lg font-medium">Image</label>
                    <input type="text" class="border text-center shadow-sm rounded-xl w-96 bg-gray-50 px-4 py-2" placeholder="http://127.0.0.1:8000/EditProfileStudent#">
                </form>
                <div class="transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500 ml-60">
                    <button type="submit" class="rounded-3xl bg-yellow-300 px-10 py-2 font-medium text-xl">Save</button>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

