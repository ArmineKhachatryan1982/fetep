@extends('layouts.layout')
@section('meta')
<meta name="description" content="Field Epidemiology Training Program (FETP) Alumni Association of Armenia which members  are South Caucasus Field Epidemiology and  Laboratory Training Program.">
@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/AlumniAssociation.css') }}">
@endsection

@section('content')
            <section class="alumni_association pt-5">
                <div class="container mt-3">
                @if(app()->getLocale() == "en")
                <h1 class="alumni_label d-flex justify-content-center">{{$data->title_en}}</h1>
                @else
                <h1 class="alumni_label d-flex justify-content-center">{{$data->title_am}}</h1>
                @endif
                <div class="alumni_text  mt-5">
                    @if(app()->getLocale() == "en")
                    {!!$data->text_one_en !!}
                    @else
                    {!! $data->text_one_am !!}
                    @endif
                </div>
                <div class="alumni_text ">  
                    @if(app()->getLocale() == "en")
                    {!! $data->text_two_en !!}
                    @else
                    {!! $data->text_two_am !!}
                    @endif
                </div>
            </div>
            </section>
            <section class="alumni_image ">
                <div class="container">
              
                    <div class="d-flex flex-wrap  justify-content-center image_row">
                       @foreach($image  as $key )
                       <div class="image_col">
                        <img src="{{ asset('img/img_alumini/'.$key->img_url) }}" @if(app()->getLocale() == "en") alt='alumni-{!! $key->img_url !!}' title='{!! $key->img_url !!}' @else alt='Շրջանավարտների ասոցիացիա-{!! $key->img_url !!}' title='{!! $key->img_url !!}'  @endif>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
    <!-- </section> -->

    @endsection('content')
