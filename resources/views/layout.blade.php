<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:31:57 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>School Managment System </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('/node_modules/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="{{asset('/node_modules/rickshaw/rickshaw.min.css')}}"/>
  <link rel="stylesheet" href="{{asset('/bower_components/chartist/dist/chartist.min.css')}}" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('/css/style.css')}}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{asset('/images/favicon.html')}}" />
</head>
<body class="sidebar-dark">
  <!-- partial:partials/_settings-panel.html -->
  <div class="settings-panel">
    <ul class="nav nav-tabs" id="setting-panel" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="layouts-tab" data-toggle="tab" href="#layouts-section" role="tab" aria-controls="layouts-section" aria-expanded="true"><i class="mdi mdi-settings"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section"><i class="mdi mdi-account"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="close-button" href="#"><i class="mdi mdi-window-close"></i></a>
      </li>
    </ul>
    <div class="tab-content" id="setting-content">
      <div class="tab-pane fade show active" id="layouts-section" role="tabpanel" aria-labelledby="layouts-tab">
        <div class="color-tiles">
          <div class="tiles primary" id="primary-theme"></div>
          <div class="tiles success" id="success-theme"></div>
          <div class="tiles warning" id="warning-theme"></div>
          <div class="tiles danger" id="danger-theme"></div>
          <div class="tiles pink" id="pink-theme"></div>
          <div class="tiles info" id="info-theme"></div>
          <div class="tiles dark" id="dark-theme"></div>
          <div class="tiles light" id="light-theme"></div>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-block mb-4" type="button" id="sidebar-color" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Sidebar Mode
          </button>
          <div class="dropdown-menu" aria-labelledby="sidebar-color">
            <a class="dropdown-item" href="#" id="side-theme-light">Light</a>
            <a class="dropdown-item" href="#" id="side-theme-dark">Dark</a>
          </div>
        </div>
        <div class="dropdown d-none d-md-block">
          <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="Layouts-type" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Layouts
          </button>
          <div class="dropdown-menu" aria-labelledby="Layouts-type">
            <a class="dropdown-item" href="#" id="boxed-layout-view">Boxed</a>
            <a class="dropdown-item" href="#" id="compact-layout-view">Compact menu</a>
            <a class="dropdown-item" href="#" id="icon-only-layout-view">Icon Menu</a>
            <a class="dropdown-item" href="#" id="rtl-layout-view">RTL</a>
            <a class="dropdown-item" href="#" id="hidden-menu-1-layout-view">Hidden Menu 1</a>
            <a class="dropdown-item" href="#" id="hidden-menu-2-layout-view">Hidden Menu 2</a>
          </div>
        </div>
      </div>
      <!-- layout section tabends -->
      <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-tab">
        <ul class="chat-list">
          <li class="list active">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="ofline"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""><span class="online"></span></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
          <li class="list">
            <div class="profile"><img src="http://via.placeholder.com/47x47" alt=""></div>
            <div class="info">
              <p>Thomas Douglas</p>
              <p>Available</p>
            </div>
          </li>
        </ul>
      </div>
      <!-- chat section tabends -->
    </div>
  </div>
   <!-- partial -->
   <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar navbar-light col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{URL::to('admin_dashboard')}}"><img src="" alt="Logo"></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center mr-2" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="btn-group d-none d-sm-block">
          <button type="button" class="btn btn-secondary btn-sm text-muted border-0 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
        <form class="form-inline mt-2 ml-3 mt-md-0 d-none d-sm-block">
          <div class="input-group solid">
            <span class="input-group-addon"><i class="mdi mdi-magnify"></i></span>
            <input type="text" class="form-control">
          </div>
        </form>
        <ul class="navbar-nav ml-lg-auto">
          
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="MailDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-message-outline"></i>
              <span class="count bg-danger">4</span>
            </a>
            <div class="dropdown-menu navbar-dropdown mail-notification" aria-labelledby="MailDropdown">
              <a class="dropdown-item" href="{{URL::to('/viewprofile')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <span class="badge badge-success">&nbsp;</span>
                </div>
                <div class="sender">
                  <p class="Sende-name">View Profile</p>
                
                </div>
              </a>
              <a class="dropdown-item" href="{{URL::to('/setting')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                  
                </div>
                <div class="sender">
                  <p class="Sende-name">Setting</p>
                </div>
              </a>
             

              <a class="dropdown-item" href="{{URL::to('/logout')}}">
                <div class="sender-img">
                  <img src="http://via.placeholder.com/47x47" alt="">
                 
                </div>
                <div class="sender">
                  <p class="Sende-name">Log Out</p>
                </div>
              </a> 

                

              <!-- <div class="dropdown-item" >
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
 -->




             


            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <div class="profile">
              <img src="http://via.placeholder.com/47x47" alt="">
            </div>
            <div class="details">
              <p class="user-name">omar kawser</p>
              <p class="designation">Developer</p>
            </div>
          </div>
          <ul class="nav">
            <!--main pages start-->
            <li class="nav-item nav-category">
              <span class="nav-link">Main</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/allstudent')}}">
                <i class="mdi mdi-gauge menu-icon"></i>
                <span class="menu-title">All Student </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('/addstudent')}}">
                <i class="mdi mdi-puzzle menu-icon"></i>
                <span class="menu-title">Add student</span>
                <span class="badge badge-danger badge-pill ml-auto">New</span>
              </a>
            </li>
        
           

                <!-- Teacher start -->


  
                <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                <i class="mdi mdi-repeat menu-icon"></i>
                <span class="menu-title">Teacher</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="advancedSubmenu">
                <ul class="nav flex-column sub-menu">

                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/addteacher')}}">Add  Teacher</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/allteacher')}}">All Teacher</a>
                  </li>
  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              
            </li>





                <!-- teacher end -->
   
                           <!-- ADD STAFF  -->


                           <!-- <li class="nav-item"> -->

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sidebar_layouts" aria-expanded="false" aria-controls="sidebar_layouts">
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
                <span class="menu-title"> Course </span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="sidebar_layouts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/cse')}}">CSE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/eee')}}">EEE</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/bba')}}">BBA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/mba')}}">MBA</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/se')}}">SE</a>
                  </li>
                </ul>
              </div>
            </li>

                


                                      <!-- EXAM   Start -->

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#layoutsSubmenu" aria-expanded="false" aria-controls="layoutsSubmenu">
                <i class="mdi mdi-arrow-expand-all menu-icon"></i>
                <span class="menu-title">Exam</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>


              <div class="collapse" id="layoutsSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/view_exam')}}">View exam</a>
                  </li>  <a class="nav-link" href="{{URL::to('/set_exam')}}">Set Exam</a>
                  </li>
                  
                </ul>
              </div>
            </li>

                     <!-- EXAM END -->
          


            <!--main pages end-->
            <!--sample pages start-->
                                          <!-- STAFF START -->



            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#authSubmenu" aria-expanded="false" aria-controls="authSubmenu">
                <i class="mdi mdi-lock-outline menu-icon"></i>
                <span class="menu-title">STAFF</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="authSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="samples/login.html">
                      ADD STAFF
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="samples/login-2.html">
                      View STAFF
                    </a>
                  </li>
                </ul>
              </div>
            </li>

                  
                  <!-- STAFF END -->


                                       <!-- Library   START -->
      
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#errorSubmenu" aria-expanded="false" aria-controls="errorSubmenu">
                <i class="mdi mdi-alert-circle-outline menu-icon"></i>
                <span class="menu-title"> Library</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a> 
              <div class="collapse" id="errorSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/addbook')}}">  Add Book  </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/showbook')}}"> Book Show    </a>
                  </li>


                 


                


                  
                </ul>
              </div>
            </li>


                           <!-- Library   END -->



                           <!-- Account Department  start -->

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#generalSubmenu" aria-expanded="false" aria-controls="generalSubmenu">
                <i class="mdi mdi-google-pages menu-icon"></i>
                <span class="menu-title">Account Department</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="generalSubmenu">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/addexpense')}}">
                    Add Expense
                    </a>
                  </li>
                     
                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/accountdashboard')}}">
                      Account Dashboard 
                    </a>
                  </li>


                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/showexpense')}}">
                      Show Expense
                    </a>
                  </li>
                  
              
                  
                  
                  
                  
                  
                </ul>
              </div>
            </li>









                                <br>  </br>



            
            <!--sample pages end-->
            <!--ui features start-->
           
            <!-- ui end -->
            <!-- data rep start-->
           
            <!--data rep end-->
            <!--forms start-->










