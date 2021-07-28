@extends('layouts.app')

@section('Title', 'SmartSchool')

@section('content')
    {{-- Banner One --}}
    <div class="grid grid-cols-2 pt-40">
        <div class="col-span-1 flex flex-col justify-center mx-auto w-96 text-blue-900" data-aos="fade-right" data-aos-duration="1000">
            <div class="text-4xl font-bold text-blue-900">Want to try being a teacher?</div>
            <div class="text-lg my-10">
                "A true teacher is one who does what he says and teaches his students."
            </div>
            <a href="{{ route('reTeacher') }}" class="transition duration-500 transform hover:-translate-y-1 hover:scale-110 text-2xl text-blue-900 hover:text-blue-500 font-medium rounded-full text-center bg-yellow-300 py-3 w-52">Sign Up Free</a>
        </div>
        <div class="col-span-1" data-aos="fade-left" data-aos-duration="1000">
            <img src="https://buildwithangga.com/themes/front/images/illustration_hero_banner.svg" alt="Banner Image">
        </div>
    </div>

    {{-- Banner Two --}}
    <div class="absolute left-20 right-0" data-aos="fade-up" data-aos-duration="500">
        <div class="splide my-36">
            <div class="splide__track">
                <ul class="splide__list items-center">
                    <li class="splide__slide"><img class="w-full" src="{{ asset('image/a.jpg') }}" alt="image banner"></li>
                    <li class="splide__slide"><img class="w-full" src="{{ asset('image/b.jpg') }}" alt="image banner"></li>
                    <li class="splide__slide"><img class="w-full" src="{{ asset('image/c.jpg') }}" alt="image banner"></li>
                </ul>
            </div>
        </div>

        {{-- New Class --}}
        <div class="text-blue-900 border-b-4 border-gray-400 w-48 pb-4" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">New Class</div>
        </div>
        <div class="grid grid-cols-3 text-blue-900 mb-40 mt-12 mx-auto">
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">PHP</div>
                    <div class="text-4xl font-bold my-3">Programming</div>
                    <div class=" text-2xl font-medium">Mr. Ramadhan</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
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
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
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
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Class Favorite --}}
        <div class="text-blue-900 border-b-4 border-gray-400 w-64 pb-4" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">Class Favorite</div>
        </div>
        <div class="grid grid-cols-3 text-blue-900 mb-40 mt-12 mx-auto">
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Adobe Illustrator</div>
                    <div class="text-4xl font-bold my-3">Design Graphic</div>
                    <div class=" text-2xl font-medium">Mr. Ahmad</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>

            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="800">
                <img class="rounded-t-xl" src="{{ asset('image/c.jpg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">Blender</div>
                    <div class="text-4xl font-bold my-3">Design Graphic</div>
                    <div class=" text-2xl font-medium">Mr. Pitroh</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>

            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 mb-12 mt-10">
                    <div class="text-xl text-gray-400">CSS</div>
                    <div class="text-4xl font-bold my-3">Programming</div>
                    <div class=" text-2xl font-medium">Mr. Hudzaifah</div>
                    <div class="my-14 ml-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="{{ route('mainClass') }}" class="border rounded-full text-xl font-medium px-5 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">Open Class</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Teacher Favorite --}}
        <div class="text-blue-900 border-b-4 border-gray-400 w-72 pb-4" data-aos="fade-up" data-aos-duration="500">
            <div class="text-4xl font-bold">Teacher Populer</div>
        </div>
        <div class="grid grid-cols-3 text-blue-900 mb-40 mt-12 mx-auto">
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="700">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 my-12">
                    <div class="text-4xl font-bold">Mr. Ramadhan</div>
                    <div class=" text-2xl font-medium my-4">Front-End Web Developer</div>
                    <div class="text-lg text-gray-400">Total Class : 1200</div>
                    <div class="my-14 mx-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-10 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">View</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="800">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 my-12">
                    <div class="text-4xl font-bold ">Mr. Hudzaifah</div>
                    <div class=" text-2xl font-medium my-4">Front-End Web Developer</div>
                    <div class="text-lg text-gray-400">Total Class : 1200</div>
                    <div class="my-14 mx-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-10 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">View</a>
                    </div>
                </div>
            </div>
            <div class="col-span-1 border rounded-xl shadow-xl w-96 mx-auto" data-aos="fade-up" data-aos-duration="900">
                <img class="rounded-t-xl" src="{{ asset('image/d.jpeg') }}" alt="image">
                <div class="mx-14 my-12">
                    <div class="text-4xl font-bold ">Mr. Ramadhan</div>
                    <div class=" text-2xl font-medium my-4">Front-End Web Developer</div>
                    <div class="text-lg text-gray-400">Total Class : 1200</div>
                    <div class="my-14 mx-16 transform hover:-translate-y-1 hover:scale-110 transition-all delay-150 duration-300">
                        <a href="" class="border rounded-full text-xl font-medium px-10 text-center bg-yellow-300 py-3 w-52 cursor-pointer hover:text-blue-500 transition duration-300">View</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Method Success --}}
        <div class="flex flex-col flex-grow text-center text-blue-900 space-y-10 mb-40">
            <div class="text-4xl font-bold" data-aos="fade-up" data-aos-duration="500">Successful Method</div>
            <div class="text-xl w-72 mx-auto" data-aos="fade-up" data-aos-duration="600">Lots of Relaxed and Focused Learning Methods are also Fun</div>
            <img src="{{ asset('image/ab.png') }}" alt="image" data-aos="fade-up" data-aos-duration="700">
            <div class="flex justify-around space-x-10" data-aos="fade-up" data-aos-duration="800">
                <div class="text-2xl space-y-3">
                    <div class="text-4xl font-medium">2000</div>
                    <div>Total Subject</div>
                </div>
                <div class="text-2xl space-y-3">
                    <div class="text-4xl font-medium">2000</div>
                    <div>Total Teacher</div>
                </div>
                <div class="text-2xl space-y-3">
                    <div class="text-4xl font-medium">2000</div>
                    <div>Total Class</div>
                </div>
            </div>
        </div>

        {{-- Sign Up in Down --}}
        <div class="flex flex-col flex-grow text-center text-blue-900 space-y-20 mb-40" data-aos="fade-up" data-aos-duration="500">
            <img class="w-52 h-52 mx-auto" src="{{ asset('image/aa.png') }}" alt="image">
            <div class="space-y-5">
                <div class="text-4xl font-bold w-96 mx-auto">Ready to create a beautiful future now?</div>
                <div class="text-2xl max-w-md mx-auto">Learn directly from experienced teachers in his field indefinitely</div>
            </div>
            <a href="{{ route('reStudent') }}" class="transition  mx-auto duration-500 transform hover:-translate-y-1 hover:scale-110 text-2xl text-blue-900 hover:text-blue-500 font-medium rounded-full text-center bg-yellow-300 py-3 w-52" >Sign Up Free</a>
        </div>

        {{-- Footer --}}
        @include('include.footer')

        {{-- Copyright --}}
        @include("include.copyright")
    </div>
@endsection

@section('splide')
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
        new Splide( '.splide', {
            type : 'loop',
            autoplay : true,
            pagination: false,
            arrows: false
        }).mount();
    </script>
@endsection
