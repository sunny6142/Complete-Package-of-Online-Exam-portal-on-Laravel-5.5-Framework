@extends('layouts.app')

@section('content')

<style>
  .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
  .toggle.ios .toggle-handle { border-radius: 20px; }
</style>
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
                                                            </div>
                                                           <!-- Publish Exam -->
                                                                @if ($exam_publish[0]->publish == null)
                                                                    <button id="publish1" type="button" class="btn btn-warning" >
                                                                        Publish n
                                                                    </button>
                                                                @elseif ($exam_publish[0]->publish != 'Publish')
                                                                    <button id="publish" type="button" class="btn btn-warning" >
                                                                        Publish
                                                                    </button>
                                                                @else
                                                                    <button id="unpublish" type="button" class="btn btn-warning">
                                                                        UnPublish
                                                                    </button>
                                                                @endif
                                                                <button id="ttrue" onclick ="randomizer(false)"  class="btn btn-success">Randomizer ON</button>
                                                                <button id="tfalse" onclick ="randomizer(true)"  class="btn btn-danger hidden">Randomizer Off</button>
                                                                <script>
                                                                
                                                                    if('{{$exam_publish[0]->random}}' == 1) {
                                                                        $('#ttrue').removeClass('hidden');
                                                                        $('#tfalse').addClass('hidden');
                                                                    } else {
                                                                        $('#tfalse').removeClass('hidden');
                                                                        $('#ttrue').addClass('hidden');
                                                                    }
                                                                </script>
                                                                    
                                                            <br>
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
                                                                <?php $newque = str_replace("'", "\'",$value->question); $newque = str_replace('"', '\"',$newque); ?>
                                                                <?php $option_A = str_replace("'", "\'",$value->option_A); $option_A = str_replace('"', '\"',$option_A); ?>
                                                                <?php $option_B = str_replace("'", "\'",$value->option_B); $option_B = str_replace('"', '\"',$option_B); ?>
                                                                <?php $option_C = str_replace("'", "\'",$value->option_C); $option_C = str_replace('"', '\"',$option_C); ?>
                                                                <?php $option_D = str_replace("'", "\'",$value->option_D); $option_D = str_replace('"', '\"',$option_D); ?>

                                                                <a href="#" onclick="DisplayQuestion('{{ $no-1 }}' , '{{ $value->id }}' , '{{ $newque }}' , '{{ ($option_A) }}' , '{{ $option_B }}' , '{{ $option_C }}' , '{{ $option_D }}' , '{{ $value->marks }}' , '{{ $value->negative_marks }}' , '{{ $value->correct_option }}' , '{{ $value->level }}', '{{ $value->image }}', '{{ $value->image_A }}', '{{ $value->image_B }}', '{{ $value->image_C }}', '{{ $value->image_D }}')"
                                                                 class="show-modal btn btn-info btn-sm" >
                                                                <i class="icofont icofont-eye-alt"></i>
                                                                </a>
                                                                <a  href="#" onclick="EditQuestion('{{ $no-1 }}' , '{{ $value->id }}' , '{{  $newque }}' , '{{ $option_A }}' , '{{ $option_B }}' , '{{ $option_C }}' , '{{ $option_D }}' , '{{ $value->marks }}' , '{{ $value->negative_marks }}' , '{{ $value->correct_option }}' , '{{ $value->level }}', '{{ $value->image }}', '{{ $value->image_A }}', '{{ $value->image_B }}', '{{ $value->image_C }}', '{{ $value->image_D }}')"
                                                                 class="edit-modal btn btn-warning btn-sm" >
                                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                                </a>
                                                                <a  href="#" onclick="Delete_question('{{ $value->id }}')" class="detete-modal btn btn-danger btn-sm">
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
                                                                <div class="col-sm-6 mr-0 pr-0">
                                                                    <input type="text" class="form-control" id="option_A" name="option_A" onkeyup="PreviewA.UpdateA()" placeholder="Enter option A">
                                                                    <p class="option_A_error text-center alert alert-danger hidden"></p>
                                                                    <span id="OptionPreview" class="control-label text-left"></span>
                                                                    <span id="OptionBuffer" class="control-label text-left" ></span>
                                                                    <img id="image_id_A" src="#"  hidden/>
                                                                </div>
                                                                <div class="col-sm-2 m-0 p-0">
                                                                    <div style="overflow:hidden;"> <label class="btn btn-warning"> Upload
                                                                        <input type="file" id="image_A" class="btn btn-warning hidden" onchange="readURL(this,'image_id_A');"></label>
                                                                        <p class="file_C text-center alert alert-danger hidden"></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                          
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="option_B">Option_B :</label>
                                                            <div class="col-sm-6 mr-0 pr-0">
                                                                <input type="text" class="form-control" id="option_B" name="option_B" onkeyup="PreviewB.UpdateB()" placeholder="Enter option B">
                                                                <p class="option_B_error text-center alert alert-danger hidden"></p>
                                                                <span id="OptionBPreview" class="control-label text-left"></span>
                                                                <span id="OptionBBuffer" class="control-label text-left" ></span>
                                                                <img id="image_id_B" src="#"  hidden/>
                                                            </div>
                                                            <div class="col-sm-2 m-0 p-0">
                                                                <div style="overflow:hidden;"> <label class="btn btn-warning"> Upload
                                                                    <input type="file" id="image_B" class="btn btn-warning hidden" onchange="readURL(this,'image_id_B');"></label>
                                                                    <p class="file_C text-center alert alert-danger hidden"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        

                                                        <div class="form-group">
                                                        
                                                            <label class="control-label col-sm-3" for="option_C">Option_C :</label>
                                                            <div class="col-sm-6 mr-0 pr-0">
                                                                <input type="text" class="form-control" id = "option_C" name = "option_C" onkeyup="PreviewC.UpdateC()" placeholder="Enter option C">
                                                                
                                                                <p class="option_C_error text-center alert alert-danger hidden"></p>
                                                                <span id="OptionCPreview" class="control-label text-left"></span>
                                                                <span id="OptionCBuffer" class="control-label text-left" ></span>
                                                                <img id="image_id_C" src="#"  hidden/>
                                                            </div>
                                                            <div class="col-sm-2 m-0 p-0">
                                                                <div style="overflow:hidden;"> <label class="btn btn-warning"> Upload
                                                                    <input type="file" id="image_C" class="btn btn-warning hidden" onchange="readURL(this,'image_id_C');"></label>
                                                                    <p class="file_C text-center alert alert-danger hidden"></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3" for="option_D">Option_D :</label>
                                                            <div class="col-sm-6 mr-0 pr-0">
                                                                <input type="text" class="form-control" id="option_D" name="option_D" onkeyup="PreviewD.UpdateD()" placeholder="Enter option D">
                                                                <p class="option_D_error text-center alert alert-danger hidden"></p>
                                                                <span id="OptionDPreview" class="control-label text-left"></span>
                                                                <span id="OptionDBuffer" class="control-label text-left" ></span>
                                                                <img id="image_id_D" src="#"  hidden/>
                                                            </div>
                                                            <div class="col-sm-2 m-0 p-0">
                                                                <div style="overflow:hidden;"> <label class="btn btn-warning"> Upload
                                                                    <input type="file" id="image_D" class="btn btn-warning hidden" onchange="readURL(this,'image_id_D');"></label>
                                                                    <p class="file_C text-center alert alert-danger hidden"></p>
                                                                </div>
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
                                                        <input type="hidden" disabled class="form-control" id="id_for_question_update" name="id_for_question_update" value="" placeholder="id_for_question_update" required>
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
                                                        <span id="dqi"></span>
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
                                                        <span id="dai"></span>
                                                  </div>
                                                  
                                              </div>

                                              <div class="form-group">
                                                   <label class="col-sm-4 text-right"> Option&nbsp&nbspB&nbsp&nbsp:&nbsp&nbsp</label>
                                                   <div class="col-sm-8">
                                                        <span class="control-label text-left" id="B"></span>
                                                        <span id="dbi"></span>
                                                   </div>
                                              </div>

                                              <div class="form-group">
                                                    <label class="col-sm-4 text-right"> Option&nbsp&nbspC&nbsp&nbsp:&nbsp&nbsp</label>
                                                    <div class="col-sm-8">
                                                            <span class="control-label text-left" id="C"></span>
                                                            <span id="dci"></span>
                                                    </div>
                                              </div>

                                              <div class="form-group">
                                                    <label class="col-sm-4 text-right"> Option&nbsp&nbspD&nbsp&nbsp:&nbsp&nbsp</label>
                                                    <div class="col-sm-8">
                                                            <span class="control-label text-left" id="D"></span>
                                                            <span id="ddi"></span>
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

                             <!-- Modal -->
                            <div id="del_q_Modal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <div class="modal-header" style="display: block;">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body alert-danger">
                                    <h4 id="del_warning">Warning</h4>
                                      <input id="del_q_id" name="del_q_id" hidden>  
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" id="triger_delete_question" class="btn btn-warning">Delete</button>
                                        <button type="button" id="triger_delete_spinner"  class="btn btn-warning hidden"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>
                                        <button class="btn btn-warning" id="close_del_model" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>

                                </div>
                            </div>

                             <!-- Randomizer -->
                             <div id="rand_Modal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                    <div class="modal-header" style="display: block;">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body alert-danger">
                                    <h5 id="ran_warning">Randomizer Will Shuffle Question Randomly For Student</h5>
                                    <input id="random_put_status" hidden name="random_put_status">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" onclick="call_rand()" id="triger_Randomize_off" class="btn btn-warning">Off</button>
                                        <button type="button" onclick="call_rand()" id="triger_Randomize_on" class="btn btn-success">On</button>
                                        <button type="button" id="triger_Randomize_spinner"  class="btn btn-warning hidden"><i class="fa fa-spinner fa-spin" style="font-size:24px"></i></button>
                                        <button class="btn btn-warning" id="close_Randomize_model" data-dismiss="modal">Close</button>
                                    </div>
                                    </div>

                                </div>
                            </div>
