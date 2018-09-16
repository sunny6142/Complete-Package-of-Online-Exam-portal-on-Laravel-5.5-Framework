<?php


//use Auth;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('tt',function(){
  //  $users = DB::connection('mysql2');
 //   DB::connection()->statement('CREATE DATABASE :schema', array('schema' => 'cczadqdkmfeokkioaackazcoobffmkaz'));
        $user = "sunny6122";
        $dbName = 'db_'.(md5($user));
      // $dbName = "AAABCDCD";
      $databaseConnection = DB::getSchemaBuilder()->getConnection()->statement("CREATE DATABASE ".$dbName);
  //    Artisan::call('migrate', array('database' => $databaseConnection, 'path' => 'app/database/'));
    
    $config = App::make('config');
  
      // Will contain the array of connections that appear in our database config file.
      $connections = $config->get('database.connections');
  
      // This line pulls out the default connection by key (by default it's `mysql`)
      $defaultConnection = $connections[$config->get('database.default')];
  
      // Now we simply copy the default connection information to our new connection.
      $newConnection = $defaultConnection;
      // Override the database name.
      $tenantName = $dbName;

      $newConnection['database'] = $tenantName ;
  
      // This will add our new connection to the run-time configuration for the duration of the request.
      App::make('config')->set('database.connections.'.$tenantName, $newConnection);

      Artisan::call('migrate', ['--database' => $dbName]);
      $users = DB::connection($dbName);
});

Route::post('test',function(){
    echo 'GET';
});

Route::put('test',function(){
    echo 'GET';
});

Route::delete('test',function(){
    echo 'GET';
});

    Route::get('/', function () {
        return view('welcome');
    });
    
    Route::get('service/price', function () {
        return view('our_service_price');
    });
    
    Route::get('payment/src/instamojo', function () {
        return view('payment/src/instamojo');
    });
    
    Route::get('payment', function () {
        return view('payment/index');
    });

    Route::get('order', 'HomeController@Order');

    Route::post('pay', 'HomeController@pay');

    Route::get('payment/thankyou', 'HomeController@thankyou');
    
    Route::get('payment/webhook', function () {
        return view('payment/webhook');
    });

    Route::get('StudentLogin/{id}', 'Auth\StudentRegController@showLoginForm');

    Auth::routes();
    
    //Student
    Route::post('Studentlogout', 'HomeController@Logout');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/result', 'HomeController@ResultList');
    Route::post('/getdetailresult', 'HomeController@Get_Detail_Result');
    Route::post('/getsingleresult', 'HomeController@Get_Single_Result');
    Route::post('/updateexamlist', 'HomeController@Updateexamlist');
    Route::post('/updateresultlist', 'HomeController@Updateresultlist');
    Route::post('/adduserreponse', 'HomeController@Adduserresponse');
    Route::post('/refresult', 'HomeController@AttemptNewExam');
    Route::get('/exam/start/{id}/{title}/{tname}/{cat}/{time}', 'HomeController@startexam');

    Route::post('/ajaxstudentsignup', 'Auth\StudentRegController@Student_SignUp');
    Route::post('/ajaxstudentlogin', 'Auth\LoginController@StudentLogin');
//    Route::get('/mytest', 'HomeController@mytest');

    //Admin
    Route::get('/Exams', 'AdminController@showExams')->name('MyExams');
    Route::get('/addstudent', 'AdminController@Addstudent')->name('addstudent');
    Route::get('/liststudent', 'AdminController@showstudent')->name('studentlist');
    Route::post('/addquestion', 'AdminController@Addquestion');
    Route::post('/updatequestion', 'AdminController@updatequestion');
    Route::post('/QuestionRandom', 'AdminController@QuestionRandom');
    Route::post('/liststudent', 'AdminController@Addstudent');
    Route::get('/StudentResult', 'AdminController@StudentResult');
    Route::post('/update_studentresultlist', 'AdminController@Update_Students_Result_List');
    Route::post('/getallresult', 'AdminController@Get_All_Result');
    Route::post('/getfulldetailresult', 'AdminController@Get_Full_Detail_Result');
    Route::post('/publish', 'AdminController@Publish');

    Route::post('/Addquestiontodb', 'AdminController@Addsubject');
    Route::post('/addexam', 'Addexam@Add_Exam');
    Route::post('/ChangePassword', 'StudentController@ChangePassword');
    Route::post('/RemoveStudent', 'StudentDelete@Delete');
    Route::post('/RemoveQuestion','AdminController@DeleteQuestion');
    Route::get('/addquestion/examcode/{id}/{title}/{tname}/{cat}/{time}', 'AdminController@addquest');
    Route::prefix('admin')->group(function(){
        Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
        Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
        Route::post('/adminregister', 'Auth\AdminLoginController@register');
        Route::get('', 'AdminController@index')->name('admin.dashboard');
    });
    
Route::post('logout', 'AdminController@Logout');
   
Route::get('/comingsoon', 'AdminController@comingsoon');


Route::get('/Test', function () {
    mail("sunny6142@gmail.com", "AIC", "Testing", "Header" );
 
 /*   $result = DB::table('exam_question')
    ->leftJoin('result', 'result.ques_id', '=', 'exam_question.id')
    ->where('exam_question.examcode', '=', 30)
    ->get();
    dump($result); */
 //   ->get();

//    $result = DB::table('result')
//    ->leftJoin('exam_question', 'exam_question.id', '=', 'result.ques_id')
//    ->whereNull('result.student_id')
//    ->select('result.*' ,  'exam_question.*')
    
//      ->where(['exam_question.examcode'  => 30, 
//           'result.student_id' => 'sunny6142' ])
//    ->whereNull('result.student_id')
 //   ->where(['exam_question.examcode'  => 30, 
  //           'result.student_id' => 'sunny6142' ])
            

    return;

//    ->whereIn(['exam_question.examcode'  => 30,
//    'attendance_student', '=', null])//->sum('result.givenmarks');

    $users = DB::table('users')
    ->join('result', 'result.student_id', '=', 'users.student_id')
    ->join('exam_question', 'result.ques_id', '=', 'exam_question.id')
    ->select('users.*', 'result.*', 'exam_question.*')
  //  ->select('exam_question.examcode')
    ->where('users.student_id', '=', 'sunny6142')
    ->get();
    dump($users);

    return;
    $users = DB::table('users')
    ->join('result', 'result.student_id', '=', 'users.student_id')
    ->join('exam_question', 'result.ques_id', '=', 'exam_question.id')
    ->select('users.*', 'result.*', 'exam_question.*')
  //  ->select('exam_question.examcode')
    ->where('users.student_id', '=', 'sunny6142')
    ->get();
    dump($users);
});

Route::post('/date',function(Request $req){
   
    //dump($req);
 //   $carbon = new Carbon();                  // equivalent to Carbon::now()
 //   $carbon = $carbon->addDays(30);
 /*   echo get_class($carbon); 
    dump($carbon->toDateTimeString());
    dump($carbon->diffForHumans());
    dump(Auth::user()->id);
    $v = 3;
    $student = DB::table('users')->orderBy('created_at', 'DESC')->where('admin_id',$v)
    ->limit(5)
    ->get();
   // dump($student);
    foreach ($student as $user) {
        dump($user);
    }  */
});