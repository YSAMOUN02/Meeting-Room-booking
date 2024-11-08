@extends('frontend.master')
@section('content')

<section  class="drop_slow1 laptop_respond dark:bg-sky-800">
    <div  class="grid max-w-screen-xl py-1 px-4 md:px-4 lg:mx-auto lg:gap-8 xl:gap-0 lg:py-4 lg:px-0 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            @if ($room == 'kirum')
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Kirum Meeting Room</h1>
                <p class="max-w-2xl mb-6 font-bold text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    PPM Building Near Purchase and Logistic office. <br />
                    <span class="text-rose-500">Seat up to 10 People.</span>
                </p>
            @elseif($room == 'panol')
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Panol Room</h1>
                <p class="max-w-2xl mb-6 font-bold text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    PPM Building Near Purchase and Logistic office. <br />
                    <span class="text-rose-500">Seat up to 8 People.</span>
                </p>
            @elseif($room == 'kinal')
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white"> KINAL Meeting Room</h1>
                <p class="max-w-2xl mb-6 font-bold text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    PPM Building Near HR Office. <br />
                    <span class="text-rose-500">Seat up to 30 People.</span>
                </p>
            @elseif($room == 'showroom')
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Confirel Show Room</h1>
                <p class="max-w-2xl mb-6 font-bold text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Confirel Building G Floor. <br />
                    <span class="text-rose-500">Seat up to 30 People.</span>
                </p>
                @elseif($room == 'Warehouse')
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white"> New Warehouse</h1>
                <p class="max-w-2xl mb-6 font-bold text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    New Warehouse. <br />
                    <span class="text-rose-500">Seat up to 30 People.</span>
                </p>
            @endif



              <div class="flex">
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    Book Now
                  </button>
                {{-- <button data-modal-target="default-modal2" data-modal-toggle="default-modal2" class="mx-2 block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button"> --}}

                    {{-- <div class="relative max-w-sm mx-2">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                              <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input id="datepicker-actions" datepicker datepicker-buttons datepicker-autoselect-today type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date.">
                      </div> --}}



                    {{-- @if ($room == 'kirum')
                        <span >Today Kirum's Meeting Schedule </span>
                            @elseif($room == 'panol')
                        <span >Today Panol's Meeting Schedule </span>
                        @elseif($room == 'kinal')
                        <span >Today Kinal's Meeting Schedule </span>
                        @elseif($room == 'showroom')
                        <span >Today Confirel ShowRoom's Meeting Schedule </span>
                        @endif --}}
                  {{-- </button> --}}
              </div>
        </div>
        <div class="mt-1 lg:mt-0 lg:col-span-5 lg:flex">
            @if ($room == 'kirum')
            <img class="w-full object-cover rounded-t-lg" src="{{URL('assets/image/kirum.jpg')}}" alt="" />
        @elseif($room == 'panol')
            <img src="{{URL('assets/image/panol.jpg')}}" alt="mockup">
        @elseif($room == 'kinal')
        <img class="w-full object-cover rounded-t-lg" src="{{URL('assets/image/kinal.jpg')}}" alt="" />
        @elseif($room == 'showroom')
        <img class="w-full object-cover rounded-t-lg" src="{{URL('assets/image/confirel.jpg')}}" alt="" />
        @elseif($room == 'Warehouse')
        <img class="w-full object-cover rounded-t-lg" src="{{URL('assets/image/photo_2024-11-08_09-13-06.jpg')}}" alt="" />
        @endif

        </div>
    </div>
</section>



<div class="room-booking  ">
<div class="place-item-center  grid justify-items-start md:justify-items-center ">


</div>


