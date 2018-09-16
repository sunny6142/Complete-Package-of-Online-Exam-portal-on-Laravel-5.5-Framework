<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Admin;
use Session;
use Validator;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AdminLoginController extends Controller
{

    use RegistersUsers;
    public function __construct()
    {
    
        $this->middleware('guest:admin');
    }
    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request){
        Session::put('last_auth_attempt', 'login');
        
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

        if($validator->fails()){
            return response()->json(array('errors'=> $validator->errors()));
        }

        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password' => $request->password] , $request->remember))
        {
            return;
          //  return redirect()->intended(route('admin'));
        }
        return response()->json(array('errors'=> "credentials are not correct"));
//        return redirect()->back()->withInput($request->only('email'));
        
    }

    public function register(Request $request){
        Session::put('last_auth_attempt', 'register');

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:15',
            'email' => 'required|email|unique:admins|max:35',
            'password' => 'required|min:3|max:6|confirmed'
        ]);
        if($validator->fails()){
            return response()->json(array('errors'=> $validator->errors()));
           //   return response()->json($validator);
            //    return Redirect::route('login#toregister')->withErrors($validator);
        }
        else{
            $carbon = new Carbon();                  // equivalent to Carbon::now()
            $carbon = $carbon->addDays(15);

            $admin = Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'exam_limit' => 5,
                'student_limit' => 15,
                'validity'=> $carbon->toDateTimeString(),
                'password' => bcrypt($request->password),
            ]);
            Auth::guard('admin')->login($admin);
            return;
        }
        return response()->json(array('errors'=> "details are not valid"));
    //    Auth::loginUsingId($request->id);
    //    return redirect()->back()->withInput($request->only('email'));
        
    }
}
