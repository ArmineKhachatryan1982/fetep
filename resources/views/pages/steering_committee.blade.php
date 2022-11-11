@extends('layouts.layout')
@section('meta')
    <meta name="decription" content="A Steering Committee (SC) has been established in May 2021 which purpose of the steering committee is to ensure support from stakeholders">
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/steeringCommittee.css') }}">
@endsection
@section('content')


        <section class="steering_committee pt-3">
            <div class="container">
                <h1 class="  mt-5 steering_label d-flex justify-content-center">

                    {{-- @lang('main.steering_committee') --}}
                    @if(app()->getLocale() == "en")
                         {!!$data->title_en!!}
                    @else
                    {!!$data->title_am!!}
                    @endif
                </h1>
                <div class="steering_text pt-3">
                    
                    <div class="my-3 text-justify" id="paragraph_one">
                       @if(app()->getLocale() == "en")
                        {!!$data->paragraph_one_en!!}
                        @else
                        {!!$data->paragraph_one_am!!}
                        @endif
                    </div>
                    <div class="my-3 text-justify" id="paragraph_two">
                       @if(app()->getLocale() == "en")
                        {!!$data->paragraph_two_en!!}
                        @else
                        {!!$data->paragraph_two_am!!}
                        @endif
                       
                    </div>
                </div>

        </div>
        </section>
        <section class="steering_image ">
            <div class="container">
               
                <div class="d-flex flex-wrap  justify-content-center image_row">
                   
{{--uploaded images from steering_imgs table start --}}
                    @foreach($steerings_img  as $key )
                    <div class="image_col">
                            <img src="{{ asset('img/img_steering/'.$key->img_name) }}"   @if(app()->getLocale() == "en") alt='{!! $key->img_name!!}' title='{!! $key->img_name!!}' @endif>
                        </div>
                    @endforeach
 {{--uploaded images from steering_imgs table end --}}
                </div>
            </div>
        </section>
    


@endsection('content')

