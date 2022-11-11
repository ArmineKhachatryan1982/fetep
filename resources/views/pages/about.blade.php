@extends('layouts.layout')
@section('meta')
    <meta name="description" content="FETP program helps national, district and county surveillance officers, to learn new epidemiology skills and techniques for investigating diseases.">
@endsection
<link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
@section('content')

    <section class="aboutus_first pt-5">
        <div class = "d-flex flex-wrap  container aboutus">

            <div class = "aboutus_pic"><img style="width:300px;height:400px;" src="{{ asset('img/about') }}/{{$data->img_one}}" alt='FETP logo' title='{{$data->img_one}}'></div>
            {{-- <div class = "my-4 aboutus_border"></div> --}}
            <div class = "d-flex flex-column aboutus_text">
                <h1 class = "text-center h2" >@lang('main.about_us')</h1>
                <div class = "d-flex flex-column align-items-center mt-2 pl-5 text-justify">
                    @if(app()->getLocale() == "en")
                    <div>{!! $data->paragraph_one_en !!}</div>
                    @else
                    <div>{!! $data->paragraph_one_am !!}</div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <section class="aboutus_second text-justify">
        <div class="container">
             @if(app()->getLocale() == "en")
            <div class="aboutus_second_text px-2">{!! $data->paragraph_two_en !!}</div>
            <div class="aboutus_second_text px-2">{!! $data->paragraph_tree_en !!}</div> 
            @else
            <div class="aboutus_second_text px-2">{!! $data->paragraph_two_am !!}</div>
            <div class="aboutus_second_text px-2">{!! $data->paragraph_tree_am !!}</div>
            @endif
        </div>
    </section>
   
@endsection('content')

