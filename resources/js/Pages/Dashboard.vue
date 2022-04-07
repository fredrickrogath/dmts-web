<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Jetstream/Welcome.vue';
</script>

<template>
    <AppLayout title="Dashboard">
        <!-- <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template> -->

        <div class="py-2">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- <Welcome /> -->


                        
                        <section class="relative py-16 bg-blueGray-50">
<div class="w-full mb-12 px-4">
  <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded 
  bg-gray-600 text-white">
    <div class="rounded-t mb-0 px-4 py-3 border-0">
      <div class="flex flex-wrap items-center">
        <div class="relative w-full px-4 max-w-full flex-grow flex-1 ">
          <h3 class="font-semibold text-lg text-white">Card Tables</h3>
        </div>
      </div>
    </div>
    <div class="block w-full overflow-x-auto ">
      <table class="items-center w-full bg-transparent border-collapse">
        <thead>
          <tr>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Project</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Budget</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Status</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Users</th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700">Completion </th>
            <th class="px-6 align-middle border border-solid py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left bg-pink-800 text-pink-300 border-pink-700"></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <img src="https://demos.creative-tim.com/notus-js/assets/img/bootstrap.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
              <span class="ml-3 font-bold text-white"> Argon Design System </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">$2,500 USD</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle text-orange-500 mr-2"></i>pending</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-4-470x470.png" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"><div class="flex items-center">
                <span class="mr-2">60%</span>
                <div class="relative w-full">
                  <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                    <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                  </div>
                </div>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
              </div>
            </td>
          </tr>

          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <img src="https://demos.creative-tim.com/notus-js/assets/img/angular.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
              <span class="ml-3 font-bold text-white">Angular Now UI Kit PRO </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">$1,800 USD</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle text-emerald-500 mr-2"></i>completed</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-4-470x470.png" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex items-center">
                <span class="mr-2">100%</span>
                <div class="relative w-full">
                  <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-500">
                    <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                  </div>
                </div>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
              </div>
            </td>
          </tr>

          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <img src="https://demos.creative-tim.com/notus-js/assets/img/sketch.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
              <span class="ml-3 font-bold text-white">Black Dashboard Sketch
              </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">$3,150 USD</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle text-orange-500 mr-2"></i>delayed</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-4-470x470.png" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex items-center">
                <span class="mr-2">73%</span>
                <div class="relative w-full">
                  <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                    <div style="width: 73%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                  </div>
                </div>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
              </div>
            </td>
          </tr>

          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <img src="https://demos.creative-tim.com/notus-js/assets/img/react.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
              <span class="ml-3 font-bold text-white">React Material Dashboard
              </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">$4,400 USD</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle text-teal-500 mr-2"></i>on schedule</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-4-470x470.png" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex items-center">
                <span class="mr-2">90%</span>
                <div class="relative w-full">
                  <div class="overflow-hidden h-2 text-xs flex rounded bg-teal-200">
                    <div style="width: 90%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-teal-500"></div>
                  </div>
                </div>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
              </div>
            </td>
          </tr>

          <tr>
            <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left flex items-center">
              <img src="https://demos.creative-tim.com/notus-js/assets/img/vue.jpg" class="h-12 w-12 bg-white rounded-full border" alt="...">
              <span class="ml-3 font-bold text-white">Vue Material Dashboard
              </span></th>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">$2,200USD</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <i class="fas fa-circle text-emerald-500 mr-2"></i>completed</td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-1-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-3-800x800.jpg" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
                <img src="https://demos.creative-tim.com/notus-js/assets/img/team-4-470x470.png" alt="..." class="w-10 h-10 rounded-full border-2 border-blueGray-50 shadow -ml-4">
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
              <div class="flex items-center">
                <span class="mr-2">100%</span>
                <div class="relative w-full">
                  <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                    <div style="width: 100%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"></div>
                  </div>
                </div>
              </div>
            </td>
            <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-right">
              <a href="#pablo" class="text-blueGray-500 block py-1 px-3" onclick="openDropdown(event,'table-dark-1-dropdown')">
                <i class="fas fa-ellipsis-v"></i></a>
              <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="table-dark-1-dropdown">
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Another action</a><a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Something else here</a>
                <div class="h-0 my-2 border border-solid border-blueGray-100"></div>
                <a href="#pablo" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">Seprated link</a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
    <footer class="relative pt-8 pb-6 mt-8">
      <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center md:justify-between justify-center">
          <div class="w-full md:w-6/12 px-4 mx-auto text-center">
            <div class="text-sm text-blueGray-500 font-semibold py-1">
             dmts
            </div>
          </div>
        </div>
      </div>
    </footer>
