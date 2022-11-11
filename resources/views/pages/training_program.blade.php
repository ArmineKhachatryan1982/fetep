@extends('layouts.layout')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/courses4.css') }}">
@endsection

@section('content')
    <img src="{{asset('img/img_news1/news10xxlong.png ')}}" class="w-100">
    <section  class="w-100" id="course_first">
        <img src="{{asset('img/img_treyning')}}/{{ $titleimage->trainingpage_title_img}}" class="w-100   img_1000">
        <img src="{{asset('img/img_treyning')}}/{{ $titleimage->trainingpage_title_img_768}}" class="w-100  img_768">
        <img src="{{asset('img/img_treyning')}}/{{ $titleimage->trainingpage_title_img_425}}" class="w-100  img_425">
        
            <div class="container">
                <div class="text-white  gradient_area px-2">
                        @if(app()->getLocale() == "en")
                        {!! $Title->training_title_en !!}
                        @else
                        {!! $Title->training_title_am !!}
                        @endif
                </div>
            </div>
        </div>
    </section>
    <section id="course_second">
            <!-- part 1 start -->
             @foreach($employees as $key=>$data)
            @if($key % 2)
            <section class="about_courses  py-5 with_image">
                <div class="container all_cours">
                    <div class="d-flex  flex-wrap justify-content-around align-items-center my-2 nkar_text " >
                        <div class="order-1 position-relative picture_div">
                            <img class=" image_size" src="{{ asset('img/img_treyning')}}/{{$data->imagepath}}" alt="">
                             @if(app()->getLocale() == "en")
                            <div class="p-4  text_image">
                            
                              {!! $data->img_text_en !!} 
                            </div>
                             @else
                             <div class="p-4 text_image">
                               
                               {!! $data->img_text_am !!}
                            </div>
                            @endif
                        </div>
                        <div class="order-2 p-4 about_courseOneText">
                             @if(app()->getLocale() == "en")
                            <h1>{!! $data->title_en !!}</h1>
                            <div class="text-justify"> {!! $data->text_one_en !!}</div>
                            <div class="text-justify mt-2">{!! $data->text_two_en !!}</div>
                            @else
                            <h1>{!! $data->title_am !!}</h1>
                            <div class="text-justify">{!! $data->text_one_am !!}</div>
                            <div class="text-justify mt-2">{!! $data->text_two_am !!}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
           
            @else
            <section class="about_courses ">
                <div class="container all_cours">
                    <div class="d-flex  flex-wrap justify-content-around align-items-center my-2 nkar_text " >
                        <div class="order-2 position-relative picture_div">
                            <img class=" image_size" src="{{ asset('img/img_treyning')}}/{{$data->imagepath}}" alt="">
                             @if(app()->getLocale() == "en")
                            <div class="p-4  text_image">
                            
                              {!! $data->img_text_en !!} 
                            </div>
                             @else
                             <div class="p-4 text_image">
                               
                               {!! $data->img_text_am !!}
                            </div>
                            @endif
                        </div>
                        <div class="order-1 p-4 about_courseOneText">
                             @if(app()->getLocale() == "en")
                            <h1>{!! $data->title_en !!}</h1>
                            <div class="text-justify"> {!! $data->text_one_en !!}</div>
                            <div class="text-justify mt-2">{!! $data->text_two_en !!}</div>
                            @else
                            <h1>{!! $data->title_am !!}</h1>
                            <div class="text-justify">{!! $data->text_one_am !!}</div>
                            <div class="text-justify mt-2">{!! $data->text_two_am !!}</div>
                            @endif
                        </div>
                    </div>
                </div>
            </section>
            @endif  
             @endforeach
    </section>
 {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $employees->links() !!}
        </div>


@endsection('content')
