<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\image;

class Imagecontroller extends Controller
{
    function upload(Request $request) {
        // This will store DIRECTLY in storage/app/public/
        $path = $request->file('file')->store('', 'public'); // store in public not other fol
        
         $patharray = explode('/',$path);   //explode removing selcted word/path in string so we get path clear fresh.

         $imgpath=$patharray[0];  //get path because when explode return array we get from index [0];
         $img= new Image();  // making new instance(obj)
         $img->path=$imgpath;  
         if ($img->save()){
            return redirect('list');

         }else{
            return "error";
         } 
        }

         function list(){
                $images= image::get();
                return view('display',['image'=>$images]);
          }

          function dumpload(Request $request){
            $path = $request->file('file')->store('','public');

            // $patharray= explode('/',$path);
            $img = new Image();  // making new instance(obj)
            $img->path=$path;
            $img->save();

          }
    
}
