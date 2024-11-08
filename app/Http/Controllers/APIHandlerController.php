<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\booking;
use DateTime;
use Carbon\Carbon;

class APIHandlerController extends Controller
{


    public function login_submit(Request $request)
    {

        $name_email = $request->name_email;
        $password = $request->password??'';
        $remember = $request->remember??'';

        // return response()->json([$name_email,$password,$remember]);

        if (Auth::attempt(['user_login' => $name_email, 'password' => $password], $remember)) {
            $user = Auth::user();
            $token = $user->createToken('MyAppToken')->plainTextToken;

            return response()->json([
                'success' => 'Login Success.',
                'token' => $token,
                'user' => $user,
            ],200);
        } elseif (Auth::attempt(['email' => $name_email, 'password' => $password], $remember)) {
            $user = Auth::user();
            $token = $user->createToken('MyAppToken')->plainTextToken;

            return response()->json([
                'success' => 'Login Success.',
                'token' => $token,
                'user' => $user,
            ],200);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    public function checking_existing_room(Request $request){
        try {


        $start_date = $request->start_date??'NA';
        $end_date  = $request->end_date??'NA';
        $start_time = $request->start_time??'NA';
        $end_time = $request->end_time??'NA';
        $qty_date  =1;
        $message = '';
        $bookable = 0;

        $from_date = new \DateTime($start_date);
        $to_date = new \DateTime($end_date);
        $to_date->modify('+1 day'); // Include the end date in the range
        // Calculate Date
        $period = new \DatePeriod(
            $from_date,
            new \DateInterval('P1D'), // Interval of 1 day
            $to_date
        );

        $dates = [];
        foreach ($period as $date) {
            $dates[] = $date->format('Y-m-d'); // Format each date as a string (e.g., "2024-11-06")
        }

        if($start_date != 'NA' && $end_date != 'NA' && $start_time != 'NA'  && $end_time != 'NA'){



            $qty_date = count($dates);
            if($qty_date == 1){

                $date = new \DateTime($dates[0]);
                $exist_booked = Booking::where('date',$date )
                ->where('room',$request->room)
                ->where('status',1)
                ->where(function ($query) use ($request) {
                    $query->whereBetween('start_time', [$request->start_time, $request->end_time])
                          ->orWhereBetween('end_time', [$request->start_time, $request->end_time])
                          ->orWhere(function ($query) use ($request) {
                              $query->where('start_time', '<=', $request->start_time)
                                    ->where('end_time', '>=', $request->end_time);
                          });
                })
                ->get();


                if(!empty($exist_booked)){

                    $state_data  = 0;
                    foreach($exist_booked as $item ){

                        $message.= '- Time '.\Carbon\Carbon::parse($item->start_time)->format('h:i A'). ' to '.\Carbon\Carbon::parse($item->end_time)->format('h:i A').' has been booked by '. $item->department.'  Topic: '.$item->title.'<br>';
                        $state_data ++;
                    }
                    if($state_data  == 0){
                     // Return Null Message
                     $message = 'Room is bookalbe.';
                     $bookable = 1;
                    }
                }
                else{
                  // Return Null Message
                  $message = 'Room is bookalbe.';
                  $bookable = 1;
                }
            }elseif($qty_date > 1){
                $loop_bookable = 0;
                for ($i = 0; $i < $qty_date; $i++) {
                    $formattedDate = Carbon::createFromFormat('Y-m-d', $dates[$i])->format('Y-m-d');


                    $date = new \DateTime($dates[$i]);
                    $exist_booked = Booking::where('date', $date)
                    ->where('room', $request->room)
                    ->where('status',1)
                    ->where(function ($query) use ($request) {
                        $query->where('start_time', '<', $request->end_time)
                            ->where('end_time', '>', $request->start_time);
                    })
                    ->get();


                    if ($exist_booked->isNotEmpty()) { // Check if there are existing bookings
                        foreach ($exist_booked as $item) {
                            $message .= '- Date: ' . $date->format('d-m-Y') . ' | Time: ' .
                                \Carbon\Carbon::parse($item->start_time)->format('h:i A') . ' to ' .
                                \Carbon\Carbon::parse($item->end_time)->format('h:i A') . ' has been booked by ' .
                                $item->department . ' | Topic: ' . $item->title . '<br>';
                                $loop_bookable = 1;
                        }
                    }
                }
                if($loop_bookable == 0){
                    $message = 'Room is bookalbe.';
                    $bookable = 1;
                }

            }else{
                $message = 'Date is 0 Day.';
                $bookable = 0;
            }


            return response()->json([
                'message'=>$message,'bookable'=>$bookable
            ],200);
        }else{
            $message = 'Error Date Invalid.';
            return response()->json([$message,$bookable],200);
        }

       } catch (\Exception $e) {
        // Log any errors with more details
        \Log::error('An error occurred: ' . $e->getMessage());
        return response()->json(['error' => 'Invalid time format'], 500);
    }

    }
}
