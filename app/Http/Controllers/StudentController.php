<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Student;
use response;
use Illuminate\Support\Facades\input;
use App\Http\Requests;

use Validator;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class StudentController extends Controller
{
    public function ChangePassword(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'student_id' => 'required|max:100',
            'password' => 'required|min:6|confirmed',
        ]);

           if($validator->fails()){
            //    return response::json(array('errors'=> $validator->getMessageBag()->toarray()));
                return response()->json(array('errors'=> $validator->errors()));
            }
            else{
                   $student = Student::find($req->id);
                    $student->student_id = $req->student_id;
                    $student->name = $req->name;
                 //   $student->fee = $req->fee;
                    $student->password = bcrypt($req->password);
                    $student->save();
                    return response()->json($student); 
            }
                
     //   return view('adminchild.updatestudent');
    }
}