<script>

function Delete_question(id){
           // console.log(d.fee);
        $("#triger_delete_question").removeClass('hidden'); 
        $('#del_q_id').val('');
        $('#del_q_Modal').modal('show');
        $('.modal-title').text('Warning');
        $('#del_warning').text('Are you sure you want to delete this question?');
        $('#del_q_id').val(id);
}

                                                                
    function randomizer(element) {
                                                                        
        $('#rand_Modal').modal("show");    
        $('#random_put_status').val(element);
        $("#triger_Randomize_spinner").addClass('hidden');                                                                 
        if(!element)
        {
            $('#triger_Randomize_off').removeClass('hidden');
            $('#triger_Randomize_on').addClass('hidden');
         //    document.getElementById("toggle_") = false;
        //    element.checked = false;
       // $('#toggle_').bootstrapToggle('off')
        }
        else
        {
            $('#triger_Randomize_on').removeClass('hidden');
            $('#triger_Randomize_off').addClass('hidden');
         //   document.getElementById("toggle_") = true;
        //    element.checked = true;  
        }                                                                 
                                                                    //        $('#toggle_').prop('checked', false).change();                                               
    }

//Add Randomizer

            function call_rand() {
              
            $("#triger_Randomize_on").addClass('hidden'); 
            $("#triger_Randomize_off").addClass('hidden'); 
            $("#triger_Randomize_spinner").removeClass('hidden'); 

               $.ajax({
                   type : 'POST',
                   url : '/QuestionRandom',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data :{
                    'examcode':'{{$id}}',
                    'random': $('input[name=random_put_status]').val(),
                    },
                   success: function(data){
                          $("#triger_Randomize_spinner").addClass('hidden'); 
                        if( $('#random_put_status').val() == 'true') {
                            $("#ran_warning").text('Randomizer Successfully turned ON');  
                            
                            $("#tfalse").addClass('hidden'); 
                            $("#ttrue").removeClass('hidden');
                        }else{
                            $("#ran_warning").text('Randomizer Successfully turned OFF');
                            $("#ttrue").addClass('hidden'); 
                            $("#tfalse").removeClass('hidden'); 
                        }
                   }
               })
            }
     

