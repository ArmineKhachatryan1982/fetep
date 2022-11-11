<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    
    <meta name="author" content="WEBEX">
    <meta name="Robots" content="INDEX,FOLLOW">
    <title>FETP Armenia</title>
    
{{--     
    if(app()->getLocale() == "en"){
    <title>FETP Armenia I Epidemiology Training Programs</title>
    }else{
        <title>FETP Armenia համաճարակաբանության դասընթացներ</title>
    }  --}}
    
    

    <link rel="shortcut icon" href="{{ asset('img/img_header') }}/{{$Footer->logo_name}}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- font icon -->
    <!--//<link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet" />-->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- slide link start -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- slide-link end -->

     <style type="text/css">
             font-family: BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
             body{
               /* font-family:Roboto;*/
             }
             .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
     </style>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')

</head>
<body>
    <header>
        {{--    header first start--}}
        <div class="header_first">
            <div class="container">
                <div class="d-flex  justify-content-between align-items-center  search_section">
                     <div id="logo"><img id="logo" onclick="window.location.href = '/{{app()->getLocale()}}';" src="{{ asset('img/img_header') }}/{{$Footer->logo_name}}"></div> 
                   <!--  <div  id="logo" ></div> -->
                    <div class="d-flex lang">
                        <ul class="d-flex" >
                           <?php 
                           $patham = "/am";
                               $pathen = "/en";
                               if(app()->getLocale() == "am"){
                                $patham =  $_SERVER['REQUEST_URI'];    
                                $pathen = str_replace("/am","/en", $_SERVER['REQUEST_URI']);
                               }
                               if(app()->getLocale() == "en"){
                                $patham = str_replace("/en","/am", $_SERVER['REQUEST_URI']);
                                $pathen = $_SERVER['REQUEST_URI'];
                               }
                               
                                ?>
                           <li class="d-inline p-2"><a href="<?php echo $patham;?>
                           "class=" text-white">ARM</a></li>
                           <li class="d-inline p-2"><a href="<?php echo $pathen;?>" class=" text-white">ENG</a></li>
                       </ul>
                       <div class="position-relative search_div ">
                        <input class="form-control " oninput="finde(this.value)" onclick="f1()" type="search" id="Search" list="browsers" name="browser"  aria-label="Search">
                        <div class="dropdown-content" style="overflow:auto;height:201px" id="browsers">
                            
                        </div>
                        <img class="py-1 pl-2" id="Searchimg" src="{{ asset('img/img_footer/Vector.svg') }}">
                   <script type="text/javascript">
                     function f1() {
  document.getElementById("Searchimg").style.display = "none";}
                    function finde(finde){
                    var doNotShow= document.getElementById('Searchimg');
                    var search= document.getElementById("Search").value;
                     console.log(search.length);
                     if(search.length > 0){
                         doNotShow.style.display = 'none';
                         document.getElementById("browsers").style.display = 'none';
                     } else{
                         doNotShow.style.display = 'block';
                     }
                        var k ="{{ csrf_token() }}";
                        var lang = "{{app()->getLocale()}}";
                    $.ajaxSetup({
                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"/finde",data:{_token:k,finde:finde,lang:lang},success: function(data){
                                if(data ){
                                     if(search.length > 0){
                                    document.getElementById("browsers").style.display ='block';
                                    document.getElementById("browsers").innerHTML =data;
                                    console.log(data);
                                }else{
                                    document.getElementById("browsers").style.display ='none';
                                }
                                }

                            }
                        });
                  }
                   </script>     
                 
                  
              
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{--    header first start--}}

<!-- menu start -->
<div class="header_second">
    <div class="container" >
      
            <nav class="navbar navbar-expand-lg navbar-light  navbar_nav">
                <div>
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler text-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon text-white"></span>
                    </button>

                    <div class="collapse navbar-collapse " id="navbarNavDropdown">
                        <ul class="navbar-nav d-flex  justify-content-around" id="mynav">
                           
                            <li class="nav-item text-center @if(isset($about_us)){{  $about_us }}@endif">
                                <a class="nav-link text-white" href="{{ asset( app()->getLocale().'/about') }}">@lang('main.about_us')</a>
                            </li>
                            <li class="nav-item  text-center @if(isset($ourpartners)){{ $ourpartners }}@endif">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/our_partners') }}">@lang('main.our_partners')</a>
                            </li>
                            
                            <li class="nav-item text-center @if(isset( $training)){{ $training }}@endif"  >
                                {{-- <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/training_programs') }}">@lang('main.training_programs')</a> --}}
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/training_programs') }}">@lang('main.training_programs')</a>
                            </li>
                            <li class="nav-item text-center @if(isset( $news)){{ $news }}@endif">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/news') }}">@lang('main.news_media')</a>
                            </li>
                            <li class="nav-item text-center @if(isset( $cohorts)){{ $cohorts }}@endif">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/cohorts') }}">@lang('main.cohorts')</a>
                            </li>
                            <li class="nav-item text-center @if(isset($steering)){{ $steering }}@endif ">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/steeringcommittee') }}">@lang('main.steering_committee')</a>
                            </li>
                            <li class="nav-item text-center @if(isset($alumini)){{ $alumini }}@endif">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/aluminiassciation') }}">@lang('main.alumni_association')</a>
                            </li>
                            <li class="nav-item text-center @if(isset($contact)){{ $contact }} @endif">
                                <a class="nav-link text-white" href="{{ asset(app()->getLocale().'/contactus') }}">@lang('main.contacts_us')</a>
                            </li>

                        </ul>
                    </div>
                </div>
    </div>
</div>
<!-- menu end -->
</header>
<section id="section_index">
    <!-- main section content  start-->
    @yield('content')
    <!--  main section content finish-->
</section>
{{--footer start--}}
@include('layouts.footer')
{{--footer end--}}

</body>
</html>

