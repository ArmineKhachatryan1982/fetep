<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">
    {{-- <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>


    <title>Admin Panel</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('admin/css/bootstrap-theme.css') }}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('admin/css/elegant-icons-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{ asset('admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('admin/css/owl.carousel.css') }}" type="text/css">
    <link href="{{ asset('admin/css/jquery-jvectormap-1.2.2.css') }}" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('admin/css/fullcalendar.css') }}">
    <link href="{{ asset('admin/css/widgets.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/style-responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/css/xcharts.min.css') }}" rel=" stylesheet">
    <link href="{{ asset('admin/css/jquery-ui-1.10.4.min.css') }}" rel="stylesheet">
   
    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="{{ asset('/') }}" class="logo">Fetp <span class="lite">Armenia</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">
          
        </div>

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- task notificatoin start -->
               
                <!-- task notificatoin end -->
                <!-- inbox notificatoin start-->
                <li id="mail_notificatoin_bar" class="dropdown" style="display: none;">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope-l"></i>
                        <span class="badge bg-important">5</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 5 new messages</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini.jpg"></span>
                                <span class="subject">
                                    <span class="from">Greg  Martin</span>
                                    <span class="time">1 min</span>
                                    </span>
                                <span class="message">
                                        I really like this admin panel.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini2.jpg"></span>
                                <span class="subject">
                                    <span class="from">Bob   Mckenzie</span>
                                    <span class="time">5 mins</span>
                                    </span>
                                <span class="message">
                                     Hi, What is next project plan?
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini3.jpg"></span>
                                <span class="subject">
                                    <span class="from">Phillip   Park</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                <span class="message">
                                        I am like to buy this Admin Template.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="./img/avatar-mini4.jpg"></span>
                                <span class="subject">
                                    <span class="from">Ray   Munoz</span>
                                    <span class="time">1 day</span>
                                    </span>
                                <span class="message">
                                        Icon fonts are great.
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all messages</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox notificatoin end -->
                <!-- alert notification start-->
                <li id="alert_notificatoin_bar" class="dropdown" style="display: none;">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <i class="icon-bell-l"></i>
                        <span class="badge bg-important">7</span>
                    </a>
                    <ul class="dropdown-menu extended notification">
                        <div class="notify-arrow notify-arrow-blue"></div>
                        <li>
                            <p class="blue">You have 4 new notifications</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-primary"><i class="icon_profile"></i></span>
                                Friend Request
                                <span class="small italic pull-right">5 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-warning"><i class="icon_pin"></i></span>
                                John location.
                                <span class="small italic pull-right">50 mins</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-danger"><i class="icon_book_alt"></i></span>
                                Project 3 Completed.
                                <span class="small italic pull-right">1 hr</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="label label-success"><i class="icon_like"></i></span>
                                Mick appreciated your work.
                                <span class="small italic pull-right"> Today</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">See all notifications</a>
                        </li>
                    </ul>
                </li>
                <!-- alert notification end-->
                <!-- user login dropdown start-->


                {{-- es guest berel em app.bladeic  --}}
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                 @else
                    <li class="dropdown">
                        <a class=" username" href="{{ asset('/users')}}" style="margin-top:8px" >Manage Users</a>
                    
                    </li>
                    <li>
                        <a class="nav-link username" href="{{ asset('/roles')}}" style="margin-top:8px">Manage Role</a>
                    </li>
                    <li class="dropdown">
                    
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="profile-ava">
                                    <img alt="admin" src="{{ asset('/admin/img/avatar1_small.jpg') }}">
                                </span>
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i  class="icon_key_alt"></i>
                                    <p>
                                        Logout
                                    </p>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endguest
                
                
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="/admin/dashbord" href="admin_partnore_add">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <span>Title</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        {{-- <li><a class="" href="{{ route('admin_title')}}">Title </a></li>  --}}
                        {{-- <li><a class="" href="{{ route('admin_title_image') }}">Title images </a></li>  --}}
                        <li><a class="" href="{{ route('admin_title_image_show') }}">Title images show </a></li> 


                
                        
                            
                        


                        
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <span>About</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('admin_about_edit')}}">About Page</a></li> 
                        <li><a class="" href="{{route('admin_aboutindex_edit')}}">About Index</a></li> 
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <span>Our Partners</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('admin_partnore_add')}}">Our Partners</a></li>
                        <li><a class="" href="{{route('admin_partnore_add_page')}}">Create Partners</a></li> 
                        
                    </ul>
                </li>

                 <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <span>Training</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('admin_training_table_show')}}">Training</a></li> 
                        <li><a class="" href="{{route('admin_training_ckeditor')}}">Create Training</a></li> 
                    </ul>
                </li>
                
               
                
                <li class="sub-menu">
                    <a href="javascript:;" class="">

                        <span>New</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('admin_news_and_events')}}">News</a></li>
                        <li><a class="" href="{{route('admin_news_and_events_add')}}">Create News</a></li>
                       
                    </ul>
                </li>
               
               
                <li class="sub-menu">
                    <a href="javascript:;" class="">

                        <span>Cohorts</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{ route('admin_cohort_text_insertform') }}">C text create </a></li>
                        <li><a class="" href="{{ route('cohort_text_all') }}">C text pages </a></li>
                        <li><a class="" href="{{ route('admin_cohort_group_create') }}">C group create </a></li>
                        <li><a class="" href="{{ route('admin_cohort_group_show') }}">C group show </a></li>

                        <!-- <li><a class="" href="{{ route('cohort_first_text_show') }}">C updatetable</a></li>
                        <li><a class="" href="{{ route('admin_cohort_infos_img_text_form') }}">C img & text upload</a></li> -->
{{--     <li><a class="" href="{{ route('admin_cohorts_img_and_text') }}">C img update</a></li>--}}

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" class="">

                        <span>Steering Commitee</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('admin_Steering_Committee')}}">SC updatetable</a></li>
                        <li><a class="" href="{{ route('admin_steering_committe_img_form') }}">SC img upload</a></li>
                        <li><a class="" href="{{ route('admin_steering_committee_image_table_show')}}">SC images  table show</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">

                        <span>Alumni Association</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('admin_Alumni_Association')}}">AA updatetable</a></li>
                        <li><a class="" href="{{route('admin_Alumni_Association_image')}}">AA image</a></li>
                        <li><a class="" href="{{route('admin_Alumni_Association_image_table_show')}}">AA images table show</a></li>
                    </ul>
                    
                  
                </li>
                {{-- <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <span>Contact</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('admin_conatct_edit')}}">Contact </a></li> 
                        
                    </ul>
                </li> --}}

                 <li class="sub-menu">
                    <a href="javascript:;" class="">

                        <span>Footer</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{route('admin_footer_update_form')}}">Footer update</a></li>
                       
                    </ul>
                    
                  
                </li>

               <!--  <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_documents_alt"></i>
                        <span>Home page</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{ route('tableupdatedelete') }}">Home page edit data</a></li>
                        <li><a class="" href="{{ route('adminhomepageshow') }}">Home page insert data</a></li>
                        <li><a class="" href="">Alumni Association </a></li>
                        <li><a class="" href="404.html">404 Error</a></li>
                    </ul>
                </li> -->

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
       @yield('content')
        <div class="text-right">
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
            <!--   //  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </section>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
