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

class StudentDelete extends Controller
{
    public function Delete(Request $req)
    {

          $v = 33; 
        $student = Student::find($req->id);
        $student->delete();
        return response()->json($student); 
        
     //   return view('adminchild.updatestudent');
    }
}
