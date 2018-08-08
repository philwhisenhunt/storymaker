<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Words;

class UsersController extends Controller

{
    //
    public function index()
    {
       


        return view('welcome', compact('users'));
    }

    public function story()
    {
        $words = DB::table('words')->get();
        $users = DB::table('users')->get();


        return view('stories', compact('words', 'users'));
    }

    public function maker()
    {
      


        return view('maker', compact('words'));
    }
}
