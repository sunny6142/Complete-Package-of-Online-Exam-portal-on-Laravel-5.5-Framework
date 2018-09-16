<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <!-- CSRF Token -->
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'All Exam Corner') }}</title>

    
    <meta name="description" content="All Exam Corner is an online system that allows you to conduct online test, We Support More than 100 Language. conduct exam like Maths, SSC , Bank , PO , RLY , JEE , JE, etc">
    <meta name="keywords" content="AllExamCorner , ALL, Exam, Corner, ExamPortal, Online Exam, Conduct on line Exam for institution, Android, Coaching, Organization Exam, creative app">
    <meta name="author" content="Sunny Singh Yadav">
      
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.jsdelivr.net/fontawesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://formvalidation.io/vendor/formvalidation/css/formValidation.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>




<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.css">
<script src="//cdn.polyfill.io/v2/polyfill.js"></script>                        

<style>
html {
-ms-touch-action: manipulation;
touch-action: manipulation;
}
.html {
-ms-touch-action: manipulation;
touch-action: manipulation;
}
</style>


<script type="text/x-mathjax-config">
  MathJax.Hub.Config({
    showProcessingMessages: false,
    tex2jax: { inlineMath: [['$','$'],['\\(','\\)']] }
  });
</script>
<script type="text/javascript" 
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML">
</script>

<script>
var Preview = {
  delay: 0,        // delay after keystroke before updating
  preview: null,     // filled in by Init below
  buffer: null,      // filled in by Init below
  timeout: null,     // store setTimout id
  mjRunning: false,  // true when MathJax is processing
  mjPending: false,  // true when a typeset has been queued
  oldText: null,     // used to check if an update is needed
  //
  //  Get the preview and buffer DIV's
  //
  Init: function () {
    this.preview = document.getElementById("MathPreview");
    this.buffer = document.getElementById("MathBuffer");
  },
  //
  //  Switch the buffer and preview, and display the right one.
  //  (We use visibility:hidden rather than display:none since
  //  the results of running MathJax are more accurate that way.)
  //
  SwapBuffers: function () {
    var buffer = this.preview, preview = this.buffer;
    this.buffer = buffer; this.preview = preview;
    buffer.style.visibility = "hidden"; buffer.style.position = "absolute";
    preview.style.position = ""; preview.style.visibility = "";
  },
  //
  //  This gets called when a key is pressed in the textarea.
  //  We check if there is already a pending update and clear it if so.
  //  Then set up an update to occur after a small delay (so if more keys
  //    are pressed, the update won't occur until after there has been 
  //    a pause in the typing).
  //  The callback function is set up below, after the Preview object is set up.
  //
  Update: function () {
    if (this.timeout) {clearTimeout(this.timeout)}
    this.timeout = setTimeout(this.callback,this.delay);
  },
  //
  //  Creates the preview and runs MathJax on it.
  //  If MathJax is already trying to render the code, return
  //  If the text hasn't changed, return
  //  Otherwise, indicate that MathJax is running, and start the
  //    typesetting.  After it is done, call PreviewDone.
  //  
  CreatePreview: function () {
    Preview.timeout = null;
    if (this.mjPending) return;
    var text = document.getElementById("MathInput").value;
    if (text === this.oldtext) return;
    if (this.mjRunning) {
      this.mjPending = true;
      MathJax.Hub.Queue(["CreatePreview",this]);
    } else {
      this.buffer.innerHTML = this.oldtext = text;
      this.mjRunning = true;
      MathJax.Hub.Queue(
	["Typeset",MathJax.Hub,this.buffer],
	["PreviewDone",this]
      );
    }
  },
 
  PreviewDone: function () {
    this.mjRunning = this.mjPending = false;
    this.SwapBuffers();
  }
};

Preview.callback = MathJax.Callback(["CreatePreview",Preview]);
Preview.callback.autoReset = true;  // make sure it can run more than once
</script>


<script>
var PreviewA = {
  delayA: 0,         previewA: null,     bufferA: null,      // filled in by Init below
  timeoutA: null,    mjRunningA: false,  mjPendingA: false,  // true when a typeset has been queued
  oldTextA: null,   
 
  InitA: function () {
    this.previewA = document.getElementById("OptionPreview");
    this.bufferA = document.getElementById("OptionBuffer");
  },
  
  SwapBuffersA: function () {
    var bufferA = this.previewA, previewA = this.bufferA;
    this.bufferA = bufferA; this.previewA = previewA;
    bufferA.style.visibility = "hidden"; bufferA.style.position = "absolute";
    previewA.style.position = ""; previewA.style.visibility = "";
  },
 
  UpdateA: function () {
    if (this.timeoutA) {clearTimeout(this.timeoutA)}
    this.timeoutA = setTimeout(this.callback,this.delayA);
  },
   
  CreatePreviewA: function () {
    PreviewA.timeoutA = null;
    if (this.mjPendingA) return;
    var textA = document.getElementById("option_A").value;
    if (textA === this.oldtextA) return;
    if (this.mjRunningA) {
      this.mjPendingA = true;
      MathJax.Hub.Queue(["CreatePreviewA",this]);
    } else {
      this.bufferA.innerHTML = this.oldtextA = textA;
      this.mjRunningA = true;
      MathJax.Hub.Queue(
	["Typeset",MathJax.Hub,this.bufferA],
	["PreviewDoneA",this]
      );
    }
  },
  //
  //  Indicate that MathJax is no longer running,
  //  and swap the buffers to show the results.
  //
  PreviewDoneA: function () {
    this.mjRunningA = this.mjPendingA = false;
    this.SwapBuffersA();
  }
};
//
//  Cache a callback to the CreatePreview action
//
PreviewA.callback = MathJax.Callback(["CreatePreviewA",PreviewA]);
PreviewA.callback.autoReset = true;  // make sure it can run more than once
</script>


<script>
var PreviewB = {
  delayB: 0,         previewB: null,     bufferB: null,      // filled in by Init below
  timeoutB: null,    mjRunningB: false,  mjPendingB: false,  // true when a typeset has been queued
  oldTextB: null,   
 
  InitB: function () {
    this.previewB = document.getElementById("OptionBPreview");
    this.bufferB = document.getElementById("OptionBBuffer");
  },
  
  SwapBuffersB: function () {
    var bufferB = this.previewB, previewB = this.bufferB;
    this.bufferB = bufferB; this.previewB = previewB;
    bufferB.style.visibility = "hidden"; bufferB.style.position = "absolute";
    previewB.style.position = ""; previewB.style.visibility = "";
  },
 
  UpdateB: function () {
    if (this.timeoutB) {clearTimeout(this.timeoutB)}
    this.timeoutB = setTimeout(this.callback,this.delayB);
  },
   
  CreatePreviewB: function () {
    PreviewB.timeoutB = null;
    if (this.mjPendingB) return;
    var textB = document.getElementById("option_B").value;
    if (textB === this.oldtextB) return;
    if (this.mjRunningB) {
      this.mjPendingB = true;
      MathJax.Hub.Queue(["CreatePreviewB",this]);
    } else {
      this.bufferB.innerHTML = this.oldtextB = textB;
      this.mjRunningB = true;
      MathJax.Hub.Queue(
	["Typeset",MathJax.Hub,this.bufferB],
	["PreviewDoneB",this]
      );
    }
  },
  //
  //  Indicate that MathJax is no longer running,
  //  and swap the buffers to show the results.
  //
  PreviewDoneB: function () {
    this.mjRunningB = this.mjPendingB = false;
    this.SwapBuffersB();
  }
};
//
//  Cache a callback to the CreatePreview action
//
PreviewB.callback = MathJax.Callback(["CreatePreviewB",PreviewB]);
PreviewB.callback.autoReset = true;  // make sure it can run more than once
</script>

