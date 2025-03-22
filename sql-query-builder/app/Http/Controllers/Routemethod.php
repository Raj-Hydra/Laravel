<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Routemethod extends Controller
{
    // function querydata(){
    //     $response = DB::table('users')->get();  //it's a query builder feature get data from db.
    //     return $response;
    // }

    function get(){
        // return view('Routemethod',);
        return "You made it Son";
    }
    function post(){
        return "post";
    }

    function put(){
        return "put";
    }
    function patch(){
        return "patch";
    }
    function delete(){
        return "delete";
    }

    function group1(){
        return "this location is kavinagar";
    }
}


