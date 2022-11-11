@extends('layouts.layout')
@section('meta')
    <meta name="description" content="Partnership is at the heart of everything.When we work together, we can increase our impact and help  do more to deliver global progress for everyone, everywhere.">

@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/partners.css') }}">
@endsection
@section('content')
<section class = "home_forth py-1">
    <div class="container">
        <div>
            <h1 class="my-5 text-center text_center_h2 h2">@lang('main.our_partners')</h2>
            <div class="d-flex flex-wrap justify-content-center   partnerses">
                @foreach($Partners as $data)
                <div class="d-flex flex-wrap justify-content-center  partners">
                    <div class = "partner_img px-2">
                        {{-- <a href="{{ asset('en/partner') }}/{{$data->id}}" class="partnerhover"> --}}
                            <img src="{{ asset('img/img_partners') }}/{{$data->img_partner}}"
                            @if(app()->getLocale() == "en") 
                            alt='{!! $data->name_en !!}' title='{!! $data->name_en !!}'
                            @else
                            alt='{!! $data->name_am !!}' title='{!! $data->name_am !!}'
                            @endif
                            >
                        {{-- </a>   --}}
                    </div>
                    <div class="px-2 partner_text">
                        @if(app()->getLocale() == "en")
                        <h5 class="my-2">{!! $data->name_en !!}</h5>
                        <div>{!! $data->min_text_en !!}</div>
                        {{-- <button class="text-white py-1 px-3"><a href="{{ asset('en/partner') }}/{{$data->id}}" class=" text-white read_more"><span>@lang('main.reade_more')</span> </a></button> --}}
                        @else
                        <h5 class="my-2">{{$data->name_am}}</h5>
                        <div>{!!$data->min_text_am !!}</div>

                        {{-- <button class="text-white py-1 px-3"><a href="{{ asset('am/partner') }}/{{$data->id}}" class="text-white read_more">@lang('main.reade_more') </a></button> --}}
                        @endif
                    
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
        {{-- <div class="text-center">
            <button class = "py-1 px-3 text-white m-5"><a href="{{ asset('/') }}{{app()->getLocale()}}/our_partners" class="read_more text-white">@lang('main.reade_more') </a></button>
        </div>    --}}
    </section>
    <!-- partner section end -->
     {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-5 mb-2 ">
            {!! $Partners->links() !!}
        </div>
@endsection('content')
