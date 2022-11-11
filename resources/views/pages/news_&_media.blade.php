@extends('layouts.layout')
@section('meta')
<meta name="description" content="See related news from science and technology articles, photos, slideshows and videos.">
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/news1.css') }}">
@endsection
@section('content')


    <!-- enter main section content-->
    
    <img src="{{ asset('img/img_news1') }}/{{$data->page_img_name}}" class="img-fluid" 
    @if(app()->getLocale() == "en")
        alt="News-{{$data->page_img_name}}" title='{{$data->page_img_name}}'
        @else
        alt="Նորություն-{{$data->page_img_name}}" title='{{$data->page_img_name}}'
        @endif
        >
    <div class="container">
        @if(app()->getLocale() == "en")
        <h1 class="p-4 ">{{$data->title_text_en}}</h1>
        <div class="text-align-justify section_contact_text">{!! $data->text_en !!}</div>
        @else
        <h1 class="p-4 ">{!!$data->title_text_am !!}</h1>
        <div class="text-align-justify section_contact_text">{!! $data->text_am !!}</div>
        @endif


        </section>
        <section class="section_index">
        <div class="row">
        <div class="col-sm-12 container_style">
            <div class="container">
                <a href="#" class="see_also">
                    <span>@lang('main.see_also') </span>
                </a>
                <div class="row all_cards">
                  
<!-- 'date','title_text_am','title_text_en','index_text_am','index_text_en','text_am','text_en','index_img_name','page_img_name','status' -->
<div class="d-flex flex-wrap  justify-content-center myrow"> 
@foreach($employees as $data)
<div class="news_item m-2">
    <div class="position-relative news_img">
        <img  class="position-absolute responsive w-100 h-100" src="{{ asset('img/img_news1') }}/{{$data->index_img_name}}" 
        @if(app()->getLocale() == "en")
        alt="News-{{$data->index_img_name}}" title='{{$data->index_img_name}}'
        @else 
        alt="Նորություն-{{$data->index_img_name}}" title='{{$data->index_img_name}}'
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


                </div>
            </div>
        </div>
    </div>
            <!-- enter main section content finish-->
        </section>
@endsection('content')