//Delete Question
$(document).ready(function(){
            $("#triger_delete_question").click(function(){
              
                $("#triger_delete_question").addClass('hidden'); 
                $("#triger_delete_spinner").removeClass('hidden'); 
                console.log($("#del_q_id").val())
               $.ajax({
                   type : 'POST',
                   url : '/RemoveQuestion',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data :{
                    'id': $('input[name=del_q_id]').val(),
                    },

                   success: function(data){
                        $("#close_del_model").removeClass('hidden'); 
                        $("#triger_delete_spinner").addClass('hidden'); 
                        console.log('ABCD',$('.student'+$('.id').val()));
                        $('.student'+$('#del_q_id').val()).remove();      
                        $('#del_warning').text('Question Successfully Deleted');              
                    //    $('#dmsg').text("Student Record Successfully Deleted");
                        $('#triger_delete_question').modal('hide');
                   }
               })
            });
        });

 // Publish
 $(document).ready(function(){
            $("#publish1").click(function(){     
                $('#publish1').text(""); 
                $('#publish1').append('<i class="fa fa-spinner fa-spin" style="font-size:10px"></i> Processing ...');

                var data = new FormData();
               
                var p = 'Publish';
                data.append('Publish', p);
                data.append('examcode', '{{$id}}');
               $.ajax({
                   type : 'POST',
                   url : '/publish',
                   data: data,
                   contentType: false,
                   processData: false,
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                
                   success: function(data) {
                       
                        $('#publish1').text(""); 
                        $('#publish1').append('<i class="fa fa-spinner fa-spin" style="font-size:10px"></i> Connecting ...');
                  //      console.log(data);
                        if(data.errors){
                            alert("Service Interrupted Server Fault!!!")
                       
                        } else{
                            $('#publish1').text(""); 
                            $('#publish1').append('Published');
                        //    $('#publish1').addClass("hidden");
                            
                        }
                   }
               }).fail(function (jqXHR, textStatus, error) {
                      $('#publish1').text(""); 
                      $('#publish1').append('Publish');
                      alert("Service Interrupted Server Fault!!!");
                 });
            });
        });
  </script>

