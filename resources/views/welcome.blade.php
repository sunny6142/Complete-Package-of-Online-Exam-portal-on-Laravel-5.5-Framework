<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- CSRF Token -->
        <meta id="token" name="token" content="{{ csrf_token() }}">   
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="CodedThemes">
       	<meta name="keywords" content="All Exam Corner, Conduct your online exam, online exam, exam portal, maths exam, IIT online exam, SSC exam, coaching online exam platform, exam corner, allexamcorner, ">
      	<meta name="author" content="Sunny Singh Yadav">

	      <title>All Exam Corner &mdash; Conduct you Exam with Us</title>

    <!-- Bootstrap core CSS -->
    <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
     <!-- Custom fonts for this template -->
    <link href="landing/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="landing/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="landing/css/creative.min.css" rel="stylesheet">
 
  </head>

  <body id="page-top">

    <!--Student Login  - ---------------------------- -->
    <div class="modal fade" id="studentlogin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
            <h4><span class="glyphicon glyphicon-lock"></span>Student Login</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
    
          <form role="form">
            <div class="form-group hidden">
              <span class="alert-danger " id="error_msg"></span>
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Student Id</label>
              <input type="text" class="form-control" id="loginstudent_id" name="loginstudent_id" placeholder="Enter student Id">
              <span class="help-block hidden" id="error_student_id">
              </span>     
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="loginpassword" name="loginpassword" placeholder="Enter password">
              <span class="help-block hidden" id="error_student_pass">
              </span>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} style="margin-right:15px" >Remember me</label>
            </div>
            </form>
            <button id="std-login" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
        
        </div>
        <div class="modal-footer text-center">
          <!--  <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p> -->
            <span>Forgot password contact your Institute</span>
        </div>
      </div>
      
    </div>
  </div> 
    <!-- EndLogin And Registration - ---------------------------- -->
        
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">All Exam Corner</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
		  @if (Route::has('login'))
                    @auth
					<li class="nav-item">
						<a  class="nav-link js-scroll-trigger"href="{{ url('/home') }}">Home</a>
         		   </li>
                        
                    @else
					<li class="nav-item">
					<a class="nav-link js-scroll-trigger" href="#" data-toggle="modal" data-target="#studentlogin">Student</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="{{ route('admin.login') }}">Institution</a>
					</li>
                        
                        
                    @endauth
            @endif
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Free Trial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Get Your Institution Free App Today</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">All Exam Corner can help you build better Institution using our system analyse your student strength and weakness</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">All Exam Corner has everything you need to start your online Exam and publish in no time! We Provide Free App of your Institution / Organization, It will be Available on PlayStore, free to download, and easy to use.!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Study Material</h3>
              <p class="text-muted mb-0">We Offer to have Study Material in your Website and App in any Language Hindi, English, Bengali.. etc.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Publish</h3>
              <p class="text-muted mb-0">Our Experts will type your Exam and Notes and Publish it in no time.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">We update Our System According to your Need.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Love</h3>
              <p class="text-muted mb-0">We Assured you will love our services. We are working hard to provide you the best service!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
     <!-- <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="landing/img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="landing/img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="landing/img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="landing/img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="landing/img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="landing/img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="landing/img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="landing/img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="landing/img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="landing/img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="landing/img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="landing/img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div> -->
    </section> 

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Get Your Free Trial Today</h2>
        <a class="btn btn-light btn-xl sr-button btn-xl js-scroll-trigger" href="#contact">Contact Us!</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to conduct your next exam with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>7905510609</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:contact@allexamcorner.org">contact@allexamcorner.org</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="landing/vendor/jquery/jquery.min.js"></script>
    <script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="landing/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="landing/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="landing/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="landing/js/creative.min.js"></script>

  <script>
    // Add Question
    $(document).ready(function(){
            
            $("#std-login").click(function(){
              
                $("#std-login").addClass('hidden'); 
                $('#std-login').text(""); 
                $('#std-login').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Processing ...');

                var data = new FormData();

                data.append('student_id', $('input[name=loginstudent_id]').val());
                data.append('password', $('input[name=loginpassword]').val());
                data.append('remember', $('input[name=remember]').val());
                $("#error_msg").text(''); 
                $("#error_msg").addClass('hidden'); 
               $.ajax({
                   type : 'POST',
                   url : '/ajaxstudentlogin',
                   data: data,
                   contentType: false,
                   processData: false,
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                
                   success: function(data) {
                       
                        
                        $('#std-login').text(""); 
                        $('#std-login').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Connecting ...');
                        console.log(data);
                        if(data.errors){
                       //     alert("err");
                            $("#error_msg").removeClass('hidden'); 
                            $('#error_msg').text("credentials are not correct");
                            $('#std-login').text(""); 
                            $('#std-login').append('Login');
                        } else{
                            $('#std-login').text(""); 
                            $('#std-login').append('<i class="fa fa-spinner fa-spin" style="font-size:24px"></i> Redirecting ...');
                            window.location.replace("/home");
                            $('#add_question_msg').text("Question Successfully Added");
                            console.log("ABC");
                        }
                   }
               }).fail(function (jqXHR, textStatus, error) {
                        
                        $('#errorModal').modal('show');
                 });
            });
        });
  </script>
  </body>

</html>