<script src="{{ asset('admin/js/jquery.js') }}"></script>
<script src="{{ asset('admin/js/jquery-ui-1.10.4.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery-1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/jquery-ui-1.9.2.custom.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
<!-- nice scroll -->
<script src="{{ asset('admin/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.nicescroll.js ') }}"type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{ asset('admin/assets/jquery-knob/js/jquery.knob.js') }}"></script>
<script src="{{ asset('admin/js/jquery.sparkline.js') }}"type="text/javascript"></script>
<script src="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>
<script src="{{ asset('admin/js/owl.carousel.js') }}"></script>
<!-- jQuery full calendar -->
<<script src="{{ asset('admin/js/fullcalendar.min.js') }}"></script>
<!-- Full Google Calendar - Calendar -->
<script src="{{ asset('admin/assets/fullcalendar/fullcalendar/fullcalendar.js') }}"></script>
<!--script for this page only-->
<script src="{{ asset('admin/js/calendar-custom.js') }}"></script>
<script src="{{ asset('admin/js/jquery.rateit.min.js') }}"></script>
<!-- custom select -->
<script src="{{ asset('admin/js/jquery.customSelect.min.j') }}s"></script>
<script src="{{ asset('admin/assets/chart-master/Chart.js') }}"></script>

<!--custome script for all page-->
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<!-- custom script for this page-->
<script src="{{ asset('admin/js/sparkline-chart.js') }}"></script>
<script src="{{ asset('admin/js/easy-pie-chart.js') }}"></script>
<script src="{{ asset('admin/js/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('admin/js/xcharts.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.autosize.min.j') }}s"></script>
<script src="{{ asset('admin/js/jquery.placeholder.min.js') }}"></script>
<script src="{{ asset('admin/js/gdp-data.js') }}"></script>
<script src="{{ asset('admin/js/morris.min.js') }}"></script>
<script src="{{ asset('admin/js/sparklines.js') }}"></script>
<script src="{{ asset('admin/js/charts.js') }}"></script>
<script src="{{ asset('admin/js/jquery.slimscroll.min.js') }}"></script>


<script>
    //knob
    $(function() {
        $(".knob").knob({
            'draw': function() {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function() {
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function() {
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>


</body>

</html>

