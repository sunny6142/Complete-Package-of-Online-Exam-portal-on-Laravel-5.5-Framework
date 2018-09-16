<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

  //  use AuthenticatesUsers;

   
    public function __construct()
    {
     //   DB::setDefaultConnection('student');
        $this->middleware('guest')->except('logout');
        
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request){
       // Config::set('database.default', 'student');
     //   Config::set('database.connections.mysql.database', 'student') ;
        $this->validate($request,[
            'student_id' => 'required|string',
            'password' => 'required|min:3|max:10'
        ]);

     //   Auth::guard('web')->setConnection('student');

        if(Auth::guard('web')->attempt(['student_id'=> $request->student_id, 'password' => $request->password] , $request->remember))
        {
            return redirect()->intended(route('home'));
          //  protected $redirectTo = '/home';
        }
     //   'failed' => 'These credentials do not match our records.';
        return redirect()->back()->withInput($request->only('student_id'));
    }

    public function StudentLogin(Request $request){
        $validator = Validator::make($request->all(), [
            'student_id' => 'required|string',
            'password' => 'required|min:3|max:10'
        ]);

        if($validator->fails()){
            return response()->json(array('errors'=> $validator->errors()));
        }

        if(Auth::guard('web')->attempt(['student_id'=> $request->student_id, 'password' => $request->password] , $request->remember))
        {
            return response()->json(array('login'=> "/home"));
          //  protected $redirectTo = '/home';
        }
        else{
            return response()->json(array('errors'=> "credentials are not correct"));
        }
    }
}