<!-- Modal toggle -->


  <!-- Main modal -->
  <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative p-4 w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <!-- Modal header -->
              <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                  <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Booking Panol Room
                  </h3>
                  <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                      </svg>
                      <span class="sr-only">Close modal</span>
                  </button>
              </div>
              <!-- Modal body -->
              <form action="/room/detial/store" method="POST"  >

                    @csrf
                    <div class="p-5">
                        <div class="mb-5">
                            <label for="room" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Room selected <span class="text-rose-700">*</span></label>
                            <input type="text" value="{{ old('room', $room ?? '') }}"  id="room" name="room" class="hidden"  required />
                            <input type="text" name="ka" value="{{ old('ka', $room_name ?? '') }}" disabled  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required />
                        </div>

                        <div class="mb-5">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Name <span class="text-rose-600">*</span></label>
                            <input type="text" id="name" value="{{ old('name', Auth::user()->name ?? '') }}" readonly name="staff_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required />
                        </div>

                        <div class="mb-5">
                            <label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Staff ID <span class="text-rose-600">*</span></label>
                            <input type="text" readonly value="{{ old('staff_id', Auth::user()->id_card ?? '') }}"  id="id" name="staff_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>

                        <div class="mb-5">
                            <label for="department" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Department<span class="text-rose-700">*</span></label>
                            <select id="department" readonly name="staff_department" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-900 dark:focus:ring-blue-500 dark:focus:border-blue-500">

                                <option selected value="{{old('staff_department', Auth::user()->department ?? '') }}">{{Auth::user()->department}}</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Admin">Admin</option>
                                <option value="Comercail">Commercial</option>
                                <option value="Design">Design</option>
                                <option value="Export">Export</option>
                                <option value="Finance">Finance</option>
                                <option value="IT">IT</option>
                                <option value="Logistic">Logistic</option>
                                <option value="Management">Management</option>
                                <option value="Marketing">Marketing</option>

                                <option value="Planning">Planning</option>
                                <option value="Production">Production</option>
                                <option value="Purchase">Purchase</option>
                                <option value="Purchase DPM">Purchase DPM</option>
                                <option value="QA">QA</option>
                                <option value="QC">QC</option>
                                <option value="QM">QM</option>
                                <option value="QP">QP</option>
                                <option value="RA">RA</option>
                                <option value="Sale">Sale</option>
                                <option value="Warehouse">Warehouse</option>
                                <option value="Other">Other</option>
                                <!-- Add other departments as needed -->
                            </select>
                        </div>

                        <div class="mb-5">
                            <label for="meeting_type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Meeting Type <span class="text-rose-600">*</span></label>
                            <div class="mx-auto grid grid-cols-2 gap-4">
                                <div class="flex items-center mb-4">
                                    <input id="meeting" checked type="radio" value="Meeting" name="meeting_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="meeting"  class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Meeting</label>
                                </div>
                                <div class="flex items-center">
                                    <input id="training" type="radio" value="Training" name="meeting_type" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="training" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Training</label>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Meeting or Training Title </label>
                            <textarea id="description" name="description" required rows="4" class="block p-2.5 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                        </div>
                        <div class="mb-5 grid grid-cols-2 gap-4">
                        <div>
                            <label for="from_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">From Date <span class="text-rose-600">*</span></label>
                            <input type="date" onchange="validation_data()" id="from_date" value="{{ date('Y-m-d') }}" name="from_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                        <div>
                            <label for="to_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">To Date <span class="text-rose-600">*</span></label>
                            <input  onchange="validation_data()" type="date" id="to_date" value="{{ date('Y-m-d') }}" name="to_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                        </div>
                    </div>
                        <div class="mb-5 grid grid-cols-2 gap-4">
                            <div>
                                <label for="start_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Start Time <span class="text-rose-600">*</span></label>
                                <input onchange="validation_data()" type="time" id="start_time" name="start_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                            <div>
                                <label for="end_time" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">End Time <span class="text-rose-600">*</span></label>
                                <input onchange="validation_data()" type="time" id="end_time" name="end_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                            </div>
                        </div>


              </div>
              <!-- Modal footer -->
              <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                  <button type="button" id="btn_submit_booking"  class="text-white  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Booking</button>
                  <button data-modal-hide="default-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
              </div>
            </form>
          </div>
      </div>
  </div>

  <div id="default-modal2" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    {{-- <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Booking Panol Room
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal2">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                <button data-modal-hide="default-modal2" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Cancel</button>
            </div>
        </div>
    </div> --}}
    </div>

    <section class="  laptop_respond bg-white   grid max-w-screen-xl px-4  py-2 mx-auto lg:gap-8 xl:gap-0 lg:py-4 lg:grid-cols-1 ">
        @if ($room == 'kirum')
            <span class="text-2xl  font-bold">Today Kirum's Meeting Schedule </span>
        @elseif($room == 'panol')
        <span class="text-2xl  font-bold">Today Panol's Meeting Schedule </span>
        @elseif($room == 'kinal')
        <span class="text-2xl  font-bold">Today Kinal's Meeting Schedule </span>
        @elseif($room == 'showroom')
        <span class="text-2xl  font-bold">Today Confirel ShowRoom's Meeting Schedule </span>
        @elseif($room == 'showroom')
        <span class="text-2xl  font-bold">Today Confirel ShowRoom's Meeting Schedule </span>
        @elseif($room == 'Warehouse')
        <span class="text-2xl  font-bold">Today Warehouse's Meeting Schedule </span>
        @endif

        <ol class="relative border-s border-gray-200 dark:border-gray-700 mt-5">


            @if(!empty($booking_today))
                @php
                    $length = 1;

                @endphp
                @foreach ($booking_today as $item)
                    @if($length == $last)
                    <li class="mb-10 ms-6 ">
                        <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </span>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">{{$item->meeting_type}} ({{$item->department}}) <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ms-3">Latest</span></h3>
                        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Topic : {{$item->title}}</h3>
                        <span class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Booked By: {{$item->staff_name}}</span>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Meeting Date:  {{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}</time>
                        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Meeting Time: {{ \Carbon\Carbon::parse($item->start_time)->format('h:i A') }}
                            To {{ \Carbon\Carbon::parse($item->end_time)->format('h:i A') }}</time>

                    </li>
                    @else
                        <li class="mb-10 ms-6">
                            <span class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
                                <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </span>
                            <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">{{$item->meeting_type}} ({{$item->department}})</h3>
                            <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Topic : {{$item->title}}</h3>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Meeting Date: {{ \Carbon\Carbon::parse($item->date)->format('d F Y') }}</time>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Meeting Time: {{ \Carbon\Carbon::parse($item->start_time)->format('h:i A') }}
                                To {{ \Carbon\Carbon::parse($item->end_time)->format('h:i A') }}</time>
                        </li>


                    @endif

                    @php
                    $length += 1;
                    @endphp

                @endforeach
                @if($length == 1)
                <li class="mb-10 ms-6">
                    <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">No Booking Data <span class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ms-3">Latest</span></h3>
                </li>
                @endif

            @endif
        </ol>




    </section>
{{-- <section class="drop_slow2 laptop_respond">
    <!-- component -->
    <div  class=" max-w-screen-xl py-1 px-4 md:px-4 lg:mx-auto lg:gap-8 xl:gap-0 lg:py-4 lg:px-0">
    <header class="flex items-center justify-between border-b border-gray-200 px-1 lg:px-0 py-4 lg:flex-none">
      <h1 class="text-base font-semibold leading-6 text-gray-900">
        <time datetime="2022-01">January 2022</time>
      </h1>
      <div class="flex items-center">
        <div class="relative flex items-center rounded-md bg-white shadow-sm md:items-stretch">
          <button type="button" class="flex h-9 w-12 items-center justify-center rounded-l-md border-y border-l border-gray-300 pr-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pr-0 md:hover:bg-gray-50">
            <span class="sr-only">Previous month</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
            </svg>
          </button>
          <button type="button" class="hidden border-y border-gray-300 px-3.5 text-sm font-semibold text-gray-900 hover:bg-gray-50 focus:relative md:block">Today</button>
          <span class="relative -mx-px h-5 w-px bg-gray-300 md:hidden"></span>
          <button type="button" class="flex h-9 w-12 items-center justify-center rounded-r-md border-y border-r border-gray-300 pl-1 text-gray-400 hover:text-gray-500 focus:relative md:w-9 md:pl-0 md:hover:bg-gray-50">
            <span class="sr-only">Next month</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>
        <div class="hidden md:ml-4 md:flex md:items-center">
          <div class="relative">

            <select name="month" class="flex items-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" >
                <option value="">Select Month</option>
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>

            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->

          </div>


        </div>
        <div class="relative ml-6 md:hidden">
          <button type="button" class="-mx-2 flex items-center rounded-full border border-transparent p-2 text-gray-400 hover:text-gray-500" id="menu-0-button" aria-expanded="false" aria-haspopup="true">
            <span class="sr-only">Open menu</span>
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path d="M3 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM8.5 10a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM15.5 8.5a1.5 1.5 0 100 3 1.5 1.5 0 000-3z" />
            </svg>
          </button>

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->

        </div>
      </div>
    </header>
    <div class="shadow ring-1 ring-black ring-opacity-5 lg:flex lg:flex-auto lg:flex-col">
      <div class="grid grid-cols-7 gap-px border-b border-gray-300 bg-gray-200 text-center text-xs font-semibold leading-6 text-gray-700 lg:flex-none">
        <div class="flex justify-center bg-white py-2">
          <span>M</span>
          <span class="sr-only sm:not-sr-only">on</span>
        </div>
        <div class="flex justify-center bg-white py-2">
          <span>T</span>
          <span class="sr-only sm:not-sr-only">ue</span>
        </div>
        <div class="flex justify-center bg-white py-2">
          <span>W</span>
          <span class="sr-only sm:not-sr-only">ed</span>
        </div>
        <div class="flex justify-center bg-white py-2">
          <span>T</span>
          <span class="sr-only sm:not-sr-only">hu</span>
        </div>
        <div class="flex justify-center bg-white py-2">
          <span>F</span>
          <span class="sr-only sm:not-sr-only">ri</span>
        </div>
        <div class="flex justify-center bg-white py-2">
          <span>S</span>
          <span class="sr-only sm:not-sr-only">at</span>
        </div>
        <div class="flex justify-center bg-white py-2">
          <span>S</span>
          <span class="sr-only sm:not-sr-only">un</span>
        </div>
      </div>
      <div class="flex bg-gray-200 text-xs leading-6 text-gray-700 lg:flex-auto">
        <div class="hidden w-full lg:grid lg:grid-cols-7 lg:grid-rows-6 lg:gap-px">
          <!--
            Always include: "relative py-2 px-3"
            Is current month, include: "bg-white"
            Is not current month, include: "bg-gray-50 text-gray-500"
          -->
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <!--
              Is today, include: "flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white"
            -->
            <time datetime="2021-12-27">27</time>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2021-12-28">28</time>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2021-12-29">29</time>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2021-12-30">30</time>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2021-12-31">31</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-01">1</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-01">2</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-03">3</time>
            <ol class="mt-2">
              <li>
                <a href="#" class="group flex">
                  <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Design review</p>
                  <time datetime="2022-01-03T10:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">10AM</time>
                </a>
              </li>
              <li>
                <a href="#" class="group flex">
                  <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Sales meeting</p>
                  <time datetime="2022-01-03T14:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                </a>
              </li>
            </ol>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-04">4</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-05">5</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-06">6</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-07">7</time>
            <ol class="mt-2">
              <li>
                <a href="#" class="group flex">
                  <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Date night</p>
                  <time datetime="2022-01-08T18:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">6PM</time>
                </a>
              </li>
            </ol>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-08">8</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-09">9</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-10">10</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-11">11</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-12" class="flex h-6 w-6 items-center justify-center rounded-full bg-indigo-600 font-semibold text-white">12</time>
            <ol class="mt-2">
              <li>
                <a href="#" class="group flex">
                  <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Sam's birthday party</p>
                  <time datetime="2022-01-25T14:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">2PM</time>
                </a>
              </li>
            </ol>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-13">13</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-14">14</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-15">15</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-16">16</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-17">17</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-18">18</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-19">19</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-20">20</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-21">21</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-22">22</time>
            <ol class="mt-2">
              <li>
                <a href="#" class="group flex">
                  <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Maple syrup museum</p>
                  <time datetime="2022-01-22T15:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">3PM</time>
                </a>
              </li>
              <li>
                <a href="#" class="group flex">
                  <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Hockey game</p>
                  <time datetime="2022-01-22T19:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">7PM</time>
                </a>
              </li>
            </ol>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-23">23</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-24">24</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-25">25</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-26">26</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-27">27</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-28">28</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-29">29</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-30">30</time>
          </div>
          <div class="relative bg-white px-3 py-2">
            <time datetime="2022-01-31">31</time>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2022-02-01">1</time>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2022-02-02">2</time>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2022-02-03">3</time>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2022-02-04">4</time>
            <ol class="mt-2">
              <li>
                <a href="#" class="group flex">
                  <p class="flex-auto truncate font-medium text-gray-900 group-hover:text-indigo-600">Cinema with friends</p>
                  <time datetime="2022-02-04T21:00" class="ml-3 hidden flex-none text-gray-500 group-hover:text-indigo-600 xl:block">9PM</time>
                </a>
              </li>
            </ol>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2022-02-05">5</time>
          </div>
          <div class="relative bg-gray-50 px-3 py-2 text-gray-500">
            <time datetime="2022-02-06">6</time>
          </div>
        </div>
        <div class="isolate grid w-full grid-cols-7 grid-rows-6 gap-px lg:hidden">
          <!--
            Always include: "flex h-14 flex-col py-2 px-3 hover:bg-gray-100 focus:z-10"
            Is current month, include: "bg-white"
            Is not current month, include: "bg-gray-50"
            Is selected or is today, include: "font-semibold"
            Is selected, include: "text-white"
            Is not selected and is today, include: "text-indigo-600"
            Is not selected and is current month, and is not today, include: "text-gray-900"
            Is not selected, is not current month, and is not today: "text-gray-500"
          -->
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <!--
              Always include: "ml-auto"
              Is selected, include: "flex h-6 w-6 items-center justify-center rounded-full"
              Is selected and is today, include: "bg-indigo-600"
              Is selected and is not today, include: "bg-gray-900"
            -->
            <time datetime="2021-12-27" class="ml-auto">27</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-28" class="ml-auto">28</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-29" class="ml-auto">29</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-30" class="ml-auto">30</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2021-12-31" class="ml-auto">31</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-01" class="ml-auto">1</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-02" class="ml-auto">2</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-03" class="ml-auto">3</time>
            <span class="sr-only">2 events</span>
            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
              <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
              <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
            </span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-04" class="ml-auto">4</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-05" class="ml-auto">5</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-06" class="ml-auto">6</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-07" class="ml-auto">7</time>
            <span class="sr-only">1 event</span>
            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
              <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
            </span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-08" class="ml-auto">8</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-09" class="ml-auto">9</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-10" class="ml-auto">10</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-11" class="ml-auto">11</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 font-semibold text-indigo-600 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-12" class="ml-auto">12</time>
            <span class="sr-only">1 event</span>
            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
              <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
            </span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-13" class="ml-auto">13</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-14" class="ml-auto">14</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-15" class="ml-auto">15</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-16" class="ml-auto">16</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-17" class="ml-auto">17</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-18" class="ml-auto">18</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-19" class="ml-auto">19</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-20" class="ml-auto">20</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-21" class="ml-auto">21</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 font-semibold text-white hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-22" class="ml-auto flex h-6 w-6 items-center justify-center rounded-full bg-gray-900">22</time>
            <span class="sr-only">2 events</span>
            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
              <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
              <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
            </span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-23" class="ml-auto">23</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-24" class="ml-auto">24</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-25" class="ml-auto">25</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-26" class="ml-auto">26</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-27" class="ml-auto">27</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-28" class="ml-auto">28</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-29" class="ml-auto">29</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-30" class="ml-auto">30</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-white px-3 py-2 text-gray-900 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-01-31" class="ml-auto">31</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-01" class="ml-auto">1</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-02" class="ml-auto">2</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-03" class="ml-auto">3</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-04" class="ml-auto">4</time>
            <span class="sr-only">1 event</span>
            <span class="-mx-0.5 mt-auto flex flex-wrap-reverse">
              <span class="mx-0.5 mb-1 h-1.5 w-1.5 rounded-full bg-gray-400"></span>
            </span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-05" class="ml-auto">5</time>
            <span class="sr-only">0 events</span>
          </button>
          <button type="button" class="flex h-14 flex-col bg-gray-50 px-3 py-2 text-gray-500 hover:bg-gray-100 focus:z-10">
            <time datetime="2022-02-06" class="ml-auto">6</time>
            <span class="sr-only">0 events</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section> --}}

<!-- End of form input -->

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script>

function generateTimeOptions() {
    const times = [];
    // Generate a list of times from your desired range (e.g., 8:00 AM to 5:00 PM)
    for (let hour = 8; hour < 18; hour++) {
        for (let minute = 0; minute < 60; minute += 30) { // Assuming 30-minute intervals
            const time = `${hour}:${minute < 10 ? '0' : ''}${minute}`;
            times.push(time);
        }
    }
    return times;
}

</script>
@endsection
