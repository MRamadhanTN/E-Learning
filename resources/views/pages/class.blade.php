@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-20 right-0" data-aos="fade-up" data-aos-duration="500">
        {{-- All Class --}}
        <div class="text-blue-900 border-b-4 border-gray-400 w-40 pb-4 mt-40" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">All Class</div>
        </div>
        <div class="grid grid-cols-3 text-blue-900 mb-40 mt-12 mx-auto">
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">PHP</div>
                    <div class="text-4xl font-bold my-3">Programming</div>
                    <div class=" text-2xl f ont-medium">Mr. Ramadhan</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>

            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="800">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">HTML</div>
                    <div class="text-4xl font-bold my-3">Programming</div>
                    <div class=" text-2xl font-medium">Mr. Ihsan</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>

            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Premiere Pro</div>
                    <div class="text-4xl font-bold my-3">Video Editing</div>
                    <div class=" text-2xl font-medium">Mr. Fitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        @include('include.footer')

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

