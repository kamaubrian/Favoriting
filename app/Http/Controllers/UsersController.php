<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth;
use Illuminate\Http\Request;

class UsersController extends Controller
{
   public function myFavorites(){
       $myFavorites = \Illuminate\Support\Facades\Auth::user()->favorites;
       return view('users.my_favorites',compact('myFavorites'));
   }
}
