@extends('layouts.dashboard')

@section('Title', 'SmartSchool')

@section('content')
    <div class="main-content flex-1 bg-gray-200 md:pb-5">
        <div class="bg-blue-500 ">
          <div
            class="
              py-2 px-5
              text-2xl text-white
              border-blue-900 border-b-4
              flex justify-between items-center
            "
            >
                <h3 class="font-medium pl-2">Dashboard</h3>
                <div class="flex">
                    <a href="{{ route('landingpage') }}" class="block md:inline-block text-white text-xl font-medium transition delay-150 duration-500 transform hover:-translate-y-1 hover:scale-110 hover:text-yellow-400 px-3 py-2">Home</a>
                    <div x-data="{ dropdownOpen: false }" class="relative px-3">
                        <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md focus:outline-none">
                            <img class="rounded-full h-12 w-12" src="{{ asset('image/ui.png') }}" alt="image">
                        </button>

                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

                        <div x-show="dropdownOpen" class="absolute right-0 mt-2 w-28 bg-white rounded-md shadow-xl z-20 text-center">
                            <a href="{{ route('profileStudent') }}" class="{{ (request()->is('MyProfile')) ? 'hidden':'block' }} px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                My Profile
                            </a>
                            <a href="{{ route('editProfileStudent') }}" class="{{ (request()->is('EditProfileStudent')) ? 'hidden':'block' }} px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                Settings
                            </a>
                            <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                                Sign Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-initial flex flex-wrap justify-around mt-5">
          <a href="{{ route('dashboardClass') }}" class="md:w-1/2 xl:w-60 w-full p-6">
            <!--Metric Card-->
            <div
              class="
                bg-gradient-to-b
                from-pink-200
                to-pink-100
                border-b-4 border-pink-500
                rounded-full
                shadow-xl
                p-2
              "
            >
              <div class="flex flex-row items-center">
                <div class="flex-1 text-right md:text-center">
                  <h5 class="font-bold uppercase text-gray-600">Total Class</h5>
                  <h3 class="font-bold text-2xl">
                    249
                  </h3>
                </div>
              </div>
            </div>
            <!--/Metric Card-->
          </a>
          <a href="{{ route('dashboardSubject') }}" class="md:w-1/2 xl:w-60 w-full p-6">
            <!--Metric Card-->
            <div
              class="
                bg-gradient-to-b
                from-yellow-200
                to-yellow-100
                border-b-4 border-yellow-600
                rounded-full
                shadow-xl
                p-2
              "
            >
              <div class="flex flex-row items-center">
                <div class="flex-1 text-right md:text-center">
                  <h5 class="font-bold uppercase text-gray-600">Total Subject</h5>
                  <h3 class="font-bold text-2xl">
                    2
                  </h3>
                </div>
              </div>
            </div>
            <!--/Metric Card-->
          </a>
          <a href="{{ route('dashboardTheory') }}" class="md:w-1/2 xl:w-60 w-full p-6">
            <!--Metric Card-->
            <div
              class="
                bg-gradient-to-b
                from-blue-200
                to-blue-100
                border-b-4 border-blue-500
                rounded-full
                shadow-xl
                p-2
              "
            >
              <div class="flex flex-row items-center">
                <div class="flex-1 text-right md:text-center">
                  <h5 class="font-bold uppercase text-gray-600">
                    Total Theory
                  </h5>
                  <h3 class="font-bold text-2xl">152</h3>
                </div>
              </div>
            </div>
            <!--/Metric Card-->
          </a>
          <a href="{{ route('dashboardVideo') }}" class="md:w-1/2 xl:w-60 w-full p-6">
            <!--Metric Card-->
            <div
              class="
                bg-gradient-to-b
                from-green-200
                to-green-100
                border-b-4 border-green-600
                rounded-full
                shadow-xl
                p-2
              "
            >
              <div class="flex flex-row items-center">
                <div class="flex-1 text-right md:text-center">
                  <h5 class="font-bold uppercase text-gray-600">Total Video</h5>
                  <h3 class="font-bold text-2xl">100</h3>
                </div>
              </div>
            </div>
            <!--/Metric Card-->
          </a>
        </div>

        <div class="flex flex-row flex-wrap flex-grow">

          <div class="w-8/12 py-6 pl-10 pr-4">
            <!--Graph Card-->
            <div class="bg-white border-transparent h-full rounded-lg shadow-xl">
              <div
                class="
                  bg-gradient-to-b
                  from-gray-300
                  to-gray-100
                  uppercase
                  text-gray-800
                  border-b-2 border-gray-300
                  rounded-tl-lg rounded-tr-lg
                  p-2
                "
              >
                <h5 class="font-bold uppercase text-center text-3xl text-blue-900">Subject Favorite</h5>
              </div>
              <div class="p-5">
                <canvas
                  id="chartjs-1"
                  class="chartjs"
                  width="undefined"
                  height="300"
                ></canvas>
                <script>
                  new Chart(document.getElementById("chartjs-1"), {
                    type: "bar",
                    data: {
                      labels: [
                        "HTML",
                        "CSS",
                        "PHP",
                        "FIGMA",
                        "C++",
                        "JS",
                        "AI",
                      ],
                      datasets: [
                        {
                          label: "Likes",
                          data: [50, 59, 80, 81, 56, 55, 40],
                          fill: true,
                          backgroundColor: [
                            "rgba(255, 99, 132, 0.2)",
                            "rgba(255, 159, 64, 0.2)",
                            "rgba(255, 205, 86, 0.2)",
                            "rgba(75, 192, 192, 0.2)",
                            "rgba(54, 162, 235, 0.2)",
                            "rgba(153, 102, 255, 0.2)",
                            "rgba(201, 203, 207, 0.2)",
                          ],
                          borderColor: [
                            "rgb(255, 99, 132)",
                            "rgb(255, 159, 64)",
                            "rgb(255, 205, 86)",
                            "rgb(75, 192, 192)",
                            "rgb(54, 162, 235)",
                            "rgb(153, 102, 255)",
                            "rgb(201, 203, 207)",
                          ],
                          borderWidth: 2,
                        },
                      ],
                    },
                    options: {
                      scales: {
                        yAxes: [
                          {
                            ticks: {
                              beginAtZero: true,
                            },
                          },
                        ],
                      },
                    },
                  });
                </script>
              </div>
            </div>
            <!--/Graph Card-->
          </div>

          <div class="w-full md:w-1/2 xl:w-1/3 p-6">
            <!--Table Card-->
            <div class="bg-white border-transparent rounded-lg shadow-xl">
              <div
                class="
                  bg-gradient-to-b
                  from-gray-300
                  to-gray-100
                  uppercase
                  text-gray-800
                  border-b-2 border-gray-300
                  rounded-tl-lg rounded-tr-lg
                  p-2
                "
              >
                <h5 class="font-bold uppercase text-blue-900 text-center">Recently Upload Class</h5>
              </div>
              <div class="px-5 py-3">
                <table class="w-full">
                  <thead class="text-left text-lg text-blue-900">
                    <tr>
                      <th>Class</th>
                      <th>Date</th>
                    </tr>
                  </thead>

                  <tbody>
                    <tr class="text-blue-900">
                      <td>Learning Design</td>
                      <td class="text-gray-400 text-xs">11 Jan / 20.00 PM</td>
                    </tr>
                    <tr class="text-blue-900">
                      <td>Learn Programming</td>
                      <td class="text-gray-400 text-xs">11 Jan / 20.00 PM</td>
                    </tr>
                    <tr class="text-blue-900">
                      <td>How to Learn CSS</td>
                      <td class="text-gray-400 text-xs">11 Jan / 20.00 PM</td>
                    </tr>
                  </tbody>
                </table>

                <p class="py-2 text-blue-400"><a href="{{ route('dashboardClass') }}">See More -></a></p>
              </div>
            </div>
            <!--/table Card-->
            <div class="w-full pt-6">
              <!--Table Card-->
              <div class="bg-white border-transparent rounded-lg shadow-xl">
                <div
                  class="
                    bg-gradient-to-b
                    from-gray-300
                    to-gray-100
                    uppercase
                    text-gray-800
                    border-b-2 border-gray-300
                    rounded-tl-lg rounded-tr-lg
                    p-2
                  "
                >
                  <h5 class="font-bold uppercase text-blue-900 text-center">latest join My Class</h5>
                </div>
                <div class="px-5 py-3">
                  <table class="w-full">
                    <thead class="text-left text-lg text-blue-900">
                      <tr>
                        <th>Name</th>
                        <th>Date</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td class="text-blue-900">Ramadhan</td>
                        <td class="text-gray-400 text-xs">11 Jan / 20.00 PM</td>
                      </tr>

                      <tr>
                        <td class="text-blue-900">Ramadhan</td>
                        <td class="text-gray-400 text-xs">11 Jan / 20.00 PM</td>
                      </tr>

                      <tr>
                        <td class="text-blue-900">Ramadhan</td>
                        <td class="text-gray-400 text-xs">11 Jan / 20.00 PM</td>
                      </tr>
                    </tbody>
                  </table>

                <p class="py-2 text-blue-400"><a href="#">See More -></a></p>

                </div>
              </div>
              <!--/table Card-->
          </div>

          <div class="w-full pt-6">
              <!--Table Card-->
              <div class="bg-white border-transparent rounded-lg shadow-xl">
                <div
                  class="
                    bg-gradient-to-b
                    from-gray-300
                    to-gray-100
                    uppercase
                    text-gray-800
                    border-b-2 border-gray-300
                    rounded-tl-lg rounded-tr-lg
                    p-2
                  "
                >
                  <h5 class="font-bold uppercase text-blue-900 text-center">New Comments</h5>
                </div>
                <div class="px-5 py-3">
                  <table class="w-full">
                    <thead class="text-left text-lg text-blue-900">
                      <tr>
                        <th>Name</th>
                      </tr>
                    </thead>

                    <tbody>
                      <tr>
                        <td class="text-blue-900">
                            </div class="flex-initial">
                                <div class="">Keren mas videonya ;)</div>
                                <div class="text-gray-400 text-xs">20.00 PM</div>
                            <div>
                        </td>
                        <td class="text-gray-400 text-xs"></td>
                      </tr>

                       <tr>
                        <td class="text-blue-900">
                            </div class="flex-initial">
                                <div class="">hahaha Rambox" (tukang bully)</div>
                                <div class="text-gray-400 text-xs">20.00 PM</div>
                            <div>
                        </td>
                        <td class="text-gray-400 text-xs"></td>
                      </tr>

                       <tr>
                        <td class="text-blue-900">
                            </div class="flex-initial">
                                <div class="">Woy jangan bully dialah kacian</div>
                                <div class="text-gray-400 text-xs">20.00 PM</div>
                            <div>
                        </td>
                        <td class="text-gray-400 text-xs"></td>
                      </tr>

                    </tbody>
                  </table>

                <p class="py-2 text-blue-400"><a href="{{ route('dashboardComment') }}">See More -></a></p>

                </div>
              </div>
              <!--/table Card-->
          </div>
        </div>

        </div>
      </div>
@endsection

