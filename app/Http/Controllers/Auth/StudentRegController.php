<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Admin;
use App\Student;
use Session;
use Validator;
use Illuminate\Support\Facades\DB;
use App\category;
use Illuminate\Support\Facades\Artisan;
use App;

class StudentRegController extends Controller
{

    use RegistersUsers;
    public function __construct()
    {
    //    DB::setDefaultConnection('default'); //admin section
        $this->middleware('guest');
    }
    public function showLoginForm($id)
    {
        $admin = DB::table('admins')->where('id',$id)->get();
       // dump($admin[0]->id);
       $category = category::all();
    //   dump($category);
        return view('student-login',compact('admin','category'));
    }

    public function login(Request $request){

        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->password] , $request->remember))
        {
            return redirect()->intended(route('home'));
        }

        return redirect()->back()->withInput($request->only('email'));
        
    }

    public function register(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3|max:15',
            'email' => 'required|unique:admins|max:35',
            'password' => 'required|min:3|max:6'
        ]);
        if($validator->fails()){
              return response()->json($validator);
            //    return Redirect::route('login#toregister')->withErrors($validator);
        }
        else{
            $admin = Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
            Auth::guard('home');
        }
     
    }
    protected function Student_SignUp(Request $req){
        
       $validator = Validator::make($req->all(), [
           'name' => 'required',
           'student_id' => 'required|unique:users|max:100',
           'admin_id' => 'required',
           'password' => 'required|min:3|max:10|confirmed',
           'admin_email' => 'required',
           'contact' => 'numeric'
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
       //    $student->validity = $carbon->toDateTimeString();
           $student->save();

           return response()->json(array('msg'=> "Now, You Can Login!"));
           
       }
   }
}
