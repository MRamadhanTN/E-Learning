@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-20 right-0 top-40" data-aos="fade-up" data-aos-duration="500">

        {{-- All Class --}}
        <div class="text-blue-900 border-b-4 border-gray-400 w-48 pb-4 flex" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">All Subject</div>
        </div>
        <div class="grid grid-cols-4 text-blue-900 mb-40 gap-x-20 gap-y-10" data-aos="fade-up" data-aos-duration="500">

            <a href="{{ route('MainSubject') }}" class="flex justify-center items-center" data-aos="fade-up" data-aos-duration="600">
                <div class="col-span-1 p-5 w-full rounded-2xl shadow-xl bg-yellow-300 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300 mt-12 text-2xl font-semibold hover:text-blue-500 text-center">HTML</div>
            </a>
            <a href="{{ route('MainSubject') }}" class="flex justify-center items-center" data-aos="fade-up" data-aos-duration="600">
                <div class="col-span-1 p-5 w-full rounded-2xl shadow-xl bg-yellow-300 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300 mt-12 text-2xl font-semibold hover:text-blue-500 text-center">HTML</div>
            </a>
            <a href="{{ route('MainSubject') }}" class="flex justify-center items-center" data-aos="fade-up" data-aos-duration="600">
                <div class="col-span-1 p-5 w-full rounded-2xl shadow-xl bg-yellow-300 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300 mt-12 text-2xl font-semibold hover:text-blue-500 text-center">HTML</div>
            </a>
            <a href="{{ route('MainSubject') }}" class="flex justify-center items-center" data-aos="fade-up" data-aos-duration="600">
                <div class="col-span-1 p-5 w-full rounded-2xl shadow-xl bg-yellow-300 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300 mt-12 text-2xl font-semibold hover:text-blue-500 text-center">HTML</div>
            </a>
            <a href="{{ route('MainSubject') }}" class="flex justify-center items-center" data-aos="fade-up" data-aos-duration="600">
                <div class="col-span-1 p-5 w-full rounded-2xl shadow-xl bg-yellow-300 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300 mt-12 text-2xl font-semibold hover:text-blue-500 text-center">HTML</div>
            </a>
            <a href="{{ route('MainSubject') }}" class="flex justify-center items-center" data-aos="fade-up" data-aos-duration="600">
                <div class="col-span-1 p-5 w-full rounded-2xl shadow-xl bg-yellow-300 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300 mt-12 text-2xl font-semibold hover:text-blue-500 text-center">HTML</div>
            </a>
            <a href="{{ route('MainSubject') }}" class="flex justify-center items-center" data-aos="fade-up" data-aos-duration="600">
                <div class="col-span-1 p-5 w-full rounded-2xl shadow-xl bg-yellow-300 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300 mt-12 text-2xl font-semibold hover:text-blue-500 text-center">HTML</div>
            </a>
            <a href="{{ route('MainSubject') }}" class="flex justify-center items-center" data-aos="fade-up" data-aos-duration="600">
                <div class="col-span-1 p-5 w-full rounded-2xl shadow-xl bg-yellow-300 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300 mt-12 text-2xl font-semibold hover:text-blue-500 text-center">HTML</div>
            </a>

        </div>

        {{-- Footer --}}
        @include('include.footer')

        {{-- Copyright --}}
        @include("include.copyright")
    </div>

@endsection

