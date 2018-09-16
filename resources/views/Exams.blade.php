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
                                                        <h4>Exam List</h4>
                                                        <span>Add <code>Delete</code> & Update</span>
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
                                                        <li class="breadcrumb-item"><a href="#" onclick="create_new_exam()"> <i class="glyphicon glyphicon-plus"></i> Create New Exam</a>
                                                        </li>
                                                       
                                                    </ul>
                                                </div>
                                            </div>
                                        
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    
                                    <!-- Basic table card start -->
                                    <div class="container">
                                        
                                        <div class="card-block table-border-style">

                                            <!-- Create New Exam -->
                                         
                                            <!-- End Create New Exam -->
                                                    <?php $no=1; ?>
                                                    @foreach ($exam as $value)
                                                    <div class="col-md-6 col-xl-3">
                                                        <div class="card widget-card-1">
                                                            <div class="card-block-small">
                                                                <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                                                <span class="text-c-blue f-w-600">Exam Title</span>
                                                                <h4>{{$value->examtitle}}</h4>
                                                                <div>
                                                                    <span class="f-left m-t-10 text-muted">
                                                                    <a href="addquestion/examcode/{{$value->examcode}}/{{$value->examtitle}}/{{$value->tname}}/{{$value->category}}/{{$value->examtime}}" class="show-modal btn btn-info btn-sm" >
                                                                        <i class="icofont icofont-eye-alt"></i>
                                                                        </a>
                                                                        <a  href="#" class="edit-modal btn btn-warning btn-sm" >
                                                                            <i class="glyphicon glyphicon-pencil"></i>
                                                                        </a>
                                                                        <a  href="#" class="detete-modal btn btn-danger btn-sm">
                                                                            <i class="glyphicon glyphicon-trash"></i>
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                           
                                                    @endforeach
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
                            <!--  form Create New Exam -->
                            <div id="add_new_exam" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"></h4>
                                                    <h5 id="create_exam_error_msg" class="text-success"></h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group row add">
                                                            <label class="control-label col-sm-4" for="tname">Teacher Name :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="tname" name="tname" placeholder="Enter Teacher Full Name" required>
                                                                <p class="tname_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4" for="examtitle">Exam Title :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="examtitle" name="examtitle" placeholder="Create New Exam Title 'ex- GS 1' " required>
                                                                <p class="examtitle_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4" for="examtime">Exam Time (min) :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="examtime" name="examtime" placeholder="Enter Exam time (min)" required>
                                                                <p class="examtime_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4" for="category">Select Category :</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="category" id="category" style="height: unset;" required>
                                                                    @foreach ($category as $cat)
                                                                        <option value='{{$cat->category}}'>{{ $cat->category }}</option>
                                                                    @endforeach
                                                               
                                                                </select>
                                                            </div>
                                                        </div>
                                                       
                                                       
                                                        <input type="hidden" disabled class="form-control" id="admin_id" name="admin_id" value=" {{ Auth::user()->id }}" placeholder="institution Id" required>
                                                        
                                                        <input type="hidden" disabled  class="form-control" id="admin_email" name="admin_email" value=" {{ Auth::user()->email }}" placeholder="Institution Email" required>
                                                        
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-warning" type="submit" id="addexam">
                                                        <span class="glyphicon glyphicon-plus"></span>Create Exam
                                                    </button>
                                                    <button class="btn btn-warning hidden" type="button" id="aespin">
                                                    <i class="fa fa-spinner fa-spin" ></i> pls Wait...
                                                    </button>
                                                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remobe"></span>Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <!--  End form Create New Exam -->                              
                            <!--  Show Post -->
                                <div id="show" class="modal fade" role="dialog">
                                      <div class="modal-dialog" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"></h4>
                                                    <h5 id="msg" class="text-success"></h5>
                                                </div>
                                                <div class="modal-body" style="margin: 0px auto;">
                                                    <p class="text-primary">Name : <span id = "view_name"></span> </p>
                                                    <p class="text-primary">Student Id :<span id = "view_student_id"></span>  </p>
                                                    <p class="text-primary">Institution Id :<span id = "view_institution_id"></span>  </p>
                                                    <p class="text-primary">Created At :<span id = "view_created_at"></span>  </p>
                                                    <p class="text-danger">Expired At : <span id = "view_validity"></span></p>
                                                </div>
                                                <div class="modal-footer">
                                                 
                                                    <button class="btn btn-warning hidden" type="button" id="spin">
                                                    <i class="fa fa-spinner fa-spin" ></i> pls Wait...
                                                    </button>
                                                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remobe"></span>Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <!--  End Show Post -->  


                                    <!--  Delete Post -->
                                    <div id="delete" class="modal fade" role="dialog">
                                      <div class="modal-dialog" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"></h4>
                                                    <h5 id="msg" class="text-success"></h5>
                                                </div>
                                                <div class="modal-body" style="margin: 0px auto;">
                                                    <p class="text-primary">ID : <span id = "delete_id"></span> </p>
                                                    <input type="text" id ="did" name="did">
                                                    <p class="text-primary">Name : <span id = "delete_name"></span> </p>
                                                    <p class="text-primary">Student Id :<span id = "delete_student_id"></span>  </p>
                                                    <div class="modal-footer">
                                                    
                                                    <button class="btn btn-danger" type="submit" id="delete">
                                                       <i class="glyphicon glyphicon-trash"></i> Delete
                                                    </button>
                                                    <button class="btn btn-danger hidden" type="button" id="dpspin">
                                                       <i class="fa fa-spinner fa-spin" ></i> pls Wait...
                                                    </button>
                                                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remobe"></span>Close
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <!--  End Delete Post -->  
                        <!--  form Edit Post -->
                            <div id="edit" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"></h4>
                                                    <h5 id="umsg" class="text-success"></h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group row add">
                                                            <label class="control-label col-sm-4" for="name">Student Name :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" disabled class="form-control" id="uname" name="uname" placeholder="Enter Student Full Name" required>
                                                                <p class="name_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" disabled class="form-control" id="uid" name="uid" placeholder="Field Id" required>
                                                               
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4" for="student_id">Student Id :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" disabled class="form-control" id="ustudent_id" name="ustudent_id" placeholder="Enter Student Id" required>
                                                                <p class="student_id_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="password" class="control-label col-sm-4">Create new Password</label>
                                                                <div class="col-sm-8">
                                                                    <input id="upassword" type="password" class="form-control" name="upassword" required>
                                                                    <p class="upass_error text-center alert alert-danger hidden"></p>
                                                                </div>
                                                            
                                                        </div>
                                                        

                                                        <div class="form-group">
                                                            <label for="password_confirmation" class="control-label col-sm-4">Confirm Password</label>

                                                            <div class="col-sm-8">
                                                                <input id="upassword_confirmation" type="password" class="form-control" name="upassword_confirmation" required>
                                                                <p class="uerror text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                                       
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-warning" type="submit" id="update">
                                                        <span class="glyphicon glyphicon-plus"></span>Update
                                                    </button>
                                                    <button class="btn btn-warning hidden" type="button" id="upspin">
                                                    <i class="fa fa-spinner fa-spin" ></i> pls Wait...
                                                    </button>
                                                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remobe"></span>Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <!--  End form edit Post -->  

@endsection

