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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
                            <label for="student_id" class="col-md-4 control-label">student_id</label>

                            <div class="col-md-6">
                                <input id="student_id" type="student_id" class="form-control" name="student_id" value="{{ old('student_id') }}" required>

                                @if ($errors->has('student_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('student_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

   <!--  form Create Post -->
   <div id="create" class="modal fade" role="dialog">
                                      <div class="modal-dialog" >
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"></h4>
                                                    <h5 id="msg" class="text-success"></h5>
                                                </div>
                                                <div class="modal-body"> 
                                                
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group row add">
                                                            <label class="control-label col-sm-4" for="name">Student Name :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Student Full Name" required>
                                                                <p class="name_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4" for="student_id">Create Student Id :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="student_id" name="student_id" placeholder="Enter Student Id" required>
                                                                <p class="student_id_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                                        
                                                        <input type="hidden" disabled class="form-control" id="admin_id" name="admin_id" value=" {{ Auth::user()->id }}" placeholder="institution Id" required>
                                                             
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4" for="student_fee">Fee :</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="fee" id="fee" style="height: unset;" required>
                                                                <option id="val" value = "10">Rs. 10 Validity 1 week</option>
                                                                <option id="val" value = "50">Rs. 50 Validity 3 Month</option>
                                                                <option id="val" value = "100">Rs. 100 Validity 1 year</option>
                                                                <option id="val" value = "200">Rs. 200 Validity 3 year</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4" for="contact">Contact No. :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Optional" >
                                                                <p class="student_contact_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                      
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4" for="category">Select Category:</label>
                                                            <div class="col-sm-8">
                                                            
                                                            <select class="chzn-select form-control" id="category" name="category" multiple="multiple" required>
                                                                 
                                                                    @foreach ($category as $cat)
                                                                    <option value='{{$cat->category}}'>{{ $cat->category }}</option>
                                                                    @endforeach
                                                            </select>
                                                                <p class="student_id_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="password" class="control-label col-sm-4">Password</label>
                                                                <div class="col-sm-8">
                                                                    <input id="password" type="password" class="form-control" name="password" required>
                                                                    <p class="pass_error text-center alert alert-danger hidden"></p>
                                                                </div>
                                                            
                                                        </div>
                                                        

                                                        <div class="form-group">
                                                            <label for="password_confirmation" class="control-label col-sm-4">Confirm Password</label>

                                                            <div class="col-sm-8">
                                                                <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                                                <p class="error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" disabled  class="form-control" id="admin_email" name="admin_email" value=" {{ Auth::user()->email }}" placeholder="Institution Email" required>
                                                        
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-warning" type="submit" id="add">
                                                        <span class="glyphicon glyphicon-plus"></span>Add Student
                                                    </button>
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
                            <!--  End form Create Post -->
@endsection
