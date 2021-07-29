@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    <div class="absolute left-20 right-0 top-40" data-aos="fade-up" data-aos-duration="500">
        {{-- All Theory --}}
        <div class="text-blue-900 pb-4 text-center flex justify-center items-center flex-col" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">Learning Programming</div>
            <br>
            <div class="text-lg text-gray-400">Subject: PHP</div>
            <br>
            <div class="text-xl w-1/2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </div>
        </div>
        <div class="grid grid-cols-3 text-blue-900 mx-auto">
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-4xl font-bold">Mengenal HTML</div>
                    <div class=" text-xl mt-3">Lorem Ipsum is simply dummy text of</div>
                    <div class="my-12 ml-12 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainTheory') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Theory</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-4xl font-bold">Mengenal HTML</div>
                    <div class=" text-xl mt-3">Lorem Ipsum is simply dummy text of</div>
                    <div class="my-12 ml-12 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainTheory') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Theory</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-4xl font-bold">Mengenal HTML</div>
                    <div class=" text-xl mt-3">Lorem Ipsum is simply dummy text of</div>
                    <div class="my-12 ml-12 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainTheory') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Theory</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-4xl font-bold">Mengenal HTML</div>
                    <div class=" text-xl mt-3">Lorem Ipsum is simply dummy text of</div>
                    <div class="my-12 ml-12 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Theory</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-4xl font-bold">Mengenal HTML</div>
                    <div class=" text-xl mt-3">Lorem Ipsum is simply dummy text of</div>
                    <div class="my-12 ml-12 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Theory</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto mt-12" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-4xl font-bold">Mengenal HTML</div>
                    <div class=" text-xl mt-3">Lorem Ipsum is simply dummy text of Ipsum is simply dummy text of Ipsum is simply dummy text of</div>
                    <div class="my-12 ml-12 transform hover:-translate-y-0 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Theory</a>
                    </div>
                </div>
            </div>
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

        {{-- Line --}}
        <div class="border-b-2 mt-24 mb-16 border-gray-300"></div>

        {{-- Comment --}}
        <div class="text-blue-900 mb-14 space-y-10">
            <p class="text-4xl font-medium">Comment</p>

            <div class="space-y-7 overflow-y-scroll overscroll-auto h-80">
                <div>
                    <a href="#" class="flex items-center space-x-5">
                        <img class="rounded-full w-12 h-12" src="{{ asset('image/a.jpg') }}" alt="">
                        <div class="text-xl font-medium">Ramadhan</div>
                    </a>
                    <div class="space-y-3 w-96">
                        <p class="text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p class="text-gray-500 text-sm">12.30 AM</p>
                    </div>
                </div>
                <div>
                    <a href="#" class="flex items-center space-x-5">
                        <img class="rounded-full w-12 h-12" src="{{ asset('image/a.jpg') }}" alt="">
                        <div class="text-xl font-medium">Ramadhan</div>
                    </a>
                    <div class="space-y-3 w-96">
                        <p class="text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p class="text-gray-500 text-sm">12.30 AM</p>
                    </div>
                </div>
                <div>
                    <a href="#" class="flex items-center space-x-5">
                        <img class="rounded-full w-12 h-12" src="{{ asset('image/a.jpg') }}" alt="">
                        <div class="text-xl font-medium">Ramadhan</div>
                    </a>
                    <div class="space-y-3 w-96">
                        <p class="text-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p class="text-gray-500 text-sm">12.30 AM</p>
                    </div>
                </div>

            </div>

            <div>
                <form action="" method="" class="space-x-3">
                    <input class="px-4 py-3 w-1/2 border shadow-sm rounded-full" type="text" placeholder="Comment ...">
                    <button class="px-5 py-3 rounded-full bg-blue-500 text-white font-medium">Send</button>
                </form>
            </div>
        </div>

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

