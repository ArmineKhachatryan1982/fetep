@extends('layouts.layout')
@section('meta')
<meta name="description" content="FETP is the global network of Field Epidemiology Training Programs (FETPs) building a workforce to protect all people from public health threats
">

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
@endsection
@section('content')
<!-- 'about','News','Partners' -->
    <section class ="p-3 position-relative home_first">
        <img src="{{ asset('img/img_home')}}/{{ $Titleimage->homepage_title_img}}" class="w-100" alt='FETP {{ $Titleimage->homepage_title_img}}' title='{{ $Titleimage->homepage_title_img}}'>
       
    </section>

<section class = "home_second">
  
    <div class = "d-flex flex-wrap justify-content-center align-items-center py-2 container">
    
        <div class = "m-3 home_pic"><img class="w-100 h-100" src="{{ asset('img/about') }}/{{$about->imgpath}}" alt="FETP Armenian logo" title='{{$about->imgpath}}' ></div>
        <div class = "d-flex flex-column  m-3 home_text">
            <h1 class = "text-center">@lang('main.about_us')</h1>
            <div class = "d-flex flex-column align-items-center  mt-3 py-4 px-1  bg-white">
               @if(app()->getLocale() == "en")
               <div class = "p-2">{!! $about->text_en !!}</div>
               <button class = "py-1 px-3 "><a href="{{ asset('en/about') }}" class="read_more text-white"><span>@lang('main.reade_more')</span> </a></button>
               @else
               <div class = "p-2">{!!$about->text_am!!}</div>
               <button class = "py-1 px-3 text-white"><a href="{{ asset('am/about') }}" class="read_more text-white"><span>@lang('main.reade_more')</span> </a></button>
               @endif

           </div>
       </div>  
    </div>
</section>
<!--news section start-->
<section class = "home_third">
    <div class = "d-flex flex-column align-items-center pt-3 pb-5 container">
        <h2 class = "text-center text-white p-4">@lang('main.news_media')</h2>
        <div class = "d-flex flex-wrap justify-content-center  news_events" id="event_id">

            @foreach($News as $data)
            <div class="news_item m-2">
                <div class="position-relative news_img">
                    <img  class="position-absolute responsive w-100 h-100" src="{{ asset('img/img_news1') }}/{{$data->index_img_name}}" 
                    @if(app()->getLocale() == "en") 
                    alt='News-{!! $data->title_text_en !!}' title='{!! $data->title_text_en !!}'
                    @else 
                    alt='Նորություն-{!! $data->title_text_am !!}' title='{!! $data->title_text_am !!}'
                    @endif 
                    >
                <div class="position-absolute py-2 px-4 news_date text-white">
                    @if(app()->getLocale() == "en")
                            {{$data->date_en}}</div> 
                        @else 
                            {{$data->date_am}}</div>
                        @endif  
                </div>
                @if(app()->getLocale() == "en")
                    <div class="px-3 pt-3 title"><h5>{!! $data->title_text_en !!}</h5> </div>
                    <div class="p-3 news_text">
                        {!! $data->index_text_en !!}
                    </div>
                    <div class="m-3">
                        <a  href="{{ asset('en/news') }}/{{$data->id}}" class="read_more"><span>@lang('main.reade_more')</span> </a>
                    </div>
                @else
                    <div class="p-3 title"><h5>{!! $data->title_text_am !!}</h5> </div>
                    <div class="p-3 news_text">
                        {!! $data->index_text_am !!}
                    </div>
                    <div class="m-3">
                        <a  href="{{ asset('am/news') }}/{{$data->id}}" class="read_more"><span>@lang('main.reade_more')</span> </a>
                    </div>
                @endif
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <button class = "py-1 px-3 text-white m-5 bg-white more_news"><a href="{{ asset('/') }}{{app()->getLocale()}}/news"  id="more_news">@lang('main.more_news') </a></button>
        </div>   

</section>
<!--news section end-->
<section class = "home_forth">
    <div class="container">
        <div>
            <h2 class="py-5 text-center text_center_h2">@lang('main.our_partners')</h2>
            <div class="d-flex flex-wrap justify-content-center   partnerses mb-5">
                @foreach($Partners as $data)
                <div class="d-flex flex-wrap justify-content-center  partners">
                    <div class = "partner_img px-2">
                       
                            <img src="{{ asset('img/img_partners') }}/{{$data->img_partner}}"
                            @if(app()->getLocale() == "en") 
                            alt= '{!! $data->name_en !!} is a FETP partner' title='{!! $data->name_en !!}'
                            @else
                            alt= '{!! $data->name_am !!}  FETP-ի գործընկեր' title='{!! $data->name_am !!}'
                            @endif
                            >
                       
                    </div>
                    <div class="px-2 partner_text">
                        @if(app()->getLocale() == "en")
                        <h5 class="my-2">{!! $data->name_en !!}</h5>
                        <div>{!! $data->min_text_en !!}</div>
                        {{-- <button class="text-white py-1 px-3"><a href="{{ asset('en/partner') }}/{{$data->id}}" class="text-white read_more"><span>@lang('main.reade_more')</span> </a></button> --}}
                        @else
                        <h5 class="my-2">{{$data->name_am}}</h5>
                        <div>{!!$data->min_text_am !!}</div>

                        {{-- <button class="text-white py-1 px-3"><a href="{{ asset('am/partner') }}/{{$data->id}}" class="text-white read_more"><span>@lang('main.reade_more')</span> </a></button> --}}
                        @endif
                    
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        <div class="text-center">
            <button class = "py-1 px-3 text-white m-5"><a href="{{ asset('/') }}{{app()->getLocale()}}/our_partners" class="text-white read_more ">@lang('main.see_more') </a></button>
        </div>   
    </section>
@endsection('content')

