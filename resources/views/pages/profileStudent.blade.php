@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-32" data-aos="fade-up" data-aos-duration="500">
        <div class="text-blue-900 justify-center flex flex-col items-center w-auto" data-aos="fade-up" data-aos-duration="500">
            <div class="rounded-lg bg-yellow-200 flex flex-col py-10 items-center w-96 space-y-7 transition duration-300">
                <div class="text-4xl font-bold text-center">My Profile</div>
                <img class="rounded-full h-36 w-36" src="{{ asset('image/boboi.jpg') }}" alt="image profile">
                <div class="gap-y-2">
                    <div class="text-2xl font-medium w-72 text-center">Muhamad Ramadhan T.N</div>
                    <div class="text-lg text-gray-500 text-center">Nurdias45@gmail.com</div>
                </div>
                <div class="transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500">
                    <a href="{{ route('editProfileStudent') }}" class="rounded-3xl bg-yellow-300 px-5 py-2 font-medium text-xl">Edit</a>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

