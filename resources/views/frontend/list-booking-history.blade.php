
@extends('frontend.master')
@section('content')



    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <form action="/room/cancel" method="post">
                        @csrf
                        <input type="text" class="hidden" id="value_delete" name="id">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to cancel of booking room ?</h3>
                    <button  data-modal-hide="popup-modal" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No, cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<section class="bg-gray-50 dark:bg-gray-900">
    <div class="w-full">
        <!-- Start coding here -->
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

            <div class="overflow-x-auto">
                <table class="table w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-4 py-3">Meeting Room </th>
                            <th scope="col" class="px-4 py-3">Topic </th>
                            <th scope="col" class="px-4 py-3">Type</th>
                            <th scope="col" class="px-4 py-3">Meeting Date</th>
                            <th scope="col" class="px-4 py-3">From Time</th>
                            <th scope="col" class="px-4 py-3">To Time</th>
                            <th scope="col" class="px-4 py-3">Booked By</th>
                            <th scope="col" class="px-4 py-3">Booked At</th>
                            <th scope="col" class="px-4 py-3">Status</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $state = 0;
                        @endphp
                        @foreach ($data as  $item)


                            <tr class="border-b dark:border-gray-700 ">
                                <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$item->title}}</th>
                                <td class="px-4 py-3">{{$item->room}}</td>
                                <td class="px-4 py-3">{{$item->meeting_type}}</td>

                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($item->date)->format('d F Y') }} </td>
                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($item->start_time)->format('h:i A') }}</td>
                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($item->end_time)->format('h:i A') }}</td>
                                <td class="px-4 py-3">{{$item->staff_name}}</td>
                                <td class="px-4 py-3">{{ \Carbon\Carbon::parse($item->created_at)->format('d F Y') }}</td>
                                <td class="px-4 py-3">
                                    @php
                                     $end = \Carbon\Carbon::parse($item->end_time)->format('h:i A');
                                     $date = \Carbon\Carbon::parse($item->date)->format('d F Y');
                                     $today =  \Carbon\Carbon::parse($current_date)->format('d F Y');
                                    @endphp

                                    @if($item->status == 0)
                                        <span class="inline-flex items-center bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">
                                            <span class="w-2 h-2 me-1 bg-red-500 rounded-full"></span>
                                            Canceled
                                        </span>
                                        @elseif($item->status == 1 && $today   > $date  )

                                        <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>

                                            Completed
                                        </span>

                                        @elseif($item->status == 1 && $current_time  >=  $end && $today  == $date  )

                                        <span class="inline-flex items-center bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                            <span class="w-2 h-2 me-1 bg-green-500 rounded-full"></span>

                                            Completed
                                        </span>
                                        @elseif($item->status == 1)
                                        <span class="inline-flex items-center bg-amber-100 text-amber-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">
                                            <span class="w-2 h-2 me-1 bg-amber-500 rounded-full"></span>
                                            On Going
                                        </span>
                                    @endif

                                </td>

                            </tr>
                        @php
                            $state++;
                        @endphp


                        @endforeach

                        @if($state == 0)
                        <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">No Bookng Data</th>

                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3"></td>
                            <td class="px-4 py-3">

                            </td>
                        </tr>

                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    </section>
@endsection
