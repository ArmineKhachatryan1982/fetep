@extends('layouts.layout')
@section('meta')
    <meta name="description" content="Get contact details of FETP Armenia and get in touch with us if you have inquires regarding training programs.">
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/contactus.css') }}">
@endsection
@section('content')
       
    <div class="container py-3">
        <div class="info_map">
           

        
            <div class="p-4 info_side">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                 @endif
            
                <h2 class="my-4 font-weight-bold">@lang('main.contacts_us')</h2>
                <form role="form" method="POST"  action="{{ route('contactussend') }}" enctype="multipart/form-data">
                    @csrf
                 <div class="mb-3">
                    <input type="text"  name='name' class="form-control invalid" id="exampleFormControlInput1"
                        placeholder="@lang('main.name_surname')" required>
                </div>



                <div class="mb-3">
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="@lang('main.email')" required>
                </div>



                <div class="mb-3">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="@lang('main.message')" name="message"required></textarea>
                </div>
                <input type="hidden" value="{{ app()->getLocale()}}" name="language">
                <input class="btn btn_send py-2 px-5 text-white" type="submit" value="@lang('main.send')">

                </form>
               
                @if(session()->has('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif

            </div>
            
            {{-- <div class="map-side">
                <?php echo $data->map_url; ?>
            </div> --}}
           
        </div>
    </div>
@endsection('content')
