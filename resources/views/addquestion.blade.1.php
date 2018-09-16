

@extends('layouts.app')

@section('content')

<style>
    .modal-ku {
        width: 750px;
        margin: auto;
    }
</style>

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
                                                    <div class="d-inline" style="width:100%">
                                                        <!-- Example single danger button -->
                                                            <div class="btn-group">
                                                            <input type="hidden" disabled id="current_subject_id" name="current_subject_id">
                                                            <input type="hidden" disabled id="current_subject_name" name="current_subject_name">
                                                                <button id="subject_button" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    Subject
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <div class="dropdown-subject">
                                                                        @foreach ($subject as $sub)
                                                                            <a onclick="set_current_subject('{{ $sub->subject }}','{{ $sub->subject_id }}')" class="dropdown-item" href="#">{{ $sub->subject }}</a>
                                                                        @endforeach
                                                                    </div>    
                                                                        <div class="dropdown-divider"></div>
                                                                        <a class="dropdown-item addsubject" href="#">Add Subject</a>
                                                                </div>
                                                            </div><br>
                                                            <span>{{$title}} by <code>{{$tname}} </code> </span>
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
                                                        
                                                        <li class="breadcrumb-item"><span >Category : {{$cat}}</span>
                                                        </li>
                                                        <li class="breadcrumb-item"><span class="text-muted">Time : {{$time}}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        
                                    <!-- Page-header end -->

                                    <!-- Page body start -->
                                    
                                    <!-- Basic table card start -->
                                    <div class="container">
                                        
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table" id="table">
                                                    <thead>
                                                        <tr>
                                                            <th width="50px">No.</th>
                                                            <th>Question</th>
                                                            <th class="text-success">Created At</th>
                                                            <th class="text-center" width="150px">
                                                                <a href="#" class="show_add_question-model btn btn-success btn-sm">
                                                                    <i class="glyphicon glyphicon-plus"></i>
                                                                </a>
                                                            </th>
                                                            
                                                        </tr>
                                                        {{ csrf_field() }}
                                                    </thead>
                                                    <tbody>
                                                    <?php $no=1; ?>
                                                    @foreach ($question as $value)
                                                        <tr class="student{{$value->id}}">
                                                            <td>{{ $no++}} </td>
                                                            <td style="max-width:200px; text-overflow: ellipsis; overflow: hidden;">{!! ($value->question) !!} </td>
                                                            <td class="text-success">{{ $value->created_at }} </td>
                                                            <td>
                                                                <a href="#" onclick="DisplayQuestion('{{ $no-1 }}' , '{{ $value->id }}' , '{{ $value->question }}' , '{{ $value->option_A }}' , '{{ $value->option_B }}' , '{{ $value->option_C }}' , '{{ $value->option_D }}' , '{{ $value->marks }}' , '{{ $value->negative_marks }}' , '{{ $value->correct_option }}' , '{{ $value->level }}', '{{ $value->image }}')"
                                                                 class="show-modal btn btn-info btn-sm" >
                                                                <i class="icofont icofont-eye-alt"></i>
                                                                </a>
                                                                <a  href="#"onclick="EditQuestion('{{ $no-1 }}' , '{{ $value->id }}' , '{{ $value->question }}' , '{{ $value->option_A }}' , '{{ $value->option_B }}' , '{{ $value->option_C }}' , '{{ $value->option_D }}' , '{{ $value->marks }}' , '{{ $value->negative_marks }}' , '{{ $value->correct_option }}' , '{{ $value->level }}', '{{ $value->image }}')"
                                                                 class="edit-modal btn btn-warning btn-sm" >
                                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                                </a>
                                                                <a  href="#" class="detete-modal btn btn-danger btn-sm">
                                                                    <i class="glyphicon glyphicon-trash"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
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
                
                                                  
                            <!--  form Add Question -->
                            <div id="create_question-model" class="modal fade" role="dialog">
                                      <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"></h4>
                                                    <h5 id="add_question_msg" class="text-success"></h5>
                                                    
                                                </div>
                                                <div class="modal-body"> 
                                                    <form class="form-horizontal" role="form" enctype="multipart/form-data" id="modal_form_id"  method="POST">
                                                        <div class="form-group row add">
                                                            <label class="control-label col-sm-4 text-left" for="question" id="edit_qno">Ques No. {{$no}} :</label>
                                                            <span id="MathPreview"class="control-label col-sm-12 text-left text-left" for="question"></span>
                                                            <span id="MathBuffer" class="control-label col-sm-12 text-left text-left" for="question"></span>
                                                            <div class="col-sm-12">
                                                                <textarea name="question" cols="30" rows="5" id="MathInput" class="form-control" onkeyup="Preview.Update()" placeholder="Enter Question..." required></textarea>
                                                                <p class="question_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-sm-12">
                                                            <span id="show_img" class="control-label col-sm-12 hidden"></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                           
                                                               
                                                            <label class="control-label col-sm-3" for="Upload">Upload (optional) :</label>
                                                            <div class="col-sm-8">
                                                                <input type="file" name="image" class="form-control-file" id="image" aria-describedby="fileHelp">
                                                                <p class="file_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="option_A">Option_A :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="option_A" name="option_A" onkeyup="PreviewA.UpdateA()" placeholder="Enter option A" required>
                                                                <p class="option_A_error text-center alert alert-danger hidden"></p>
                                                                <span id="OptionPreview" class="control-label text-left"></span>
                                                                <span id="OptionBuffer" class="control-label text-left" ></span>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="option_B">Option_B :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="option_B" name="option_B" onkeyup="PreviewB.UpdateB()" placeholder="Enter option B" required>
                                                                <p class="option_B_error text-center alert alert-danger hidden"></p>
                                                                <span id="OptionBPreview" class="control-label text-left"></span>
                                                                <span id="OptionBBuffer" class="control-label text-left" ></span>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="option_C">Option_C :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="option_C" name="option_C" onkeyup="PreviewC.UpdateC()" placeholder="Enter option C" required>
                                                                <p class="option_C_error text-center alert alert-danger hidden"></p>
                                                                <span id="OptionCPreview" class="control-label text-left"></span>
                                                                <span id="OptionCBuffer" class="control-label text-left" ></span>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="option_D">Option_D :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="option_D" name="option_D" onkeyup="PreviewD.UpdateD()" placeholder="Enter option D" required>
                                                                <p class="option_D_error text-center alert alert-danger hidden"></p>
                                                                <span id="OptionDPreview" class="control-label text-left"></span>
                                                            <span id="OptionDBuffer" class="control-label text-left" ></span>
                                                            </div>
                                                            
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="marks">Marks :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="marks" name="marks" placeholder="Ex : 0.5 " required>
                                                                <p class="marks_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>  

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="negative_marks">Neg. Marks :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="negative_marks" name="negative_marks" placeholder="Ex : -0.5" required>
                                                                <p class="negative_marks_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="correct_option">Correct Option :</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="correct_option" id="correct_option" style="height: unset;" required>
                                                                    <option value = "A">A</option>
                                                                    <option value = "B">B</option>
                                                                    <option value = "C">C</option>
                                                                    <option value = "D">D </option>
                                                                </select>
                                                            </div>
                                                        </div>    
                                                           
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="level">Difficulty Level :</label>
                                                            <div class="col-sm-8">
                                                                <select class="form-control" name="level" id="level" style="height: unset;" required>
                                                                    <option value = "none">None</option>
                                                                    <option value = "easy">Easy</option>
                                                                    <option value = "medium">Medium</option>
                                                                    <option value = "hard">Hard </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" disabled class="form-control" id="examcode" name="examcode" value=" {{ $id }}" placeholder="examcode" required>
                                                        <input type="hidden" disabled class="form-control" id="category" name="category" value=" {{ $cat }}" placeholder="category" required>
                                                       
                                                        <input type="hidden" disabled class="form-control" id="admin_id" name="admin_id" value=" {{ Auth::user()->id }}" placeholder="institution Id" required>
                                                       
                                                        <input type="hidden" disabled  class="form-control" id="admin_email" name="admin_email" value=" {{ Auth::user()->email }}" placeholder="Institution Email" required>
                                                        
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-warning" type="submit" id="addquestion">
                                                        <span class="glyphicon glyphicon-plus"></span>Add Question
                                                    </button>
                                                    <button class="btn btn-warning hidden" type="submit" id="updatequestion">
                                                        <span class="glyphicon glyphicon-plus"></span>Update Question
                                                    </button>
                                                    <button class="btn btn-warning hidden" type="button" id="add_question_spin">
                                                    <i class="fa fa-spinner fa-spin" ></i> pls Wait...
                                                    </button>
                                                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remobe"></span>Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <!--  End form  Question Post -->                              
                         
                            <!--  form Show Question -->
                            <div id="show_selected_question-model" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title"></h4>
                                          <h5 id="add_question_msg" class="text-success"></h5>
                                      </div>
                                      <div class="modal-body"> 
                                          <form class="form-horizontal" role="form" enctype="multipart/form-data" id="modal_form_id"  method="POST">
                                              <div class="form-group row add">
                                              <label class="col-sm-3 text-right" id="qno"></label>
                                                  <div class="col-sm-9 ">
                                                        <span class="control-label text-left" id="q"></span>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                    <span class="col-sm-1 text-right"></span>
                                                    <label class="control-label col-sm-11 text-left" id="dimg"></label>
                                              </div>

                                              <div class="form-group">
                                                    <label class="col-sm-4 text-right"> Option&nbsp&nbspA&nbsp&nbsp:&nbsp&nbsp</label>
                                                   <div class="col-sm-8">
                                                        <span class="control-label text-left" id="A"></span>
                                                  </div>
                                                  
                                              </div>

                                              <div class="form-group">
                                                   <label class="col-sm-4 text-right"> Option&nbsp&nbspB&nbsp&nbsp:&nbsp&nbsp</label>
                                                   <div class="col-sm-8">
                                                        <span class="control-label text-left" id="B"></span>
                                                   </div>
                                              </div>

                                              <div class="form-group">
                                                    <label class="col-sm-4 text-right"> Option&nbsp&nbspC&nbsp&nbsp:&nbsp&nbsp</label>
                                                    <div class="col-sm-8">
                                                            <span class="control-label text-left" id="C"></span>
                                                    </div>
                                              </div>

                                              <div class="form-group">
                                                    <label class="col-sm-4 text-right"> Option&nbsp&nbspD&nbsp&nbsp:&nbsp&nbsp</label>
                                                    <div class="col-sm-8">
                                                            <span class="control-label text-left" id="D"></span>
                                                    </div>
                                              </div>
                                              
                                              <div class="form-group">
                                              <label class="col-sm-4 text-right">Marks&nbsp&nbsp:&nbsp&nbsp</label>
                                                   <div class="col-sm-8">
                                                        <span class="control-label text-left" id="M"></span>
                                                  </div>
                                              </div>  

                                              <div class="form-group">
                                              <label class="col-sm-4 text-right"> Neg.&nbsp&nbspMarks&nbsp&nbsp:&nbsp&nbsp</label>
                                                   <div class="col-sm-8">
                                                        <span class="control-label text-left" id="NM"></span>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                              <label class="col-sm-4 text-right"> Correct&nbsp&nbspOption&nbsp&nbsp:&nbsp&nbsp</label>
                                                   <div class="col-sm-8">
                                                        <span class="control-label text-left" id="CO"></span>
                                                  </div>
                                              </div>    
                                                 
                                              <div class="form-group">
                                                    <label class="col-sm-4 text-right"> Ques.&nbsp&nbspLevel&nbsp&nbsp:&nbsp&nbsp</label>
                                                    <div class="col-sm-8">
                                                            <span class="control-label text-left" id="L"></span>
                                                    </div>
                                              </div>
                                               
                                          </form>
                                      </div>
                                      <div class="modal-footer">
                                          <button class="btn btn-warning" type="button" data-dismiss="modal">
                                              <span class="glyphicon glyphicon-remobe"></span>Close
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                  <!--  End form Show Question Post -->                           


                                    <!--  Delete Post -->
                                    <div id="delete" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
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

                                <!--  form Add Subject Post -->
                                <div id="addsubject" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title"></h4>
                                                    <h5 id="add_subject_msg" class="text-success"></h5>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" role="form">
                                                        <div class="form-group row add">
                                                            <label class="control-label col-sm-4" for="subject">Subject :</label>
                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" required>
                                                                <p class="subject_error text-center alert alert-danger hidden"></p>
                                                            </div>
                                                        </div>
                                                        
                                                        <input type="hidden" disabled  class="form-control" id="examcode" name="examcode" value=" {{ $id }}" placeholder="Examcode" required>
                                                        
                                                        <input type="hidden" disabled class="form-control" id="admin_id" name="admin_id" value=" {{ Auth::user()->id }}" placeholder="institution Id" required>
                                                        
                                                         <input type="hidden" disabled  class="form-control" id="admin_email" name="admin_email" value=" {{ Auth::user()->email }}" placeholder="Institution Email" required>
                                                         
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-warning" type="submit" id="add_subject_to_db">
                                                        <span class="glyphicon glyphicon-plus"></span>Add Subject
                                                    </button>
                                                    <button class="btn btn-warning hidden" type="button" id="add_subject_to_db_spin">
                                                    <i class="fa fa-spinner fa-spin" ></i> pls Wait...
                                                    </button>
                                                    <button class="btn btn-warning" type="button" data-dismiss="modal">
                                                        <span class="glyphicon glyphicon-remobe"></span>Close
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <!-- form Add Subject Post -->


                              <!--  Alert Post -->
                              <div id="alert_msg" class="modal fade" role="dialog">
                                      <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h4 class="modal-title text-warning"></h4>
                                                    <button type="button" class="close pull-right " data-dismiss="modal">&times;</button>
                                                    
                                                </div>
                                                <div class="modal-body" style="margin: 0px auto;">
                                                  
                                                   <form class="form-horizontal" role="form">
                                                        <div class="form-group row add">
                                                            <label class="control-label text-danger col-sm-12" id="alert_msg_show" for="alert"> </label>
                                                          
                                                        </div>
                                                        
                                                    </form>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-warning" type="button" data-dismiss="modal">
                                                            <span class="glyphicon glyphicon-remobe"></span>Close
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                             <!--  End Delete Post -->    
@endsection
