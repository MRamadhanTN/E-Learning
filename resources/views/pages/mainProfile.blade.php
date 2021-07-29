@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-40" data-aos="fade-up" data-aos-duration="500">
        <div class="text-blue-900 pb-4 text-center flex justify-center items-center flex-col mb-12" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">Profile</div>
            <br>
            <img class="rounded-full h-52 w-52" src="{{ asset('image/ui.png') }}" alt="image profile">
            <div class="mt-5 px-6 py-2 flex items-center flex-col rounded-lg bg-yellow-200 hover:bg-yellow-300 transition duration-300">
                <div class="text-2xl font-medium w-auto">Muhamad Ramadhan Tri Nurdias</div>
                <div class="text-sm text-gray-500 w-48">Full-Stack Programming</div>
            </div>
        </div>
        <div class="grid grid-cols-4 text-blue-900 mx-auto gap-y-12 gap-x-12">
            <div class="col-span-4 text-4xl border-b-4 border-gray-400 font-bold w-44 pb-4">List Class</div>
            <div class="col-span-1 border rounded-xl shadow-xl w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class="mb-12 mt-7 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class="mb-12 mt-7 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class="mb-12 mt-7 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class="mb-12 mt-7 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class="mb-12 mt-7 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

