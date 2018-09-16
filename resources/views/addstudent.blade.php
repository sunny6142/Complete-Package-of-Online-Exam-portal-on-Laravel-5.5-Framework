@extends('layouts.app')

@section('content')

  <!-- Pre-loader start -->
  <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

   
                <div class="pcoded-wrapper">
                    
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-file-code bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Basic Form Inputs</h4>
                                                        <span>Lorem ipsum dolor sit <code>amet</code>, consectetur adipisicing elit</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index.html">
                                                                <i class="icofont icofont-home"></i>
                                                            </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    <div class="page-header card" style="width: 100%;">
                                        <div class="row align-items-end">
                                        <div class="col-lg-8" style="margin: 0px auto;">
                                                
                                                <!-- Input Alignment card start -->
                                                
                                                        <div class="main-login main-center">
                                                        <h2>Add Student</h2>{{Auth::user()->name}}
                                                            <form class="" method="post" action="#">
                                                                
                                                                <div class="form-group">
                                                                    <label for="name" class="cols-sm-2 control-label">Student Full Name</label>
                                                                    <div class="cols-sm-10">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                                                            <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group">
                                                                    <label for="username" class="cols-sm-2 control-label">Create Student Login Id</label>
                                                                    <div class="cols-sm-10">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                                                            <input type="text" class="form-control" name="student_id" id="username"  placeholder="Enter your Student Id"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group">
                                                                    <label for="password" class="cols-sm-2 control-label">Password</label>
                                                                    <div class="cols-sm-10">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                                            <input type="password" class="form-control" name="password" id="password"  placeholder="Enter Student Password"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group">
                                                                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                                                    <div class="cols-sm-10">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                                            <input type="password" class="form-control" name="password_confirmation" id="confirm"  placeholder="Confirm your Password"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                        
                                                                <div class="form-group ">
                                                                    <a target="_blank" type="button" id="button" class="btn btn-primary btn-lg btn-block login-button">Add Student</a>
                                                                </div>
                                                                
                                                            </form>
                                                        </div>
                                            
                                                               
                                                <!-- Input Alignment card end -->
                                            
                                                </div>
                                         </div>      
                                    </div>
                                    <!-- Page body end -->
                                    </div>
                                    </div>
                                 </div>
                             </div>
                             <!-- Main-body end -->
                        </div>
                    </div>
                </div>
                                                  
                                                         


@endsection
