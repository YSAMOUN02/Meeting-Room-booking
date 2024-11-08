<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function all_room(){

        $guestToken = Str::random(60);
        Cache::put('guest_token_' . $guestToken, true, now()->addHours(2)); // Expires in 2 hours

        return view('frontend.home',['token' => $guestToken]);
    }

}
