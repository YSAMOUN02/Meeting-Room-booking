<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\RoomController;
use PhpParser\Builder\Class_;
use App\Http\Controllers\Frontend\bookingRoomController;
use App\Http\Controllers\Frontend\AdminController;

use App\Http\Controllers\Backend\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Backed
Route::get('/',[AdminController::class, 'login'])->name('login');

Route::post('/login/submit', [AdminController::class, 'login_submit']);






Route::middleware(['auth'])->group(function () {
    Route::get('/room',[HomeController::class, 'all_room']);
    Route::get('/room/detail/{room}',[bookingRoomController::class, 'room_detail']);

    Route::POST('/room/detial/store',[bookingRoomController::class, 'new_booking']);


    Route::get('/list/room/booked',[bookingRoomController::class, 'booked_room']);

    Route::get('/list/history/booked',[bookingRoomController::class, 'booked_room_history']);

    Route::POST('/room/cancel',[bookingRoomController::class, 'cancel_booking']);


    Route::post('/abc',[bookingRoomController::class, 'test']);

    Route::get('/list/user',[UserController::class, 'list_user']);
    // Route::get('/user/create', [UserController::class, 'create_user_form']);

    Route::post('/user/delete/submit',[UserController::class, 'delete_user_submit']);

    Route::post('/user/update/submit',[UserController::class, 'update_user']);

    Route::get('/user/create', [UserController::class, 'create_user_form']);

    Route::post('/user/create/submit', [UserController::class, 'create_user_submit']);



Route::get('/logout', [AdminController::class, 'logout']);

});

