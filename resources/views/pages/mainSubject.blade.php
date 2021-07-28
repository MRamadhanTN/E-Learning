@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-16 right-0 top-40" data-aos="fade-up" data-aos-duration="500">
        {{-- All Theory --}}
        <div class="text-blue-900 pb-4 text-center flex justify-center items-center flex-col mb-12" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">PHP</div>
            <br>
            <div class="text-xl w-1/2">
                PHP is a recursive acronym for "PHP: Hypertext Preprocessor", which is a programming language that is widely used to handle the creation and development of a website and can be used in conjunction with HTML.
            </div>
        </div>
        <div class="grid grid-cols-4 text-blue-900 mx-auto mb-40 gap-y-12 gap-x-12">
            <div class="col-span-1 border rounded-xl shadow-xl mx-auto w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class=" text-xl my-5 w-60">M. Ramadhan Tri Nurdias</div>
                    <div class="mb-12 mt-4 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl mx-auto w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class=" text-xl my-5 w-60">M. Ramadhan Tri Nurdias</div>
                    <div class="mb-12 mt-4 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl mx-auto w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class=" text-xl my-5 w-60">M. Ramadhan Tri Nurdias</div>
                    <div class="mb-12 mt-4 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl mx-auto w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class=" text-xl my-5 w-60">M. Ramadhan Tri Nurdias</div>
                    <div class="mb-12 mt-4 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl mx-auto w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class=" text-xl my-5 w-60">M. Ramadhan Tri Nurdias</div>
                    <div class="mb-12 mt-4 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl mx-auto w-72" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class=" flex justify-center items-center flex-col text-center">
                    <div class="text-2xl font-bold w-80 text-center mt-8">Learning Basic Programming</div>
                    <div class=" text-xl my-5 w-60">M. Ramadhan Tri Nurdias</div>
                    <div class="mb-12 mt-4 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