<script>
var PreviewC = {
  delayC: 0,         previewC: null,     bufferC: null,      // filled in by Init below
  timeoutC: null,    mjRunningC: false,  mjPendingC: false,  // true when a typeset has been queued
  oldTextC: null,   
 
  InitC: function () {
    this.previewC = document.getElementById("OptionCPreview");
    this.bufferC = document.getElementById("OptionCBuffer");
  },
  
  SwapBuffersC: function () {
    var bufferC = this.previewC, previewC = this.bufferC;
    this.bufferC = bufferC; this.previewC = previewC;
    bufferC.style.visibility = "hidden"; bufferC.style.position = "absolute";
    previewC.style.position = ""; previewC.style.visibility = "";
  },
 
  UpdateC: function () {
    if (this.timeoutC) {clearTimeout(this.timeoutC)}
    this.timeoutC = setTimeout(this.callback,this.delayC);
  },
   
  CreatePreviewC: function () {
    PreviewC.timeoutC = null;
    if (this.mjPendingC) return;
    var textC = document.getElementById("option_C").value;
    if (textC === this.oldtextC) return;
    if (this.mjRunningC) {
      this.mjPendingC = true;
      MathJax.Hub.Queue(["CreatePreviewC",this]);
    } else {
      this.bufferC.innerHTML = this.oldtextC = textC;
      this.mjRunningC = true;
      MathJax.Hub.Queue(
	["Typeset",MathJax.Hub,this.bufferC],
	["PreviewDoneC",this]
      );
    }
  },
  //
  //  Indicate that MathJax is no longer running,
  //  and swap the buffers to show the results.
  //
  PreviewDoneC: function () {
    this.mjRunningC = this.mjPendingC = false;
    this.SwapBuffersC();
  }
};
//
//  Cache a callback to the CreatePreview action
//
PreviewC.callback = MathJax.Callback(["CreatePreviewC",PreviewC]);
PreviewC.callback.autoReset = true;  // make sure it can run more than once
</script>



<script>
var PreviewD = {
  delayD: 0,         previewD: null,     bufferD: null,      // filled in by Init below
  timeoutD: null,    mjRunningD: false,  mjPendingD: false,  // true when a typeset has been queued
  oldTextD: null,   
 
  InitD: function () {
    this.previewD = document.getElementById("OptionDPreview");
    this.bufferD = document.getElementById("OptionDBuffer");
  },
  
  SwapBuffersD: function () {
    var bufferD = this.previewD, previewD = this.bufferD;
    this.bufferD = bufferD; this.previewD = previewD;
    bufferD.style.visibility = "hidden"; bufferD.style.position = "absolute";
    previewD.style.position = ""; previewD.style.visibility = "";
  },
 
  UpdateD: function () {
    if (this.timeoutD) {clearTimeout(this.timeoutD)}
    this.timeoutD = setTimeout(this.callback,this.delayD);
  },
   
  CreatePreviewD: function () {
    PreviewD.timeoutD = null;
    if (this.mjPendingD) return;
    var textD = document.getElementById("option_D").value;
    if (textD === this.oldtextD) return;
    if (this.mjRunningD) {
      this.mjPendingD = true;
      MathJax.Hub.Queue(["CreatePreviewD",this]);
    } else {
      this.bufferD.innerHTML = this.oldtextD = textD;
      this.mjRunningD = true;
      MathJax.Hub.Queue(
	["Typeset",MathJax.Hub,this.bufferD],
	["PreviewDoneD",this]
      );
    }
  },
  //
  //  Indicate that MathJax is no longer running,
  //  and swap the buffers to show the results.
  //
  PreviewDoneD: function () {
    this.mjRunningD = this.mjPendingD = false;
    this.SwapBuffersD();
  }
};
//
//  Cache a callback to the CreatePreview action
//
PreviewD.callback = MathJax.Callback(["CreatePreviewD",PreviewD]);
PreviewD.callback.autoReset = true;  // make sure it can run more than once
</script>


<script type="text/javascript">
$(function() {
    $(".chzn-select").chosen();

});
</script>

<style type="text/css">

.chosen-choices {
    border: 1px solid #ccc;
    border-radius: 4px;
    min-height: 34px;
    padding: 6px 12px;
}
.chosenContainer .form-control-feedback {
    /* Adjust feedback icon position */
    right: -15px;
}
.chosenContainer .form-control {
    height: inherit; 
    padding: 0px;
}

.chosen-container{
    min-width: 100% !important;
}
</style>

