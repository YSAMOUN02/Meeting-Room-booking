<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;
use Illuminate\Support\Facades\Auth;
use DateTime;
class bookingRoomController extends Controller
{
    public function new_booking(Request $request)
    {
        $exist_booked_room = 0;

        $from_date = new \DateTime($request->from_date);
        $to_date = new \DateTime($request->to_date);
        $to_date->modify('+1 day'); // Include the end date in the range

        $period = new \DatePeriod(
            $from_date,
            new \DateInterval('P1D'), // Interval of 1 day
            $to_date
        );
        $state_success = 0;
        $dates = [];
        foreach ($period as $date) {
            $dates[] = $date->format('Y-m-d'); // Format each date as a string (e.g., "2024-11-06")
        }

        $qty_date = count($dates);

        $message = '';

        if($qty_date == 1){

            $date = new \DateTime($dates[0]);
                $room = new Booking();
                $room->room = $request->room ?? '';
                $room->staff_name = $request->staff_name ?? '';
                $room->staff_id = $request->staff_id ?? '';
                $room->department = $request->staff_department ?? '';
                $room->title = $request->description ?? '';
                $room->meeting_type = $request->meeting_type ?? '';
                $room->date = $dates[0]; // Set the current date in the loop
                $room->start_time = $request->start_time ?? '';
                $room->end_time = $request->end_time ?? '';
                $room->created_by_id = Auth::user()->id;
                $room->created_by_name = Auth::user()->name;
                $stored = $stored = $room->save();
            if($stored){
                $state_success++;
            }

        }elseif($qty_date > 1){

            // return  $current_date ;
            for ($i = 0; $i < $qty_date; $i++) {

                $date = new \DateTime($dates[$i]);


                    $from_date = new \DateTime($request->from_date);
                    $to_date = new \DateTime($request->to_date);

                    $interval = $from_date->diff($to_date);
                    $qty_date = $interval->days;

                    $current_date = clone $from_date; // Clone to keep original date intact

                    for ($i = 0; $i <= $qty_date; $i++) {
                        $room = new Booking();
                        $room->room = $request->room ?? '';
                        $room->staff_name = $request->staff_name ?? '';
                        $room->staff_id = $request->staff_id ?? '';
                        $room->department = $request->staff_department ?? '';
                        $room->title = $request->description ?? '';
                        $room->meeting_type = $request->meeting_type ?? '';
                        $room->date = $current_date->format('Y-m-d'); // Set the current date in the loop
                        $room->start_time = $request->start_time ?? '';
                        $room->end_time = $request->end_time ?? '';
                        $room->created_by_id = Auth::user()->id;
                        $room->created_by_name = Auth::user()->name;
                        $stored = $stored = $room->save();


                        // Move to the next day
                        $current_date->modify('+1 day');

                        if($stored){
                            $state_success++;
                        }
                }
            }

        }else{
            $message = 'Date is 0 Day.';
        }
        if($state_success == $qty_date){
                return redirect('/room/detail/'.$request->room)->with('success','Booking Success.');
        }else{
                return redirect('/room/detail/'.$request->room)->with('fail','!Something went wronge.');
        }
        // }
    }


    public function room_detail($room ){






        $booking_today = booking::where('date', today())
        ->orderBy('start_time', 'asc')
        ->orderBy('end_time', 'asc')

        ->where('room',$room)
        ->where('end_time','>',\Carbon\Carbon::now('Asia/Jakarta')->format('h:i A'))
        ->where('status', 1)
        ->get();

        $room_name = 'NA';
        if($room == 'showroom'){
            $room_name = 'Confirel Show Room';
        }elseif($room == 'kirum'){
            $room_name = 'Kirum Meeting Room';
        }elseif($room == 'panol'){
            $room_name = 'Panol Meeting Room';
        }elseif($room == 'kinal'){
            $room_name = 'KINAL Meeting Room';
        }elseif($room == 'Warehouse'){
            $room_name = 'New Warehouse';
        }




        // return $room_name;
        $last_booking = count( $booking_today );
        return view('frontend.room-detial',[
            'booking_today'=> $booking_today,
            'last'=>$last_booking,
            'room' => $room,
            'room_name'=> $room_name
        ]);

    }

    public function room()
    {

        return view('frontend.room-detial');

    }


    public function booked_room(){
        // $current_time =    \Carbon\Carbon::parse(today())->format('h:i A') ;

        $data = booking::orderby('id','desc')
        ->where('date', '>=' , today())
        // ->where('status', 0)
        ->get();
        $current_time = \Carbon\Carbon::now('Asia/Jakarta')->format('h:i A');
        $current_date = today();
        // return $data;
        return view('frontend.list-booked-room',['data'=>$data
    , 'current_time' =>$current_time,
    'current_date' =>$current_date
]);
    }
    public function booked_room_history(){
                // $current_time =    \Carbon\Carbon::parse(today())->format('h:i A') ;

                $data = booking::orderby('id','desc')
                // ->where('date', '>' , today())
                // ->where('status', 0)
                ->get();

                $current_time = \Carbon\Carbon::now('Asia/Jakarta')->format('h:i A');
                $current_date = today();
                return view('frontend.list-booking-history',[
                    'data'=>$data,
                    'current_time' =>$current_time,
                    'current_date' =>$current_date
                ]);
    }


    public function cancel_booking(request $request){
       $id = $request->id;

       $meeting = booking::where('id',$id)->first();
       $meeting->status = 0;
        $save =   $meeting->save();

        if($save){
            return redirect('/list/room/booked')->with('success','Canceled Room Success.');
        }else{
            return redirect('/list/room/booked')->with('fail','Opps! Something went wronge.');
        }

    }
}
