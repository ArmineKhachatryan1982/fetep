@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/open_partner.css') }}">
@endsection
@section('content')
    <section class="py-5">
        <h2 class="text-center font-weight-bold">@lang('main.partners')</h2>
    </section>
    <section class="container">
       
        <div class="d-flex flex-wrap justify-content-center"> 
            <div class = "partner_img px-2">
                <img src="{{ asset('img/img_partners') }}/{{$data->img_partner}}">
            </div>
               
            <div class="p-2 partnerName ">
                @if(app()->getLocale() == "en")
                    <div class="py-2 name_label">{!! $data->name_en !!}</div>
                    <div class="pt-2">{!! $data->des_en !!}</div>
                @else
                    <div class="py-2 name_label">{!! $data->name_am !!}</div>
                    <div class="pt-2">{!! $data->des_am !!}</div>
                @endif
            </div>
            <div class = "partner_img px-2">
                <img class=" imageTwo" src="{{ asset('img/img_partners') }}/{{$data->compni_logo}}" alt="">
            </div>
        </div>
        @if(app()->getLocale() == "en")
            <div>{!! $data->text_one_en !!}</div>
            <div>{!! $data->text_two_en !!}</div>
            <div>{!! $data->text_three_en !!}</div>
        @else
        <div>{!! $data->text_one_am !!}</div>
            <div>{!! $data->text_two_am !!}</div>
            <div>{!! $data->text_tree_am !!}</div>
        @endif   



    </section>
    <!-- more partner  info start-->

      



        <div class="container"> 
                    <div class="my-4 see_also ">
                        <a href="#" class="see_more">
                            <span>See also ... </span>
                        </a>
                    </div>
            </div>


            <section class = "my-3 home_forth">
                <div class="container">
                        <div class="d-flex flex-wrap justify-content-around   partnerses">
                            @foreach($Partners as $data)
                            <div class="d-flex flex-wrap justify-content-center  partners">
                                <div class = "partner_img px-2">
                                    <a href="{{ asset('en/partner') }}/{{$data->id}}" class="partnerhover">
                                        <img src="{{ asset('img/img_partners') }}/{{$data->img_partner}}">
                                    </a>  
                                </div>
                                <div class="px-2 partner_text">
                                    @if(app()->getLocale() == "en")
                                    <h5 class="my-2">{!! $data->name_en !!}</h5>
                                    <div>{!! $data->min_text_en !!}</div>
                                    {{-- <button class="py-1 px-3"><a href="{{ asset('en/partner') }}/{{$data->id}}" class=" text-white read_more"><span>@lang('main.reade_more')</span> </a></button> --}}
                                    @else
                                    <h5 class="my-2">{{$data->name_am}}</h5>
                                    <div>{!!$data->min_text_am !!}</div>
            
                                    {{-- <button class="py-1 px-3"><a href="{{ asset('am/partner') }}/{{$data->id}}" class="text-white read_more">@lang('main.reade_more') </a></button> --}}
                                    @endif
                                
                                </div>
                            </div>
                            @endforeach
                            
                        </div>
                     <div> 
                </section>
@endsection('content')