</head>
<body>

    <!-- NAV ------------------------------------------------------------ -->

    <div id="app">
    
    @guest
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container" style="display: block">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'All Exam Corner') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="nav navbar-nav">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="display: block">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                       <!--     <li><a href="{{ route('register') }}">Register</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
  @else  
     <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                      <!--  <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a> -->
                        <a href="index.html">
                          <!--  <img class="img-fluid" src= '{{ Auth::user()->image }}' alt="Theme-Logo" />  -->
                        {{ Auth::user()->institution_name }}
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-pink"></span>
                                </a>
                            <!--    <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{ asset('assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">John Doe</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{ asset('assets/images/avatar-3.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Joseph William</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{ asset('assets/images/avatar-4.jpg') }}" alt="Generic placeholder image">
                                            <div class="media-body">
                                                <h5 class="notification-user">Sara Soudein</h5>
                                                <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                <span class="notification-time">30 minutes ago</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="{{ asset('assets/images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{ Auth::user()->name }} </span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                  <!--  <li>
                                        <a href="#!">
                                            <i class="ti-settings"></i> Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-user"></i> Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-email"></i> My Messages
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="#">
                                            <i class="ti-lock"></i> Lock Screen
                                        </a>
                                    </li>
                                    <li>
                                       
                                        <a href="/logout"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form1').submit();">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>

                                        <form id="logout-form1" action="/logout" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> 
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-40 img-radius" src="{{ asset('assets/images/avatar-4.jpg')}}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span>{{ Auth::user()->name }} </span>
                                        <span id="more-details">{{ Auth::user()->institution_name }} <i class="ti-angle-down"></i></span>
                                    </div>
                                </div>

                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                         <!--   <a href="#"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a> -->
                                            <a href="/logout"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form2').submit();">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>

                                        <form id="logout-form2" action="/logout" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form> 
                                        </li>
                                    </ul>
                                </div>
                            </div>
                         
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="/admin">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>H</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Home</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="/liststudent">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Students</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="/Exams">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Exams</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                  <!--  <ul class="pcoded-submenu">
                                       
                                        <li class=" ">
                                            <a href="icon-themify.html">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Icon</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                    </ul> -->
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="/StudentResult">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Results</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"> Add New Exam &amp; Student</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="/liststudent">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add New Student</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/Exams" >
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Add New Exam</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Notes &amp; Study Material</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li>
                                    <a href="/comingsoon">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Quick Revision</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/comingsoon">
                                        <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.form-components.main">Study Material</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                
                                
                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other">Send Message &amp; Notification</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu ">
                                    <a href="/comingsoon">
                                        <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">Mobile Message</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <a href="/comingsoon">
                                        <span class="pcoded-micon"><i class="ti-direction-alt"></i><b>M</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.menu-levels.main">App Quick Notification</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                  
                </div> @yield('content')
               
            </div>
        </div>
        </div>
    
    <!-- NAV ---------------------------------------------------------------- -->
    
  
        @endguest
        
    </div>
                                   

<!--
     <!-- Latest compiled and minified CSS --
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled and minified CSS --
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <script type="text/javascript">

        $(document).ready(function(){
            $(".create-model").click(function(){
                $('#create').modal('show');
                $('.form-horizontal').show();
                $('.modal-title').text('Add Student');
            });

            
        });

        $(document).ready(function(){
                $(".addsubject").click(function(){
                $('#addsubject').modal('show');
                $('.form-horizontal').show();
                $('.modal-title').text('Add Subject');
            });

            
        });

        function detailResult($examcode, $userid) {
            $('#resultprocessing').modal('hide');
            $('#Detail_modal').modal('show');
            $('.modal-title').text('Answer Sheet');
            
                $('#show_detail_result_info').text("Processing your request ...");
                $('#show_detail_result_info').append('<div class="alert alert-warning" style="margin-top:40px">'+
                                                 '<strong> <i class="fa fa-spinner fa-spin" ></i> Processing ...</strong>'+
                                                '</div>');
               $.ajax({
                   type : 'POST',
                   url : '/getfulldetailresult',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data :{
                    'examcode': $examcode,
                    'userid' : $userid
                   },

                   success: function(data){
                     $('#show_detail_result_info').text("");
                     var i = 0;

                     var encode = new Object();
                            console.log( data.result)
                            console.log(data.question);
                         

                            for(var val in data.result){
                                encode[data.result[val].ques_id] = [data.result[val].selected_option ,data.result[val].givenmarks ];
                            }

                            for(var val in data.question){
                                i++;
                                console.log(data.question[val]);
                                
                                    var no = 0;
                                    
                                       // if(cal_marks.hasOwnProperty(data.cat[n].subject)) {
                                            no = +no + +1;
                                            $('#show_detail_result_info').append(
                                                '<div class="card alert alert-primary" style="width: 100%;">'+
                                                                                    '<div class="card-body">'+
                                                                                        '<b class="card-title" id="question_info"> Ques no.'+no +" : " +data.question[val].question+'</b>'+
                                                                                        '<table class="table"> <tbody id="response'+data.question[val].id+'"> <tr><td class="tableformat"> Option A</td><td>'+data.question[val].option_A+'</td></tr>'+
                                                                                            '<tr><td class="tableformat">Option B</td><td>'+data.question[val].option_B+'</td></tr>'+
                                                                                            '<tr><td class="tableformat">Option C</td><td>'+data.question[val].option_C+'</td></tr>'+
                                                                                            '<tr><td class="tableformat">Option D</td><td>'+data.question[val].option_D+'</td></tr>'+
                                                                                            '<tr><td class="tableformat">Correct Option : </td><td>'+data.question[val].correct_option+'</td></tr>'+
                                                                                          '</tbody></table>'+
                                                                                    '</div>'+
                                                                                '</div>');
                                            if(encode[data.question[val].id]){ 
                                                if(encode[data.question[val].id][1] > 0) {
                                                      $('#response'+data.question[val].id).append(
                                                                                                    '<tr><td class="tableformat text-success">Your option : </td><td class="text-success">'+encode[data.question[val].id][0]+'</h6>'+
                                                                                                    '<tr><td class="tableformat text-success">Marks Obtained : </td><td class="text-success">'+encode[data.question[val].id][1]+'</h6>'
                                                                                                ) 
                                                } else {
                                                      $('#response'+data.question[val].id).append(
                                                                                                    '<tr><td class="tableformat text-danger">Your option : </td><td class="text-danger">'+encode[data.question[val].id][0]+'</h6>'+
                                                                                                    '<tr><td class="tableformat text-danger">Marks Obtained : </td><td class="text-danger">'+encode[data.question[val].id][1]+'</h6>'
                                                                                                ) 
                                                }
                                            }
                                            else {
                                                $('#response'+data.question[val].id).append('<b class="text-warning">Unattempted<b>')
                                            } 
                                                                                        
                                           
                                       // }
                                
                            }

                           // alert(i); 
                            
                        if(i == 0){
                            $('#show_detail_result_info').text("");
                            $('#show_detail_result_info').append('<div class="alert alert-info" style="margin-top:40px">'+
                                                              '<strong>No Record Found!</strong>'+
                                                        '</div>');
                        }
                        MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
                   }
               }) 
        }
         // Show Result
         function showResult($examcode,$title,$tname,$cat,$time){
    //    alert($examcode);
        //    alert($title);
        //    alert($tname);
        //    alert($cat);
        //    alert($time);
        $("#result_footer").text("");
        $("#result_footer").append('<button type="button" class="btn btn-warning" onclick="detailResult('+$examcode+')">Detail</button>'+
        '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>');
          
        
        $('#resultprocessing').modal('show');
                $('.modal-title').text('Are your sure want to delete');
               
                $('#result_active_process').text("Processing your request ...");
                $('#result_active_process').append('<div class="alert alert-warning" style="margin-top:40px">'+
                                                 '<strong> <i class="fa fa-spinner fa-spin" ></i> Processing ...</strong>'+
                                                '</div>');
               $.ajax({
                   type : 'POST',
                   url : '/getallresult',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data :{
                    'examcode': $examcode
                   },

                   success: function(data){
                     $('#result_active_process').text("");
                     var i = 0;
                     var cal_marks = new Object();
                     var tot_marks = new Object();
                        for (var k in data.result){
                            if (data.result.hasOwnProperty(k)) { 
                                i++;
                              
                                if(tot_marks.hasOwnProperty(data.result[k].student_id)) {
                                    tot_marks[data.result[k].student_id] = tot_marks[data.result[k].student_id] + data.result[k].givenmarks;
                                    
                                }
                                else{
                                    tot_marks[data.result[k].student_id] = data.result[k].givenmarks;
                                   
                                } 
                                if(cal_marks.hasOwnProperty(data.result[k].student_id+data.result[k].subject)) {

                                    cal_marks[data.result[k].student_id+data.result[k].subject] = +cal_marks[data.result[k].student_id+data.result[k].subject] + +data.result[k].givenmarks ;
//                                    console.log(data.result[k].student_id, cal_marks[data.result[k].student_id+data.result[k].subject]); 
                                }
                                else{
                                    cal_marks[data.result[k].student_id+data.result[k].subject] =  data.result[k].givenmarks;
                                   
                                }                          
                            }
                        }

                        var sorted_total_marks = [];
                            for (var k in tot_marks) {
                                sorted_total_marks.push([k, tot_marks[k]]);
                            }

                            sorted_total_marks.sort(function(a, b) {
                                return b[1] - a[1];
                            }); 
                            $('#result_table_header').text("")
                            $('#result_table_header').append("<tr id='result_table_headerrank'> <th>Rank</th> <th>User Id</th></tr>")
                          for(var n in data.cat) {
                            $('#result_table_headerrank').append("<th>"+ data.cat[n].subject+"</th>");
                         
                          }
                          $('#result_table_headerrank').append("<th>Total</th>");
                          var $rank = 0;
                            for(var val in sorted_total_marks){
                                $rank++;
                                if(1){
                                    var no = 0;
                                    $('#result_active_process').append("<tr id='result_active_process"+$rank+"'><td>"+ $rank +"</td><td>"+ sorted_total_marks[val][0] +"</td></tr>");
                                   
                                    for(var n in data.cat) {
                                        if(!cal_marks.hasOwnProperty(sorted_total_marks[val][0]+data.cat[n].subject)) { 
                                            cal_marks[sorted_total_marks[val][0]+data.cat[n].subject] = 0;
                                        }
                                            no = +no + +1;
                                           
                                            $('#result_active_process'+$rank).append("<td>"+cal_marks[sorted_total_marks[val][0]+data.cat[n].subject]+"</td>")
                                           
                                       // }
                                    } 
                                    
                               //     $("#student_rank").text(sorted_total_marks[val][0]);
                               //     $("#student_rank").append($rank);
                                    if(!sorted_total_marks.hasOwnProperty(val)) { 
                                        sorted_total_marks[val][1] = 0;
                                    }
                                    
                                    $('#result_active_process'+$rank).append("<th>"+sorted_total_marks[val][1]+"</th>")
                                    $('#result_active_process'+$rank).append('<button type="button" class="btn btn-warning" onclick="detailResult('+$examcode+',\''+sorted_total_marks[val][0]+'\')">Detail</button>');
                                }
                            }
                           
                        if(i == 0){
                            $('#result_active_process').append('<div class="alert alert-info" style="margin-top:40px">'+
                                                              '<strong>No Record Found!</strong>'+
                                                        '</div>');
                        }
                    
                        if((data.errors)){
                           
                        }else{
                            console.log("ABC");
                        }
                   }
               })
        }  
 // Update Result_list      
 function update_result_list($val) {
              
                     $('#filter_button').text($val);
                    $('#exam_list_up').text("Processing your request ...");
                    $('#exam_list_up').append('<div class="alert alert-warning" style="margin-top:40px">'+
                                                 '<strong> <i class="fa fa-spinner fa-spin" ></i> Processing ...</strong>'+
                                                '</div>');
               $.ajax({
                   type : 'POST',
                   url : '/update_studentresultlist',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data :{
                    'val': $val
                   },

                   success: function(data){
                     $('#exam_list_up').text("");
                     var i = 0;
                        for (var k in data.exam){
                            if (data.exam.hasOwnProperty(k)) { i++;
                                console.log(data.exam[k].category);
                                $('#exam_list_up').append('<div class="col-md-6 col-xl-3">' +
                                                                '<div class="card widget-card-1">' +
                                                                    '<div class="card-block-small">' +
                                                                        '<i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>' +
                                                                        '<span class="text-c-blue f-w-600">Exam Title</span>' +
                                                                        '<h4>'+ data.exam[k].examtitle +'</h4>' +
                                                                        '<div>' +
                                                                            '<span class="f-left m-t-10 text-muted">' +
                                                                                '<button onclick="showResult(\''+data.exam[k].examcode +'\',\''+data.exam[k].examtitle+'\',\''+data.exam[k].tname+'\',\''+ data.exam[k].category+'\',\''+data.exam[k].examtime + '\')"  class="show-modal btn btn-info btn-sm" >' +
                                                                                    '<i class="icofont icofont-eye-alt"></i> Start Exam' +
                                                                                '</button>' +
                                                                            '</span>' +
                                                                        '</div>'+
                                                                    '</div>' +
                                                                '</div>' +
                                                            '</div>')                            
                            }
                        }
                        if(i == 0){
                            $('#exam_list_up').append('<div class="alert alert-info" style="margin-top:40px">'+
                                                              '<strong>No Record Found!</strong>'+
                                                        '</div>');
                        }
                    
                        if((data.errors)){
                           
                        }else{
                            console.log("ABC");
                        }
                   }
               })
            
        }  
    //add_subject_to_db  
    $(document).ready(function(){
            $("#add_subject_to_db").click(function(){  
            $("#add_subject_to_db").addClass('hidden'); 
            $("#add_subject_to_db_spin").removeClass('hidden'); 
            $('#add_subject_msg').text("Processing ... ");
            //          alert($('input[name=subject]').val());
            //         alert($('input[name=examcode]').val());
            //          alert($('input[name=admin_id]').val());
            //          alert($('input[name=admin_email]').val());

               $.ajax({
                   type : 'POST',
                   url : '/Addquestiontodb',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data : {
                    'subject': $('input[name=subject]').val(),
                    'examcode': $('input[name=examcode]').val(),
                    'admin_id': $('input[name=admin_id]').val(),
                    'admin_email': $('input[name=admin_email]').val(),
                    },

                   success: function(data){

                    $("#add_subject_to_db").removeClass('hidden'); 
                    $("#add_subject_to_db_spin").addClass('hidden'); 
                    $('.subject_error').addClass('hidden');

                        if((data.errors)){
                            
                            $('#add_subject_msg').text("Error Encounter !!! ");
                            if((data.errors.subject)) 
                            { 
                                $('.subject_error').removeClass('hidden'); 
                                $('.subject_error').text(data.errors.subject);
                            }
                           
                            else {   $('#add_subject_msg').text("Unknown Error !!! "); }

                        }else{
                            $('.dropdown-subject').append('<a class="dropdown-item" onclick="set_current_subject(\''+ data.subject +'\','+ data.id +')" href="#">'+data.subject+'</a>');
                            $('#add_subject_msg').text("Subject Successfully Added");
                            $('#subject').val('');
                        }
                   }
               })
            });
        });
        $(document).ready(function(){
            $(".show_add_question-model").click(function(){

                if($('#current_subject_id').val() == ''){
                 //   alert("Pls. Add / Select Subject");
                    $('#alert_msg').modal('show');
                    $('.form-horizontal').show();
                    $('.modal-title').text('Warring');
                    $('#alert_msg_show').text('Pls Add / Select Subject');
                   
                    return ;
                }

                $('#MathPreview').text("");
                $('#MathBuffer').text("");
                $('#OptionDPreview').text("");
                $('#OptionCPreview').text("");
                $('#OptionBPreview').text("");
                $('#OptionPreview').text("");
                $("#addquestion").removeClass('hidden'); 
                $('#OptionDBuffer').text("");
                $('#OptionCBuffer').text("");
                $('#OptionBBuffer').text("");
                $('#OptionBuffer').text("");
                $('#show_img').addClass('hidden');
            
                $('#option_A').val('');
                $('#option_B').val('');
                $('#option_C').val('');
                $('#option_D').val('');
                $('#MathInput').val('');
                $('#marks').val('');
                $('#negative_marks').val('0');
                $('#correct_option').val('A');
                $('#level').val('none');

                Preview.Init();
                PreviewA.InitA();
                PreviewB.InitB();
                PreviewC.InitC();
                PreviewD.InitD();
                $('#create_question-model').modal('show');
                $('.form-horizontal').show();
                $('.modal-title').text('Add Question');
            });            
        });

        function set_current_subject($sub , $id) {
            $('#current_subject_id').val($id);
            $('#current_subject_name').val($sub);
            $('#subject_button').text($sub);
        }
        function DisplayQuestion($no , $id, $question, $A ,$B , $C , $D, $m , $nm , $co, $l , $image, $ia, $ib, $ic,$id){
            
            $('#show_selected_question-model').modal('show');
            $('.modal-title').text('Question ');
            
            $('#A').text($A);
            $('#B').text($B);
            $('#C').text($C);
            $('#D').text($D);
            $('#qno').text("Ques no. "+$no +" : ");
            $('#q').text($question);
            $('#M').text($m);
            $('#NM').text($nm);
            $('#CO').text($co);
            $('#L').text($l);
            $('#dqi').text('');
            $img = "images/" + $image;
                if($image)
                {
                  
                    $('#dqi').removeClass('hidden');
                //    $('#show_img').append("<img id=\"ques_image\" src=\"{{ asset('assets/images/avatar-4.jpg')}}\" >");
                    $('#dqi').append("<img class=\"img-responsive center-block\" src=\"{{ asset('aecapp/public/images/')}}" + '/'+$image +"\" width=\"200\" >");
            
                }
            
            $('#dai').text('');
            $img = "images/" + $ia;
                if($ia)
                {
                  
                    $('#dai').removeClass('hidden');
                //    $('#show_img').append("<img id=\"ques_image\" src=\"{{ asset('assets/images/avatar-4.jpg')}}\" >");
                    $('#dai').append("<img class=\"img-responsive center-block\" src=\"{{ asset('aecapp/public/images/')}}" + '/'+$ia +"\" width=\"200\" >");
            
                }
            $('#dbi').text('');
            $img = "images/" + $ib;
                if($ib)
                {
                  
                    $('#dbi').removeClass('hidden');
                //    $('#show_img').append("<img id=\"ques_image\" src=\"{{ asset('assets/images/avatar-4.jpg')}}\" >");
                    $('#dbi').append("<img class=\"img-responsive center-block\" src=\"{{ asset('aecapp/public/images/')}}" + '/'+$ib +"\" width=\"200\" >");
            
                }
            
            $('#dci').text('');
            $img = "images/" + $ic;
                if($ic)
                {
                  
                    $('#dci').removeClass('hidden');
                //    $('#show_img').append("<img id=\"ques_image\" src=\"{{ asset('assets/images/avatar-4.jpg')}}\" >");
                    $('#dci').append("<img class=\"img-responsive center-block\" src=\"{{ asset('aecapp/public/images/')}}" + '/'+$ic +"\" width=\"200\" >");
            
                }
                $('#ddi').text('');
            $img = "images/" + $id;
                if($id)
                {
                  
                    $('#ddi').removeClass('hidden');
                //    $('#show_img').append("<img id=\"ques_image\" src=\"{{ asset('assets/images/avatar-4.jpg')}}\" >");
                    $('#ddi').append("<img class=\"img-responsive center-block\" src=\"{{ asset('aecapp/public/images/')}}" + '/'+$id +"\" width=\"200\" >");
            
                }
        }


        function EditQuestion($no , $id, $question, $A ,$B , $C , $D, $m , $nm , $co, $l , $image, $ima, $imb, $imc,$imd){
            
            $('#MathPreview').text("");
            $('#MathBuffer').text("");
            $('#OptionDPreview').text("");
            $('#OptionCPreview').text("");
            $('#OptionBPreview').text("");
            $('#OptionPreview').text("");

            $('#OptionDBuffer').text("");
            $('#OptionCBuffer').text("");
            $('#OptionBBuffer').text("");
            $('#OptionBuffer').text("");
            $('#show_img').addClass('hidden');

                $('#option_A').val($A);
                $('#option_B').val($B);
                $('#option_C').val($C);
                $('#option_D').val($D);
            //    $('#edit_qno').val("Ques no. "+$no +" : ");
                $('#edit_qno').val("Ques : ");
                $('#MathInput').val($question);
                $('#marks').val($m);
                $('#negative_marks').val($nm);
                $('#correct_option').val($co);
                $('#level').val($l);
                $('#id_for_question_update').val($id);
                $img = "images/" + $image;
                if($image)
                {
                    $('#show_img').text('');
                    $('#show_img').removeClass('hidden');
                //    $('#show_img').append("<img id=\"ques_image\" src=\"{{ asset('assets/images/avatar-4.jpg')}}\" >");
                    $('#show_img').append("<img class=\"img-responsive left-block\" src=\"{{ asset('aecapp/public/images/')}}" + '/'+$image +"\" width=\"200\" >");
            
                }
                
                if($ima)
                {
                    $('#image_id_A').removeAttr("hidden");
                    $('#image_id_A').attr('src', "{{ asset('aecapp/public/images/')}}"+ '/'+$ima).width(150).height(200);
                } else{$('#image_id_A').attr("hidden","true");} 

                if($imb)
                {
                    $('#image_id_B').removeAttr("hidden");
                    $('#image_id_B').attr('src', "{{ asset('aecapp/public/images/')}}"+ '/'+$imb).width(150).height(200);
                } else{$('#image_id_B').attr("hidden","true");} 

                
                if($imc)
                {
                    $('#image_id_C').removeAttr("hidden");
                    $('#image_id_C').attr('src', "{{ asset('aecapp/public/images/')}}"+ '/'+$imc).width(150).height(200);
                } else{$('#image_id_C').attr("hidden","true");} 

                
                if($imd)
                {
                    $('#image_id_D').removeAttr("hidden");
                    $('#image_id_D').attr('src', "{{ asset('aecapp/public/images/')}}"+ '/'+$imd).width(150).height(200);
                } else{$('#image_id_D').attr("hidden","true");} 
            //  $('#ques_image').attr('src','{{ asset('+$img+')}}');

                Preview.Init();
                PreviewA.InitA();
                PreviewB.InitB();
                PreviewC.InitC();
                PreviewD.InitD();
                $("#addquestion").addClass('hidden'); 
                $('#create_question-model').modal('show');
                $('.form-horizontal').show();
                $('.modal-title').text('Add Question');
                $("#updatequestion").removeClass('hidden'); 
        }

        function viewdetil(name ,student_id,admin_id ,created_at ,validity) {
  //          console.log(d.fee);
                $('#show').modal('show');
                $('.modal-title').text('Student Detail');
                $('#view_name').text(name);
                $('#view_student_id').text(student_id);
                $('#view_institution_id').text(admin_id);
                $('#view_created_at').text(created_at);
                $('#view_validity').text(validity);
        }

        function Editdetail(id,name ,student_id){
    //        console.log(d.fee);
                $('#edit').modal('show');
                $('.modal-title').text('Change Password');
                $('#uid').val(id);
                $('#uname').val(name);
                $('#ustudent_id').val(student_id);
        }

        function Delete_user(id, name ,student_id){
           // console.log(d.fee);
                $('#delete_modal').modal('show');
                $('.modal-title').text('Are your sure you want to delete this?');
                $('#delete_id').text(id);
                $('#did').val(id);
                $('#delete_name').text(name);
                $('#delete_student_id').text(student_id);
        }       
// Add Student
        $(document).ready(function(){
            $("#add").click(function(){
              
                $("#add").addClass('hidden'); 
                $("#spin").removeClass('hidden'); 

                var selectednumbers = [];
                $('#category option:selected').each(function(i, selected) {
                    selectednumbers[i] = $(selected).val();
             //       alert( selectednumbers[i]);
                });
                
               $.ajax({
                   type : 'POST',
                   url : 'liststudent',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data :{
                    'student_id': $('input[name=student_id]').val(),
                    'name': $('input[name=name]').val(),
                    'admin_id': $('input[name=admin_id]').val(),
                    'admin_email': $('input[name=admin_email]').val(),
                    'fee':  $('select[name=fee]').val(),
                    'contact':  $('input[name=contact]').val(),
                    'category':  JSON.stringify(selectednumbers),
                    'password': $('input[name=password]').val(),
                    'password_confirmation': $('input[name=password_confirmation]').val(),
                   },

                   success: function(data){

                            
                    $("#add").removeClass('hidden'); 
                    $("#spin").addClass('hidden'); 

                            $('.name_error').addClass('hidden');
                            $('.student_id_error').addClass('hidden');
                            $('.pass_error').addClass('hidden');
                            $('.student_contact_error').addClass('hidden'); 
                        console.log(data.error);
                        if((data.errors)){
                            if((data.errors.student_id)) 
                            { 
                                $('.student_id_error').removeClass('hidden'); 
                                $('.student_id_error').text(data.errors.student_id);
                            }
                            else {  $('.student_id_error').addClass('hidden'); }

                            if((data.errors.name)) 
                            { 
                                $('.name_error').removeClass('hidden'); 
                                $('.name_error').text(data.errors.name);
                            }
                            else {  $('.name_error').addClass('hidden'); }
                           
                            if((data.errors.contact)) 
                            { 
                                $('.student_contact_error').removeClass('hidden'); 
                                $('.student_contact_error').text(data.errors.contact);
                            }
                            else {  $('.student_contact_error').addClass('hidden'); }
                           
                            if((data.errors.password)) 
                            { 
                                $('.pass_error').removeClass('hidden'); 
                                $('.pass_error').text(data.errors.password);
                            }
                            else {  $('.pass_error').addClass('hidden'); }

                        }else{
                            $('#msg').text("Student Successfully Added");
                            $('#name').val('');
                            $('#student_id').val('');
                            $('#password').val('');
                            $('#password_confirmation').val('');
                            console.log("ABC");
                        }
                   }
               })
            });
        });
  

// Add Question
        $(document).ready(function(){
            $("#addquestion").click(function(){
              
                $("#addquestion").addClass('hidden'); 
                $("#add_question_spin").removeClass('hidden'); 
                $('#add_question_msg').text("Processing ...");

                var data = new FormData();

                data.append('question', $('textarea[name=question]').val());
                data.append('option_A', $('input[name=option_A]').val());
                data.append('option_B', $('input[name=option_B]').val(),);
                data.append('option_C', $('input[name=option_C]').val());
                data.append('option_D', $('input[name=option_D]').val());
                data.append('marks', $('input[name=marks]').val());
                data.append('category', $('input[name=category]').val());
                data.append('examcode', $('input[name=examcode]').val());
                data.append('subject_code', $('input[name=current_subject_id]').val());
                data.append('subject', $('input[name=current_subject_name]').val());
                data.append('image', $('#image')[0].files[0]);
                data.append('imageA', $('#image_A')[0].files[0]);
                data.append('imageB', $('#image_B')[0].files[0]);
                data.append('imageC', $('#image_C')[0].files[0]);
                data.append('imageD', $('#image_D')[0].files[0]);
                data.append('negative_marks', $('input[name=negative_marks]').val());
                data.append('admin_email', $('input[name=admin_email]').val());
                data.append('admin_id', $('input[name=admin_id]').val());
                data.append('correct_option', $('select[name=correct_option]').val());
                data.append('level', $('select[name=level]').val());
            
           //     var postData = new FormData($("#modal_form_id")[0]);   
           //     postData.append('subject_code': $('input[name=current_subject_id]').val(),
           //     'subject': $('input[name=current_subject_name]').val(),);       
               $.ajax({
                   type : 'POST',
                   url : '/addquestion',
                   data: data,
                   contentType: false,
                   processData: false,
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                /*   data : {
                    'question': $('textarea[name=question]').val(),
                    'option_A': $('input[name=option_A]').val(),
                    'option_B': $('input[name=option_B]').val(),
                    'option_C': $('input[name=option_C]').val(),
                    'option_D': $('input[name=option_D]').val(),
                    'marks': $('input[name=marks]').val(),
                    'category': $('input[name=category]').val(),
                    'examcode': $('input[name=examcode]').val(),
                    'subject_code': $('input[name=current_subject_id]').val(),
                    'subject': $('input[name=current_subject_name]').val(),
                    'image': $('#image')[0].files[0],
                    'negative_marks': $('input[name=negative_marks]').val(),
                    'admin_email': $('input[name=admin_email]').val(),
                    'admin_id': $('input[name=admin_id]').val(),
                    'correct_option':  $('select[name=correct_option]').val(),
                    'level':  $('select[name=level]').val(),
                    },*/
            //        processData: false,
                   success: function(data){
                        $("#addquestion").removeClass('hidden'); 
                        $("#add_question_spin").addClass('hidden'); 
                        
                        $('.question_error').addClass('hidden');
                        $('.option_A_error').addClass('hidden');
                        $('.option_B_error').addClass('hidden');
                        $('.option_C_error').addClass('hidden');
                        $('.option_D_error').addClass('hidden');
                        $('.marks_error').addClass('hidden');
                        $('.negative_marks_error').addClass('hidden');

                        if((data.errors)){
                           
                            if((data.errors.question)) 
                            { 
                                $('.question_error').removeClass('hidden'); 
                                $('.question_error').text(data.errors.question);
                            }
                            else if((data.errors.option_A)) 
                            { 
                                $('.option_A_error').removeClass('hidden'); 
                                $('.option_A_error').text(data.errors.option_A);
                            }

                            else if((data.errors.option_B)) 
                            { 
                                $('.option_B_error').removeClass('hidden'); 
                                $('.option_B_error').text(data.errors.option_B);
                            }
                            else if((data.errors.option_C)) 
                            { 
                                $('.option_C_error').removeClass('hidden'); 
                                $('.option_C_error').text(data.errors.option_C);
                            }
                            else if((data.errors.option_D)) 
                            { 
                                $('.option_D_error').removeClass('hidden'); 
                                $('.option_D_error').text(data.errors.option_D);
                            }
                            
                            else if((data.errors.marks)) 
                            { 
                                $('.marks_error').removeClass('hidden'); 
                                $('.marks_error').text(data.errors.marks);
                            }
                            else if((data.errors.negative_marks)) 
                            { 
                                $('.negative_marks_error').removeClass('hidden'); 
                                $('.negative_marks_error').text(data.errors.negative_marks);
                            }
                            else {    $('#add_question_msg').text("Error : "+data.errors);}

                        }else{
                            $('#add_question_msg').text("Question Successfully Added");
                            $('#MathInput').val('');
                            $('#option_A').val('');
                            $('#option_B').val('');
                            $('#option_C').val('');
                            $('#option_D').val('');
                            $('#marks').val('');
                        //    $('#negative_marks').val('');
                            $('#image').val('');
                            $('#image_A').val('');
                            $('#image_B').val('');
                            $('#image_C').val('');
                            $('#image_D').val('');
                            $('#correct_option').val('A');
                            console.log("ABC");
                        }
                   }
               })
            });
        });

// Update Question
$(document).ready(function(){
            $("#updatequestion").click(function(){
              
                $("#updatequestion").addClass('hidden'); 
                $("#add_question_spin").removeClass('hidden'); 
                $('#add_question_msg').text("Processing ...");

                var data = new FormData();

                data.append('question', $('textarea[name=question]').val());
                data.append('option_A', $('input[name=option_A]').val());
                data.append('option_B', $('input[name=option_B]').val(),);
                data.append('option_C', $('input[name=option_C]').val());
                data.append('option_D', $('input[name=option_D]').val());
                data.append('marks', $('input[name=marks]').val());
                data.append('category', $('input[name=category]').val());
                data.append('examcode', $('input[name=examcode]').val());
                data.append('subject_code', $('input[name=current_subject_id]').val());
                data.append('subject', $('input[name=current_subject_name]').val());
                data.append('image', $('#image')[0].files[0]);
                data.append('imageA', $('#image_A')[0].files[0]);
                data.append('imageB', $('#image_B')[0].files[0]);
                data.append('imageC', $('#image_C')[0].files[0]);
                data.append('imageD', $('#image_D')[0].files[0]);
                data.append('negative_marks', $('input[name=negative_marks]').val());
                data.append('admin_email', $('input[name=admin_email]').val());
                data.append('admin_id', $('input[name=admin_id]').val());
                data.append('correct_option', $('select[name=correct_option]').val());
                data.append('level', $('select[name=level]').val());
                data.append('id_for_question_update', $('input[name=id_for_question_update]').val());
              
               $.ajax({
                   type : 'POST',
                   url : '/updatequestion',
                   data: data,
                   contentType: false,
                   processData: false,
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
               
                   success: function(data){
                        $("#updatequestion").removeClass('hidden'); 
                        $("#add_question_spin").addClass('hidden'); 
                        
                        $('.question_error').addClass('hidden');
                        $('.option_A_error').addClass('hidden');
                        $('.option_B_error').addClass('hidden');
                        $('.option_C_error').addClass('hidden');
                        $('.option_D_error').addClass('hidden');
                        $('.marks_error').addClass('hidden');
                        $('.negative_marks_error').addClass('hidden');

                        if((data.errors)){
                           
                            if((data.errors.question)) 
                            { 
                                $('.question_error').removeClass('hidden'); 
                                $('.question_error').text(data.errors.question);
                            }
                            else if((data.errors.option_A)) 
                            { 
                                $('.option_A_error').removeClass('hidden'); 
                                $('.option_A_error').text(data.errors.option_A);
                            }

                            else if((data.errors.option_B)) 
                            { 
                                $('.option_B_error').removeClass('hidden'); 
                                $('.option_B_error').text(data.errors.option_B);
                            }
                            else if((data.errors.option_C)) 
                            { 
                                $('.option_C_error').removeClass('hidden'); 
                                $('.option_C_error').text(data.errors.option_C);
                            }
                            else if((data.errors.option_D)) 
                            { 
                                $('.option_D_error').removeClass('hidden'); 
                                $('.option_D_error').text(data.errors.option_D);
                            }
                            
                            else if((data.errors.marks)) 
                            { 
                                $('.marks_error').removeClass('hidden'); 
                                $('.marks_error').text(data.errors.marks);
                            }
                            else if((data.errors.negative_marks)) 
                            { 
                                $('.negative_marks_error').removeClass('hidden'); 
                                $('.negative_marks_error').text(data.errors.negative_marks);
                            }
                            else {    $('#add_question_msg').text("Error : "+data.errors);}

                        }else{
                            $('#add_question_msg').text("Question Successfully Added");
                            $('#MathInput').val('');
                            $('#option_A').val('');
                            $('#option_B').val('');
                            $('#option_C').val('');
                            $('#option_D').val('');
                            $('#marks').val('');
                        //    $('#negative_marks').val('');
                            $('#image').val('');
                            $('#image_A').val('');
                            $('#image_B').val('');
                            $('#image_C').val('');
                            $('#image_D').val('');
                            $('#correct_option').val('A');
                          //  window.location.reload();
                            console.log("ABC");
                        }
                   }
               })
            });
        });

    //Update Student Password
        $(document).ready(function(){
            $("#update").click(function(){  
            $("#update").addClass('hidden'); 
            $("#upspin").removeClass('hidden'); 

               $.ajax({
                   type : 'POST',
                   url : 'ChangePassword',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data :{
                    'id': $('input[name=uid]').val(),
                    'name': $('input[name=uname]').val(),
                    'student_id': $('input[name=ustudent_id]').val(),
                    'password': $('input[name=upassword]').val(),
                    'password_confirmation': $('input[name=upassword_confirmation]').val(),
                   },

                   success: function(data){

                    $("#update").removeClass('hidden'); 
                    $("#upspin").addClass('hidden'); 

                            $('.uname_error').addClass('hidden');
                            $('.ustudent_id_error').addClass('hidden');
                            $('.upass_error').addClass('hidden');

                        if((data.errors)){
                            
                            if((data.errors.student_id)) 
                            { 
                                $('.ustudent_id_error').removeClass('hidden'); 
                                $('.ustudent_id_error').text(data.errors.student_id);
                            }
                            else {  $('.ustudent_id_error').addClass('hidden'); }

                            if((data.errors.name)) 
                            { 
                                $('.uname_error').removeClass('hidden'); 
                                $('.uname_error').text(data.errors.name);
                            }
                            else {  $('.uname_error').addClass('hidden'); }

                            if((data.errors.password)) 
                            { 
                                $('.upass_error').removeClass('hidden'); 
                                $('.upass_error').text(data.errors.password);
                            }
                            else {  $('.upass_error').addClass('hidden'); }

                        }else{
                            $('#umsg').text("Student Successfully ");
                        //    $('#uname').val('');
                        //    $('#ustudent_id').val('');
                        //    $('#upassword').val('');
                        //    $('#upassword_confirmation').val('');
                        
                            console.log("ABC");
                        }
                   }
               })
            });
        });

    //Delete Student
        $(document).ready(function(){
            $("#delete").click(function(){
              
                $("#delete").addClass('hidden'); 
                $("#dspin").removeClass('hidden'); 
                console.log($("#delete_id").val())
               $.ajax({
                   type : 'POST',
                   url : 'RemoveStudent',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data :{
                    'id': $('input[name=did]').val(),
                    },

                   success: function(data){

                      
                        $("#delete").removeClass('hidden'); 
                        $("#dspin").addClass('hidden'); 
                        console.log( 'ABCD',$('.student'+$('.id').val()));
                        $('.student'+$('#did').val()).remove();
                    
                    //    $('#dmsg').text("Student Record Successfully Deleted");
                        $('#delete').modal('hide');
                   }
               })
            });
        });
    </script>

<script type="text/javascript">
    function create_new_exam(){
        $('#add_new_exam').modal('show');
        $('.modal-title').text('Create Exam');
    }
</script>

<script type="text/javascript">
   $(document).ready(function(){
            $("#addexam").click(function(){

                $("#addexam").addClass('hidden'); 
                $("#aespin").removeClass('hidden'); 
               $.ajax({
                   type : 'POST',
                   url : 'addexam',
                   beforeSend: function(xhr){xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));},
                   data :{
                        'tname': $('input[name=tname]').val(),
                        'examtitle': $('input[name=examtitle]').val(),
                        'admin_id': $('input[name=admin_id]').val(),
                        'admin_email': $('input[name=admin_email]').val(),
                        'category':  $('select[name=category]').val(),
                        'examtime':  $('input[name=examtime]').val(),
                    },

                   success: function(data){
                    console.log(data);
                            $('.tname_error').addClass('hidden');
                            $('.examtitle_error').addClass('hidden');
                            $('.examtime_error').addClass('hidden');

                        if((data.errors)){
                           
                            $("#addexam").removeClass('hidden'); 
                            $("#aespin").addClass('hidden'); 

                            if((data.errors.tname)) 
                            { 
                                $('.tname_error').removeClass('hidden'); 
                                $('.tname_error').text(data.errors.tname);
                            }
                            
                            else if((data.errors.examtitle)) 
                            { 
                                $('.examtitle_error').removeClass('hidden'); 
                                $('.examtitle_error').text(data.errors.examtitle);
                            }

                            else if((data.errors.examtime)) 
                            { 
                                $('.examtime_error').removeClass('hidden'); 
                                $('.examtime_error').text(data.errors.examtime);
                            }
                          
                            
                            else {
                                $('#create_exam_error_msg').text("Unknown Error Encounter! Fill detail correctly");
                           
                            }
                           
                        }else{
                            $('#create_exam_error_msg').text("Exam Added, Redirecting...");
                            $('#aespin').text("Redirecting ....");
                          //  alert(data.examcode);
                            $('#name').val('');
                            $('#student_id').val('');
                            $('#password').val('');
                            $('#password_confirmation').val('');
                            
                            window.location.href = "/addquestion/examcode/"+data.examcode + "/"+ data.examtitle+ "/"+ data.tname+ "/"+ data.category+ "/"+ data.examtime;
                        }
                   }
               })
            });
        });
