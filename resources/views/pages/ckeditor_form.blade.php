@extends('layouts.layout')
@section('meta')
    <meta name="description" content="Field Epidemiology Training Program are competency-based training programs,  contribute to the development of national and regional health security infrastructure">
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/courses4.css') }}">
@endsection

@section('content')
{{-- <img src="{{asset('img/img_treyning/title2-2_1629698601.png')}}" class="w-100"> --}}
<img src="{{asset('img/img_treyning')}}/{{ $titleimage->trainingpage_title_img}}" class="w-100">
    <section  class="w-100" id="course_first">
       
      
            <div class="container">
                {{-- <div class="text-white  gradient_area px-2">
                        @if(app()->getLocale() == "en")
                        {!! $Title->training_title_en !!}
                        @else
                        {!! $Title->training_title_am !!}
                        @endif
                </div> --}}
            </div>
        </div>
    </section>
    <section id="course_second">
    
            <!-- part 1 start -->
            @foreach($ckeditor as $key=>$data)
                @if($key % 2) 
                  <div class=" py-5 with_image" style="overflow:hidden">

                    @if(app()->getLocale() == "en")
                        <div class="container"> {!!$data->ckeditor_en!!}</div>
                    @else 
                        <div class="container"> {!!$data->ckeditor_am!!}</div>
                    @endif
                </div> 
                @else
                    <div class="py-5" style="overflow:hidden">

                        @if(app()->getLocale() == "en")
                            <div class="container"> {!!$data->ckeditor_en!!}</div>
                        @else 
                             <div class="container"> {!!$data->ckeditor_am!!}</div>
                        @endif  
                    </div>
                @endif   
            @endforeach
     </section>
            

 {{-- Pagination --}}
        <div class="d-flex justify-content-center py-4" >
            {!! $ckeditor->links() !!}
        </div>


@endsection('content')
