<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;
use App\Http\Controllers\cobaController;
// use App\Http\Controllers\OrderController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    Public function coba(){
        return view('badge');
    }
}


// Route::controller(OrderController::class)->group(function(){
//     Route::get('/orders/{id}','show');
//     Route::post('/orders','store');
// });

// Route::get('profile', [UserController::class, 'show'])-> middleware('auth');

// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);