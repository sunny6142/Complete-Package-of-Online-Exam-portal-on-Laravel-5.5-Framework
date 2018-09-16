<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Student;
use App\Aexam;
use App\category;
use response;
use Illuminate\Support\Facades\input;
use App\Http\Requests;

use Validator;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class Addexam extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin');
    }

    public function Add_Exam(Request $req)
    {
        
        $validator = Validator::make($req->all(), [
            'tname' => 'required',
            'examtime' => 'required',
            'category' => 'required',
            'examtitle' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(array('errors'=> $validator->errors()));
        }
        else{
            $exam = new Aexam;
            $exam->tname = $req->tname;
            $exam->examtitle = $req->examtitle;
            $exam->admin_id = $req->admin_id;
            $exam->admin_email = $req->admin_email;
            $exam->category = $req->category;
            $exam->examtime = $req->examtime;
            $exam->save();
              //$exam->examcode
        //      return redirect('home');
             // return redirect('Addquestion')->get();
           // return redirect()->route('Addquestion');
        //    return redirect()->route('Addquestion', ['id' => 1]);
            return response()->json($exam);
        }

    }
}
