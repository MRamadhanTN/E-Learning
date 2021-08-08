@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-28" data-aos="zoom-in" data-aos-duration="800">
        <div class="text-blue-900 justify-center flex flex-col items-center w-auto" data-aos="fade-up" data-aos-duration="500">
            <div class="rounded-2xl shadow-xl bg-yellow-200 flex flex-col py-10 items-center px-10 space-y-7 transition duration-300">
                <div class="text-4xl font-bold text-center">Edit Profile</div>
                <form action="{{ route('updateProfileStudent', $user->id) }}" method="post" class="flex flex-col gap-y-2 items-center">
                    @csrf
                    @method('PUT')
                    <label class="text-lg font-medium">Username</label>
                    <input type="text" class="text-center border shadow-md rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3 focus:outline-none" placeholder="enter your username" value="{{ $user->name }}" name="name">

                    <label class="text-lg font-medium">Email</label>
                    <input type="email" class="text-center border shadow-md rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3 focus:outline-none" placeholder="enter your email" value="{{ $user->email }}" name="email">

                    <label class="text-lg font-medium">Password</label>
                    <input type="password" class="border text-center shadow-md rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3 focus:outline-none" placeholder="enter your password" value="********" name="password">

                    <label class="text-lg font-medium">Confirm Password</label>
                    <input type="password" class="border text-center shadow-md rounded-xl w-96 bg-gray-50 px-4 py-2 mb-3 focus:outline-none" placeholder="repeat your password" value="********" name="confirm_password">

                    <label class="text-lg font-medium">Image</label>
                    <input type="text" class="border text-center shadow-md rounded-xl w-96 bg-gray-50 px-4 py-2 mb-5 focus:outline-none" placeholder="enter link in here" value="{{ $user->image }}" name="image">

                    <div class="transition delay-150 duration-300 transform hover:-translate-x-3 hover:-translate-y-1 hover:scale-110 hover:text-blue-500 w-full flex justify-end">
                        <button data-aos="zoom-in" data-aos-duration="400" type="submit" class="rounded-full bg-yellow-300 px-10 py-1 font-medium text-lg">Save</button>
                    </div>
                </form>
            </div>
        </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