<!--        
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#advancedSubmenu" aria-expanded="false" aria-controls="advancedSubmenu">
                <i class="mdi mdi-repeat menu-icon"></i>
                <span class="menu-title">Teacher</span>
                <i class="mdi mdi-chevron-down menu-arrow"></i>
              </a>
              <div class="collapse" id="advancedSubmenu">
                <ul class="nav flex-column sub-menu">

                <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/addteacher')}}">Add  Teacher</a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="{{URL::to('/allteacher')}}">All Teacher</a>
                  </li>
  
                </ul>
              </div>
            </li>
            <li class="nav-item">
              
            </li> -->
          
    
         

            <!--forms end-->
            <!--Apps start-->
          
            <!--Apps end-->
            <li class="nav-item">
              <a class="nav-link" href="pages/documentation.html">
                <i class="mdi mdi-file-document-box menu-icon"></i>
                <span class="menu-title">Documentation</span>
              </a>
                   


              



            </li>
          </ul>






        </nav>
        <!-- partial -->
        <div class="content-wrapper">
          <div class="row">
        

              @yield('content')


            </div>
          </div>
         
        
               
          
        
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
      
        <!-- partial -->
      </div>
      <!-- row-offcanvas ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{asset('/node_modules/jquery/dist/jquery.min.js')}} "></script>
  <script src="{{asset('/node_modules/popper.js/dist/umd/popper.min.js')}} "></script>
  <script src="{{asset('/node_modules/bootstrap/dist/js/bootstrap.min.js')}} "></script>
  <script src="{{asset('/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js')}} "></script>
  <!-- endinject -->
 
  <script src="{{asset('/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
  <script src="{{asset('/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
  <script src="{{asset('/js/data-table.js')}}"></script>


  <!-- Plugin js for this page-->
  <script src="{{asset('/node_modules/flot/jquery.flot.js')}} "></script>
  <script src="{{asset('/node_modules/flot/jquery.flot.resize.js')}} "></script>
  <script src="{{asset('/node_modules/flot/jquery.flot.categories.js')}} "></script>
  <script src="{{asset('/node_modules/flot/jquery.flot.pie.js')}} "></script>
  <script src="{{asset('/node_modules/rickshaw/vendor/d3.v3.js')}} "></script>
  <script src="{{asset('/node_modules/rickshaw/rickshaw.min.js')}} "></script>
  <script src="{{asset('/bower_components/chartist/dist/chartist.min.js')}} "></script>
  <script src="{{asset('/node_modules/chartist-plugin-legend/chartist-plugin-legend.js')}} "></script>
  <script src="{{asset('/node_modules/chart.js/dist/Chart.min.js')}} "></script>
  <script src="{{asset('/node_modules/jquery-sparkline/jquery.sparkline.min.js')}} "></script>
  <script src="{{asset('/bower_components/jsgrid/dist/jsgrid.min.js')}} "></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('/js/off-canvas.js')}} "></script>
  <script src="{{asset('/js/hoverable-collapse.js')}} "></script>
  <script src="{{asset('/js/misc.js')}} "></script>
  <script src="{{asset('/js/settings.js')}} "></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('/js/dashboard_1.js')}} "></script>
  <!-- End custom js for this page-->


  <script src="{{asset('/js/js-grid.js')}}"></script>

 <!-- show delete alert box -->

<!-- <script type="text/javascript"  src="{{asset('htpp://cdnjs.cloudflare.com/ajax/lbs/bootbox.js/4.4.0/bootbox.min.js')}}"></script>

<script>
   
   s(document).on("click", "#delete", function(e){

      e.preventDefault();
      var link= $(this).attr("href");
      bootbox.confirm("are you want to delete", function(confirmed){

        if(confirmed){
           window.location.href=link;
        };

      } );

   } );

</script> -->


</body>


<!-- Mirrored from www.urbanui.com/salt/jquery/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2017 12:32:50 GMT -->
</html>
