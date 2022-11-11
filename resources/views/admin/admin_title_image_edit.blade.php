@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                 @endif
                 @if(session()->has('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <header class="panel-heading">
                    Update images
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_title_image_update') }}" enctype="multipart/form-data">
                        @csrf
                    
                        <input type="hidden" class="form-control" id="id"  name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label for="date">Homepage title image (Choose a file size 1920px x 400px)</label>
                            <input type="file" class="form-control" id="homepage_title_img"  name="homepage_title_img">
                            <img src="{{ asset('img/img_home') }}/{{$data->homepage_title_img}}"  style="width:50%;height:400px">
                            <input type="hidden" value="{{$data->homepage_title_img}}" name="old_homepage_title_img">
                        </div>
                        {{-- <div class="form-group">
                            <label for="date">Homepage title image(Choose a file size 768px x 400px) </label>
                            <input type="file" class="form-control" id="homepage_title_img_768"  name="homepage_title_img_768">
                            <img src="{{ asset('img/img_home') }}/{{$data->homepage_title_img}}"  style="width:768px;height:400px">
                            <input type="hidden" value="{{$data->homepage_title_img}}" name="old_homepage_title_img_768">
                        </div>
                        <div class="form-group">
                            <label for="date">Homepage title image (Choose a file size 425px x 400px)</label>
                            <input type="file" class="form-control" id="homepage_title_img_425"  name="homepage_title_img_425">
                            <img src="{{ asset('img/img_home') }}/{{$data->homepage_title_img}}"  style="width:425px;height:400px">
                            <input type="hidden" value="{{$data->homepage_title_img}}" name="old_homepage_title_img">
                        </div> --}}
                        <div class="form-group">
                            <label for="date">Trainingpage title image (Choose a file size 1920px x 514px)</label>
                            <input type="file" class="form-control" id="trainingpage_title_img"  name="trainingpage_title_img">
                            <img src="{{ asset('img/img_treyning') }}/{{$data->trainingpage_title_img}}"  style="width:50%;height:514px">
                            <input type="hidden" value="{{$data->trainingpage_title_img}}" name="old_trainingpage_title_img">
                        </div>
                        {{-- <div class="form-group">
                            <label for="date">Trainingpage title image (Choose a file size 768px x 514px)</label>
                            <input type="file" class="form-control" id="trainingpage_title_img_768"  name="trainingpage_title_img_768">
                            <img src="{{ asset('img/img_treyning') }}/{{$data->trainingpage_title_img_768}}"  style="width:768px;height:514px">
                            <input type="hidden" value="{{$data->trainingpage_title_img}}" name="old_trainingpage_title_img_768">
                        </div>
                        <div class="form-group">
                            <label for="date">Trainingpage title image  (Choose a file size 425px x 514px)</label>
                            <input type="file" class="form-control" id="trainingpage_title_img_425"  name="trainingpage_title_img_425">
                            <img src="{{ asset('img/img_treyning') }}/{{$data->trainingpage_title_img_425}}"  style="width:425px;height:514px">
                            <input type="hidden" value="{{$data->trainingpage_title_img}}" name="old_trainingpage_title_img_425">
                        </div> --}}

                      
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
                  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
                  <script>
                    CKEDITOR.replace('img_text_am')
                    CKEDITOR.replace('img_text_en')
                    
                  </script>
            </section>
        </div>


    </section>

@endsection('content')
