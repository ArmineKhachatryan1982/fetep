@extends('layouts.layout')
@section('meta')
    <meta name="description" content="The first Armenia FETP Frontline cohort learn the skills needed for effective surveillance and response.,including use of case definitions.">
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/cohorts.css') }}">
@endsection
@section('content')
   
 @foreach($text as $data)
      <div class="cohort my-5">
        
        <!-- cohort text section start -->
        <div class="cohort_text text-justify ">
            <div class="container pt-4">
            @if(app()->getLocale() == "en")

                    {!! $data->cohort_text_en !!}
                 @else
                    {!! $data->cohort_text_am !!}
                 @endif
               </div> 
        </div>
        <!-- cohort text  end -->
        <!--cohort group first start  -->
        <div class="cohort_group_first">
            <div class="container">
            <div class="cohort_group_date my-5">
               <h3>
                    @if(app()->getLocale() == "en")
                    {{$data->cohort_date_en}}
                 @else
                    {{$data->cohort_date_am}}
                    @endif
                </h3>
                <h4>
                    @if(app()->getLocale() == "en")
                    {{$data->cohort_group_en}}
                     @else
                     {{$data->cohort_group_am}}
                    @endif
                </h4>
                
                <div class="d-flex  flex-wrap cohort_first_group_img my-2 cohort_group">
                    @foreach($cohort_one as $dat)
                        @if($dat->cohort_group_en == $data->cohort_group_en )
                        <div class="card card_img m-2 ">
                                <img class="card-img-top" src="{{ asset('img/img_cohort') }}/{{$dat->cohort_img_name}}" title="@if(app()->getLocale() == "en") {!! $dat->cohort_pic_title_en !!}@else {!! $dat->cohort_pic_title_am  !!}@endif" alt="@if(app()->getLocale() == "en") {!! $dat->cohort_pic_title_en !!}@else {!! $dat->cohort_pic_title_am  !!}@endif">
                            <div class="card-body">
                                 @if(app()->getLocale() == "en")
                                 <h6 class="font-weight-bold">{!! $dat->cohort_pic_title_en !!} </h6>
                                    {!! $dat->cohort_img_text_en !!} 
                                @else
                                <h6 class="font-weight-bold">{!! $dat->cohort_pic_title_am !!} </h6>
                                     {!! $dat->cohort_img_text_am !!} 
                                 @endif
                            </div>
                        </div>
                    @endif
                    @endforeach
                </div>
            </div>

            </div>
        </div>
         <!--cohort group first end  -->
       
        <!-- cohort group second start -->
        <div class="cohort_group_second my-4">
            <div class="container">
            <div class="cohort_group_date py-5">
            <h3>
                    @if(app()->getLocale() == "en")
                            {{$data->cohort_date_second_en}}
                     @else
                            {{$data->cohort_date_second_am}}
                     @endif
                </h3>
                <h4>
                    @if(app()->getLocale() == "en")
                            {{$data->cohort_group_second_en}}
                    @else
                            {{$data->cohort_group_second_am}}
                    @endif
                </h4>
                </div>
            <div class=" d-flex  flex-wrap cohort_goup_second_start cohort_group">
              @foreach($cohort_one as $dat)
                 @if($dat->cohort_group_en == $data->cohort_group_second_en )
                    <div class="card card_img m-2">
                        <img class="card-img-top" src="{{ asset('img/img_cohort') }}/{{$dat->cohort_img_name}}" alt="Card image cap" title="@if(app()->getLocale() == "en") {!! $dat->cohort_pic_title_en !!}@else {!! $dat->cohort_pic_title_am  !!}@endif" alt="@if(app()->getLocale() == "en") {!! $dat->cohort_pic_title_en !!}@else {!! $dat->cohort_pic_title_am  !!}@endif">

                        <div class="card-body">
                                     @if(app()->getLocale() == "en")
                                     <h6 class="font-weight-bold">{!! $dat->cohort_pic_title_en !!} </h6>
                                        {!! $dat->cohort_img_text_en !!} 
                                    @else
                                    <h6 class="font-weight-bold">{!! $dat->cohort_pic_title_am !!} </h6>
                                         {!! $dat->cohort_img_text_am !!} 
                                     @endif
                        </div>
                     </div>
                 @endif
              @endforeach
            </div>
        </div>
        </div>
        <!-- cohort group second end -->
          
      </div>
       @endforeach


         {{-- Pagination --}}
        <div class="d-flex justify-content-center">
            {!! $text->links() !!}
        </div>
     

@endsection('content')
