@extends('layouts.layout')
@section('meta')
    <meta name="description" content="Find the latest Epidemiology  news from FETP Armenia.See related science and technology articles, photos, slideshows and videos.">
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
@endsection
@section('content')
    <!-- title section start -->
        <div class="label_news text-center ">
                 <h2 class="text-center font-weight-bold">@lang('main.news_media')</h2>
          
        </div>
        <!-- title section start -->
        <!-- news section start -->
       <div class="container mt-5">
            <div class="d-flex flex-wrap  justify-content-center myrow"> 
                @foreach($employees as $data)
                <div class="news_item m-2">
                    <div class="position-relative news_img">
                        <img  class="position-absolute responsive w-100 h-100" src="{{ asset('img/img_news1') }}/{{$data->index_img_name}}"
                        @if(app()->getLocale() == "en") 
                            alt="News-{!! $data->title_text_en !!}" title="{!! $data->title_text_en !!}">
                        @else 
                            alt="Նորություն-{!! $data->title_text_am !!}" title="{!! $data->title_text_am !!}">
                        @endif 
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
        
         <!-- news section start -->
        {{-- Pagination --}}
        <div class="d-flex justify-content-center m-3">
            {!! $employees->links() !!}
        </div>
   



  
@endsection('content')