</section>











<!-- Code block starts -->
       
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
            <!-- <div class="py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0" id="modal">
                <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                    <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                        <div class="w-full flex justify-start text-gray-600 mb-3">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="52" height="52" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                            </svg>
                        </div>
                        <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Enter Billing Details</h1>
                        <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Owner Name</label>
                        <input id="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="James" />
                        <label for="email2" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Card Number</label>
                        <div class="relative mb-5 mt-2">
                            <div class="absolute text-gray-600 flex items-center px-4 border-r h-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-credit-card" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <rect x="3" y="5" width="18" height="14" rx="3" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                    <line x1="7" y1="15" x2="7.01" y2="15" />
                                    <line x1="11" y1="15" x2="13" y2="15" />
                                </svg>
                            </div>
                            <input id="email2" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-16 text-sm border-gray-300 rounded border" placeholder="XXXX - XXXX - XXXX - XXXX" />
                        </div>
                        <label for="expiry" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Expiry Date</label>
                        <div class="relative mb-5 mt-2">
                            <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" />
                                    <rect x="4" y="5" width="16" height="16" rx="2" />
                                    <line x1="16" y1="3" x2="16" y2="7" />
                                    <line x1="8" y1="3" x2="8" y2="7" />
                                    <line x1="4" y1="11" x2="20" y2="11" />
                                    <rect x="8" y="15" width="2" height="2" />
                                </svg>
                            </div>
                            <input id="expiry" class="text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="MM/YY" />
                        </div>
                        <label for="cvc" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">CVC</label>
                        <div class="relative mb-5 mt-2">
                            <div class="absolute right-0 text-gray-600 flex items-center pr-3 h-full cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-circle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z"></path>
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                    <polyline points="11 12 12 12 12 16 13 16"></polyline>
                                </svg>
                            </div>
                            <input id="cvc" class="mb-8 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="MM/YY" />
                        </div>
                        <div class="flex items-center justify-start w-full">
                            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">Submit</button>
                            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" onclick="modalHandler()">Cancel</button>
                        </div>
                        <button class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600" onclick="modalHandler()" aria-label="close modal" role="button">
                            <svg  xmlns="http://www.w3.org/2000/svg"  class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <line x1="18" y1="6" x2="6" y2="18" />
                                <line x1="6" y1="6" x2="18" y2="18" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full flex justify-center py-12" id="button">
                <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 mx-auto transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-4 sm:px-8 py-2 text-xs sm:text-sm" onclick="modalHandler(true)">Open Modal</button>
            </div>
             -->
            
        <!-- Code block ends -->




                </div>
            </div>
        </div>
    </AppLayout>
</template>


<script>
                let modal = document.getElementById("modal");
                function modalHandler(val) {
                    if (val) {
                        fadeIn(modal);
                    } else {
                        fadeOut(modal);
                    }
                }
                function fadeOut(el) {
                    el.style.opacity = 1;
                    (function fade() {
                        if ((el.style.opacity -= 0.1) < 0) {
                            el.style.display = "none";
                        } else {
                            requestAnimationFrame(fade);
                        }
                    })();
                }
                function fadeIn(el, display) {
                    el.style.opacity = 0;
                    el.style.display = display || "flex";
                    (function fade() {
                        let val = parseFloat(el.style.opacity);
                        if (!((val += 0.2) > 1)) {
                            el.style.opacity = val;
                            requestAnimationFrame(fade);
                        }
                    })();
                }
            </script>