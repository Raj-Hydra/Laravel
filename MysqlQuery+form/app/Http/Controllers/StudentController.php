<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // public function Add(Request $request){
        // $data=$request->only(['studentname','Course','Batch']);
        // return "Student Data".json_encode($data); // u can do this return array

        // return response()->json([  //or this but this return json only
        //     'message'=>'student Data',
        //     'data'=>$data
        // ]);

     //}

        //--------------------------------------



        function Add(Request $request){
            $data = new Student();   // Put model name
            $data->Name = $request->studentname; //add studentname inside column name Name
            $data->Batch = $request->Batch;      //add Batch inside column Name Batch
            $data->Course = $request->Course;
            $data->save();

            if($data->save()){
                return redirect('list')->with('message','New student Added');}
            else{
                return redirect('Add')->with('error', 'Student not added');
            }


        }

        
        function list(){
            $studentdata = Student::paginate(8);
            return view('listStudent',['studentData'=>$studentdata]);
        }


        function delete ($Id){

            $isDeleted = Student::destroy($Id);
            if($isDeleted){

                return redirect('list')->with('message','Data deleted');
            }
            else{
                return redirect()->with("message",'Data not delted');
            }
        }

        public function edit($Id){  //populate
            $isedit =Student::find($Id);
            return view('edit',['reditdata'=>$isedit]);
       
       }

       function editStudent(Request $request , $Id){

        $student = Student::find($Id);
        $student->Name = $request->Name;
        $student->Batch = $request->Batch;
        $student->Course = $request->Course;
     
        if($student->save()){
            return redirect('list')->with('message','Data Edited');
        }

       }

       function search(Request $request){
        $SearchData = Student::where('name','like',"%$request->search%")->get();
        return view('listStudent',['studentData'=>$SearchData , 'search'=>$request->search]);
       }
    

       function deletmultiple(Request $request){
       $result =  Student::destroy($request->ids);
        if($result){

            return redirect('list')->with('message','Deleted sucessful');
        }
        else{
            return 'Data not Deleted';
        }
       }

    }