<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('profile', [UserController::class, 'show'])->middleware('auth');
class UserController extends Controller
{
    
}