</script>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        <!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{asset('assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{asset('assets/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{asset('assets/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{asset('assets/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{asset('assets/pages/todo/todo.js')}} "></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('assets/pages/dashboard/custom-dashboard.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{asset('assets/js/SmoothScroll.js')}}"></script>
<script  type="text/javascript" src="{{asset('assets/js/pcoded.min.js')}}"></script>
<script  type="text/javascript" src="{{asset('assets/js/demo-12.js')}}"></script>
<script  type="text/javascript" src="{{asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

<script type="text/javascript">

$(document).ready(function () {
    var $window = $(window);
    var nav = $('.fixed-button');
        $window.scroll(function(){
            if ($window.scrollTop() >= 200) {
            nav.addClass('active');
        }
        else {
            nav.removeClass('active');
        }
    });
});

</script>


<script src="//cdnjs.cloudflare.com/ajax/libs/chosen/1.1.0/chosen.jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    
    $('#chosenForm')
        .find('[name="colors"]')
            .chosen({
                width: '100%',
                inherit_select_classes: true
            })
            // Revalidate the color when it is changed
            .change(function(e) {
                $('#chosenForm').formValidation('revalidateField', 'colors');
            })
            .end()
        .formValidation({
            framework: 'bootstrap',
            excluded: ':disabled',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                colors: {
                    validators: {
                        callback: {
                            message: 'Please choose 2-4 color you like most',
                            callback: function(value, validator, $field) {
                                // Get the selected options
                                var options = validator.getFieldElements('colors').val();
                                return (options != null && options.length >= 2 && options.length <= 4);
                            }
                        }
                    }
                }
            }
        });
});
</script>

       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
</body>
</html>
