@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-20 right-0 top-40 space-y-10" data-aos="fade-up" data-aos-duration="500">
        <div class="text-blue-900 pb-4 " data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">Basic PHP</div>
            <div class="text-lg text-gray-400">By: Ramadhan Nurdias</div>
            <br>
            <div class="text-xl w-9/12" style="">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
        </div>

        <div class="w-full">
            <iframe width="1200" height="1000" src="https://www.youtube.com/embed/3ZTDGzf81-0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        {{-- Line --}}
        <div class="border-b-2 mt-24 mb-20 border-gray-300"></div>

        {{-- Profile Card --}}
        <div class="grid grid-cols-3 text-blue-900 mx-auto gap-x-10 gap-y-10">
            <div class="col-span-1 border shadow-xl rounded-xl" data-aos="fade-up" data-aos-duration="700">
                <div>
                    <img class="rounded-full h-32 w-32 mx-auto my-12" src="{{ asset('image/d.jpeg') }}" alt="image">
                    <div class="mx-14 mb-12 mt-10 flex flex-col justify-center items-center">
                        <div class="text-2xl font-bold text-center">Muhammad Ramadhan Tri Nurdias</div>
                        <div class=" text-md mt-5">Lorem Ipsum is simply dummy text of</div>
                        <div class="mt-12 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                            <a href="{{ route('profile') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 {{ route('profile') }} hover:text-blue-500 transition duration-300">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border shadow-xl rounded-xl" data-aos="fade-up" data-aos-duration="700">
                <div>
                    <img class="rounded-full h-32 w-32 mx-auto my-12" src="{{ asset('image/d.jpeg') }}" alt="image">
                    <div class="mx-14 mb-12 mt-10 flex flex-col justify-center items-center">
                        <div class="text-2xl font-bold text-center">Hudzaifah</div>
                        <div class=" text-md mt-5">Lorem Ipsum is simply dummy text of</div>
                        <div class="mt-12 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                            <a href="{{ route('profile') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 hover:text-blue-500 transition duration-300">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

