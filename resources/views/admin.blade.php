@extends('layouts.app')

@section('content')
<!-- Pre-loader start -->
<div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
 <!-- End Pre-loader start -->   
 <div class="pcoded-main-container">
                <div class="pcoded-wrapper">

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                                        <span class="text-c-blue f-w-600">No. of Exam</span>
                                                        <h4>{{ $exam_count }}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-blue f-16 icofont icofont-warning m-r-10"></i>Add New Exam
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
                                                        <span class="text-c-pink f-w-600">Balance</span>
                                                        <h4>Rs. {{ Auth::user()->balance }}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-pink f-16 icofont icofont-calendar m-r-10"></i>Add Balance
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
                                                        <span class="text-c-green f-w-600">Fixed issue</span>
                                                        <h4>0</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-green f-16 icofont icofont-tag m-r-10"></i>Tracked via microsoft
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- card1 start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card widget-card-1">
                                                    <div class="card-block-small">
                                                        <i class="icofont icofont-social-twitter bg-c-yellow card1-icon"></i>
                                                        <span class="text-c-yellow f-w-600">No. of Student</span>
                                                        <h4> {{ $students_count }}</h4>
                                                        <div>
                                                            <span class="f-left m-t-10 text-muted">
                                                                <i class="text-c-yellow f-16 icofont icofont-refresh m-r-10"></i>Add Student
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- card1 end -->
                                            <!-- Statestics Start -->
                                            <div class="col-md-12 col-xl-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statestics</h5> <br><h4 class="text-danger">Statestics will be active when you have at least  500 Student</h4>
                                                        <h4 class="text-danger"> Call us 9169743022 to get Free App of your institution</h4>
                                                        <div class="card-header-left ">
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div id="statestics-chart" style="height:517px;"></div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-12 col-xl-4">
                                                <!--    <div class="card fb-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-facebook"></i>
                                                            <div class="d-inline-block">
                                                                <h5>facebook</h5>
                                                                <span>blog page timeline</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Active</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>23</h2>
                                                                    <p class="text-muted">Comment</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>  -->
                                                    <div class="card dribble-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-dribbble"></i>
                                                            <div class="d-inline-block">
                                                                <h5>Notes</h5>
                                                                <span>Per Note Analysis</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>0</h2>
                                                                    <p class="text-muted">Publish</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>o</h2>
                                                                    <p class="text-muted">Unpublish</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card twitter-card">
                                                        <div class="card-header">
                                                            <i class="icofont icofont-social-twitter"></i>
                                                            <div class="d-inline-block">
                                                                <h5>Order Exam</h5>
                                                                <span>current new timeline</span>
                                                            </div>
                                                        </div>
                                                        <div class="card-block text-center">
                                                            <div class="row">
                                                                <div class="col-6 b-r-default">
                                                                    <h2>0</h2>
                                                                    <p class="text-muted">Publish</p>
                                                                </div>
                                                                <div class="col-6">
                                                                    <h2>0</h2>
                                                                    <p class="text-muted">Unpublish</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           
                                            <!-- Email Sent End -->
                                            <!-- Data widget start 
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card project-task">
                                                    <div class="card-header">
                                                        <div class="card-header-left ">
                                                            <h5>Time spent : project &amp; task</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="icofont icofont-simple-left "></i></li>
                                                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                                                <li><i class="icofont icofont-error close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block p-b-10">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Project & Task</th>
                                                                        <th>Time Spents</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">U</h6>
                                                                                <p class="d-inline-block m-l-20">UI Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-pink d-inline-block text-center">R</h6>
                                                                                <p class="d-inline-block m-l-20">Redesign Android App</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-pink" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-yellow d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-yellow" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-green d-inline-block text-center">A</h6>
                                                                                <p class="d-inline-block m-l-20">Appestia landing Page</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-green" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <div class="task-contain">
                                                                                <h6 class="bg-c-blue d-inline-block text-center">L</h6>
                                                                                <p class="d-inline-block m-l-20">Logo Design</p>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            <p class="d-inline-block m-r-20">4 : 36</p>
                                                                            <div class="progress d-inline-block">
                                                                                <div class="progress-bar bg-c-blue" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-xl-6">
                                                <div class="card add-task-card">
                                                    <div class="card-header">
                                                        <div class="card-header-left">
                                                            <h5>To do list</h5>
                                                        </div>
                                                        <div class="card-header-right">
                                                            <button class="btn btn-card btn-primary">Add task </button>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Schedule Meeting with Compnes <span class="label bg-c-green m-l-10 f-10">2 week</span></h6></span>
                                                                    <div class="task-card-img m-l-40">
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Meeting With HOD's and borad</h6><p class="text-muted m-l-40">23 january 2003</p></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Create template, admin with responsive<span class="label bg-c-pink m-l-10">2 week</span></h6></span>
                                                                    <div class="task-card-img m-l-40">
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Suzen" alt="" class="img-40 m-l-10"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-4.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40 m-l-10"></a>
                                                                        <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="to-do-list">
                                                            <div class="checkbox-fade fade-in-primary d-block">
                                                                <label class="check-task d-block">
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr">
                                                                        <i class="cr-icon icofont icofont-ui-check txt-default"></i>
                                                                    </span>
                                                                    <span><h6>Meeting With HOD's and borad</h6>
                                                                        <p class="text-muted m-l-40">23 january 2003</p></span>
                                                                        <div class="task-card-img m-l-40">
                                                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Lary Doe" alt="" class="img-40"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-3.jpg" data-toggle="tooltip" title="Alia" alt="" class="img-40 m-l-10"></a>
                                                                            <a href="#!"><img src="assets/images/avatar-2.jpg" data-toggle="tooltip" title="Josephin Doe" alt="" class="img-40 m-l-10"></a>
                                                                        </div>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Data widget End -->
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