<script>
$(document).ready(function(){
           
            $("#publish").click(function(){     
                $('#publish').text(""); 
                $('#publish').append('<i class="fa fa-spinner fa-spin" style="font-size:10px"></i> Processing ...');

                var data = new FormData();
               
                var p = 'Publish';
                data.append('Publish', p);
                data.append('examcode', '{{$id}}');
               $.ajax({
                   type : 'POST',
                   url : '/publish',
                   data: data,
                   contentType: false,
                   processData: false,
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                
                   success: function(data) {
                       
                        $('#publish').text(""); 
                        $('#publish').append('<i class="fa fa-spinner fa-spin" style="font-size:10px"></i> Connecting ...');
                  //      console.log(data);
                        if(data.errors){
                            alert("Service Interrupted Server Fault!!!")
                       
                        } else{
                            $('#publish').text(""); 
                            $('#publish').append('Published');
                        //    $('#publish1').addClass("hidden");
                            
                        }
                   }
               }).fail(function (jqXHR, textStatus, error) {
                      $('#publish').text(""); 
                      $('#publish').append('Publish');
                      alert("Service Interrupted Server Fault!!!");
                 });
            });
        });
  </script>

<script>
$(document).ready(function(){
           
            $("#unpublish").click(function(){     
                $('#unpublish').text(""); 
                $('#unpublish').append('<i class="fa fa-spinner fa-spin" style="font-size:10px"></i> Processing ...');

                var data = new FormData();
               
                var p = 'Unpublish';
                data.append('Publish', p);
                data.append('examcode', '{{$id}}');
               $.ajax({
                   type : 'POST',
                   url : '/publish',
                   data: data,
                   contentType: false,
                   processData: false,
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                
                   success: function(data) {
                       
                        $('#unpublish').text(""); 
                        $('#unpublish').append('<i class="fa fa-spinner fa-spin" style="font-size:10px"></i> Connecting ...');
                  //      console.log(data);
                        if(data.errors){
                            alert("Service Interrupted Server Fault!!!")
                       
                        } else{
                            $('#unpublish').text(""); 
                            $('#unpublish').append('Unpublished');
                        //    $('#publish1').addClass("hidden");
                            
                        }
                   }
               }).fail(function (jqXHR, textStatus, error) {
                      $('#unpublish').text(""); 
                      $('#unpublish').append('unpublish');
                      alert("Service Interrupted Server Fault!!!");
                 });
            });
        });
  </script>
  <script>
   function readURL(input, id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                $('#'+id).removeAttr("hidden");
                reader.onload = function (e) {
                    $('#'+id)
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
  </script>
@endsection
