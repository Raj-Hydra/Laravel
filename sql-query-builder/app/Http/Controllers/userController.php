<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function userdata()
    {
        $result = DB::table('users')->get();
        return view('user', ['user' => $result]);
    }
}