<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Panolroom;

class RoomController extends Controller
{


    public function store(Request $request)
    {
        return $request;
    }

    public function room()
    {
        return view('frontend.room-detial');
    }
}
