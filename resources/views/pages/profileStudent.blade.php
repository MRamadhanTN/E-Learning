@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-28" data-aos="zoom-in" data-aos-duration="800">
        <div class="text-blue-900 justify-center flex flex-col items-center w-auto" data-aos="fade-up" data-aos-duration="500">
            <div class="rounded-2xl shadow-xl bg-yellow-200 flex flex-col py-10 items-center w-96 space-y-7 transition duration-300">
                <div class="text-4xl font-bold text-center">My Profile</div>
                @if ( Auth::user()->image == null )
                    <img class="rounded-full h-36 w-36" src="{{ asset('image/profile.svg') }}" alt="image profile">
                @else
                    <img class="rounded-full h-36 w-36" src="{{ Auth::user()->image }}" alt="image profile">
                @endif
                <div class="gap-y-2">
                    <div class="text-2xl font-medium w-72 text-center">{{ $user->name }}</div>
                    <div class="text-lg text-gray-500 text-center">{{ $user->email }}</div>
                </div>
                <div class="transition delay-150 duration-300 transform hover:-translate-y-1 hover:scale-110 hover:text-blue-500">
                    <a href="{{ route('editProfileStudent', Auth::user()->id) }}" class="rounded-full bg-yellow-300 px-8 py-2 font-medium text-lg" data-aos="zoom-out" data-aos-duration="400">Edit</a>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

