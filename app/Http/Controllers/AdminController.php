<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Student;
use App\category;
use App\Addquestion;
use App\Aexam;
use App\examsubject;
use response;
use Illuminate\Support\Facades\input;
use App\Http\Requests;

use Validator;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students_count = DB::table('users')->orderBy('created_at', 'DESC')->where('admin_id',Auth::user()->id)
        //               ->limit(50)
                       ->get()->count();

        $exam_count = DB::table('exam')->orderBy('created_at', 'DESC')->where('admin_id',Auth::user()->id)
                       //->limit(50)
                          ->get()->count();              
      //  dump($students_count);
        return view('admin',compact('students_count', 'exam_count'));
    }

    public function comingsoon()
    {
        return view('Comingsoon');
    }
    public function Addstudent(Request $req)
    {
        
        $carbon = new Carbon();                  // equivalent to Carbon::now()

        if($req->fee == 10){
            $carbon = $carbon->addDays(7);
        }
        else if($req->fee == 50){
            $carbon = $carbon->addMonths(3);
        }
        else if($req->fee == 100){
            $carbon = $carbon->addYears(1);
        }
        else if($req->fee == 200){
            $carbon = $carbon->addYears(3);
        }
        
        $validator = Validator::make($req->all(), [
            'name' => 'required',
            'student_id' => 'required|unique:users|max:100',
            'admin_id' => 'required',
            'password' => 'required|min:3|max:10|confirmed',
            'admin_email' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(array('errors'=> $validator->errors()));
        }
        else{
            $student = new Student;
            $student->student_id = $req->student_id;
            $student->name = $req->name;
            $student->admin_id = $req->admin_id;
            $student->admin_email = $req->admin_email;
           
            $student->password = bcrypt($req->password);
            $student->fee = $req->fee;
            $student->contact = $req->contact;
            $student->category = $req->category;
            $student->validity = $carbon->toDateTimeString();
            $student->save();
            return response()->json($student);
        }

    }

    

    public function Addquestion(Request $req)
    {

       dump($req->all());
       
        //|image|mimes:jpeg,png,jpg,gif,svg|max:2048
        $validator = Validator::make($req->all(), [
    //        'image' => 'required',       
            'question' => 'required',
    //        'option_A' => 'required',
    //        'option_B' => 'required',
    //        'option_C' => 'required',
    //        'option_D' => 'required',
            'marks' => 'required',
            'negative_marks' => 'required',
            'admin_id' => 'required',
            'admin_email' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(array('errors'=> $validator->errors()));
        }
        else{
             
            $addquestion = new Addquestion;
           // $product = new Product($request->input()) ;
            
                if($file = $req->hasFile('image')){
                   
                   $file = $req->file('image') ;
                   $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName();
                   $destinationPath = public_path().'/images/' ;
                   $file->move($destinationPath,$fileName);
                   $addquestion->image = $fileName ;
                }
                if($file = $req->hasFile('imageA')){
                    
                    $file = $req->file('imageA') ;
                    $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName() ;
                    $destinationPath = public_path().'/images/' ;
                    $file->move($destinationPath,$fileName);
                    $addquestion->image_A = $fileName ;
                 }
                 if($file = $req->hasFile('imageB')){
                    
                    $file = $req->file('imageB') ;
                    $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName() ;
                    $destinationPath = public_path().'/images/' ;
                    $file->move($destinationPath,$fileName);
                    $addquestion->image_B = $fileName ;
                 }
                 if($file = $req->hasFile('imageC')){
                    
                    $file = $req->file('imageC') ;
                    $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName() ;
                    $destinationPath = public_path().'/images/' ;
                    $file->move($destinationPath,$fileName);
                    $addquestion->image_C = $fileName ;
                 }
                 if($file = $req->hasFile('imageD')){
                    
                    $file = $req->file('imageD') ;
                    $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName() ;
                    $destinationPath = public_path().'/images/' ;
                    $file->move($destinationPath,$fileName);
                    $addquestion->image_D = $fileName ;
                 }
              
            //$addquestion = new Addquestion;
                $addquestion->question = $req->question;
            
                $addquestion->option_A = $req->option_A;
           
                $addquestion->option_B = $req->option_B;
           
                $addquestion->option_C = $req->option_C;
            
                $addquestion->option_D = $req->option_D;

        //    $addquestion->image = $url;
            $addquestion->examcode = $req->examcode;
            $addquestion->subject_code = $req->subject_code;
            $addquestion->subject = $req->subject;
            $addquestion->category = $req->category;

            $addquestion->marks = $req->marks;
            $addquestion->negative_marks = $req->negative_marks;
            
            $addquestion->owner_email = $req->admin_email;
            $addquestion->owner_id = $req->admin_id;
            $addquestion->correct_option = $req->correct_option;
            $addquestion->level = $req->level;
            $addquestion->save();

            return response()->json($addquestion);
        }

    }
    //Randomize
    public function QuestionRandom(Request $req)
    {
        $exam = Aexam::find($req->examcode);
        if($req->random == 'true')
          $exam->random = 1;
        else $exam->random = 0;
        $exam->save();
    }
    //Update Question 
    public function updatequestion(Request $req)
    {

      // dump($req->all());
      
        //|image|mimes:jpeg,png,jpg,gif,svg|max:2048
        $validator = Validator::make($req->all(), [
    //        'image' => 'required',       
            'question' => 'required',
        //    'option_A' => 'required',
        //    'option_B' => 'required',
        //    'option_C' => 'required',
         //   'option_D' => 'required',
            'marks' => 'required',
            'negative_marks' => 'required',
            'admin_id' => 'required',
            'admin_email' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(array('errors'=> $validator->errors()));
        }
        else{
         //   return ($req);
            $addquestion = Addquestion::find($req->id_for_question_update);
           // $product = new Product($request->input()) ;
           
                if($file = $req->hasFile('image')){
                   
                   $file = $req->file('image') ;
                   $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName() ;
                   $destinationPath = public_path().'/images/' ;
                   $file->move($destinationPath,$fileName);
                   $addquestion->image = $fileName ;
                }
                if($file = $req->hasFile('imageA')){
                    
                    $file = $req->file('imageA') ;
                    $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName() ;
                    $destinationPath = public_path().'/images/' ;
                    $file->move($destinationPath,$fileName);
                    $addquestion->image_A = $fileName ;
                 }
                 if($file = $req->hasFile('imageB')){
                    
                    $file = $req->file('imageB') ;
                    $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName() ;
                    $destinationPath = public_path().'/images/' ;
                    $file->move($destinationPath,$fileName);
                    $addquestion->image_B = $fileName ;
                 }
                 if($file = $req->hasFile('imageC')){
                    
                    $file = $req->file('imageC') ;
                    $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName() ;
                    $destinationPath = public_path().'/images/' ;
                    $file->move($destinationPath,$fileName);
                    $addquestion->image_C = $fileName ;
                 }
                 if($file = $req->hasFile('imageD')){
                    
                    $file = $req->file('imageD') ;
                    $fileName = sha1(date('YmdHis') . str_random(30)).$file->getClientOriginalName() ;
                    $destinationPath = public_path().'/images/' ;
                    $file->move($destinationPath,$fileName);
                    $addquestion->image_D = $fileName ;
                 }
                 
      //      $addquestion = new Addquestion;
             
            $addquestion->question = $req->question;
            
            $addquestion->option_A = $req->option_A;
               
            $addquestion->option_B = $req->option_B;
               
            $addquestion->option_C = $req->option_C;
                
            $addquestion->option_D = $req->option_D;
        //    return;
            
            $addquestion->examcode = $req->examcode;
        //    $addquestion->subject_code = $req->subject_code;
        //    $addquestion->subject = $req->subject;
       //     $addquestion->category = $req->category;

            $addquestion->marks = $req->marks;
            $addquestion->negative_marks = $req->negative_marks;
            
            $addquestion->owner_email = $req->admin_email;
            $addquestion->owner_id = $req->admin_id;
            $addquestion->correct_option = $req->correct_option;
            $addquestion->level = $req->level;
            
            $addquestion->save();

            return response()->json($addquestion);
        }

    }

    public function Addsubject(Request $req)
    {
        
    //    dump($req);
        $validator = Validator::make($req->all(), [
            'subject' => 'required',
        ]);

        if($validator->fails()){
            return response()->json(array('errors'=> $validator->errors()));
        }
        else{
            $examsubject = new examsubject;
            $examsubject->subject = $req->subject;
            $examsubject->examcode = $req->examcode;
            $examsubject->admin_id = $req->admin_id;
            $examsubject->admin_email = $req->admin_email;
           
            $examsubject->save();

            return response()->json($examsubject);
        }

    }

    public function Publish(Request $req)
    {
        
        $exam = Aexam::find($req->examcode);
        $exam->publish = $req->Publish;
        $exam->save();
        dump($exam);
        return;
    }
/*    public function DeleteStudent()
    {
        return view('adminchild.deletestudent');
    }
    public function EditStudent()
    {
        return view('adminchild.editstudent');
    }
    
    public function Create_new_exam()
    {
        return view('adminchild.create_new_exam');
    } */

    public function StudentResult(){
        $result = DB::table('exam')->where('admin_id',Auth::user()->id)
        ->get();

        $category = DB::table('category')
        ->get();
        return view('AllStudent_Resultlist',compact('result', 'category'));
    }

    public function Get_Full_Detail_Result(Request $req){
        $question = DB::table('exam_question')
        ->where(['examcode'  => $req->examcode])//->sum('result.givenmarks');
        ->get();

        $result = DB::table('exam_question')
        ->leftJoin('result', 'result.ques_id', '=', 'exam_question.id')
        ->select('result.*')
        ->where(['exam_question.examcode' => $req->examcode , 'result.student_id' => $req->userid  ])
        ->get();
       
        return response()->json(array('result' => $result, 'question' => $question)); 
    }

    public function Get_All_Result(Request $req){
        $result = DB::table('result')
        ->join('exam_question', 'result.ques_id', '=', 'exam_question.id')
        ->join('users', 'users.student_id', '=', 'result.student_id')
        ->select('result.student_id' , 'users.name' ,'result.givenmarks', 'exam_question.subject')
        ->where(['exam_question.examcode'  => $req->examcode])//->sum('result.givenmarks');
        ->get();

        $cat = DB::table('exam_subject')->where('examcode',$req->examcode)->get();

        return response()->json(array('result' => $result, 'cat' => $cat)); 
    }
    public function Update_Students_Result_List(Request $req) {

        $result = DB::table('exam')
        ->where([
            'exam.admin_id' => Auth::user()->id,
            'exam.category'   => $req->val
        ])
        ->get();
        return response()->json(array('exam' => $result));
    }
   
    public function addquest ($id, $title, $tname, $cat, $time){

    //    dump($id);
        $question = DB::table('exam_question')->orderBy('created_at', 'ASC')->where('examcode',$id) //where('admin_id',Auth::user()->id && 'examcode',$id);
    //    ->limit(500)
        ->get();
        $subject =  DB::table('exam_subject')->orderBy('created_at', 'DESC')->where('examcode',$id) //where('admin_id',Auth::user()->id && 'examcode',$id);
    //    ->limit(500)
        ->get();
        $category = category::all();


        $exam_publish = DB::table('exam')->orderBy('created_at', 'DESC')->where(['admin_id'=>Auth::user()->id,'examcode' =>$id])
        //->limit(50)
           ->get();  
    //    dump($exam_publish);
        return view('addquestion',compact('exam_publish','question','category','subject', 'id', 'title', 'tname', 'cat', 'time'));
     }
    public function showstudent()
    {
        $students = DB::table('users')->orderBy('created_at', 'DESC')->where('admin_id',Auth::user()->id)
     //               ->limit(50)
                    ->get();
        $category = category::all();
       // console($student);
       return view('liststudent',compact('students','category'));
       // return view('liststudent',['students' => $students]);
    }

    public function showExams()
    {
      //  $student = Student::all()->where('admin_id', Auth::user()->id);
      //  dump(Student::all());
        $exam = DB::table('exam')->orderBy('created_at', 'DESC')->where('admin_id',Auth::user()->id)
    //->limit(50)
       ->get();
       // console($student);
       $category = category::all();
       // console($student);
       return view('Exams',compact('exam','category'));
       // return view('liststudent',['students' => $students]);
    }

    public function DeleteQuestion(Request $req)
    {
 
        $Addquestion = Addquestion::find($req->id);
        $Addquestion->delete();
        return response()->json($Addquestion); 
        
     //   return view('adminchild.updatestudent');
    }

    public function Logout(){
        auth()->logout();
    
        session()->flash('message', 'Some goodbye message');
    
        return redirect('admin/login');
      }
}
