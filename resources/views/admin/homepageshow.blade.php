@extends('layouts.adminlayout')
@section('content')

    <div class="col-md-6" style="margin-top:100px">
    <div class="panel-body m-5">

        <h1>{{ $title }}</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


    @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <form role="form" method="post" action="{{ route('homepageshow.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="Image name">Image name</label>
                <input type="file" class="form-control" id="Image name" name="image_name_file"  value="{{ old('Image name') }}">

            </div>
            <div class="form-group">
                <label for="About image name">About image name</label>
                <input type="file" class="form-control" id="About image name"  name="about_image_name"  value="{{ old('about_image_name') }}">
            </div>
            <div class="form-group">
                <label for="home_page_text_am">home_page_text_am</label>
                <input type="text" class="form-control" id="home_page_text_am"  name="home_page_text_am" value="{{ old('home_page_text_am') }}">
            </div>
            <div class="form-group">
                <label for="home_page_text_en">home_page_text_en</label>
                <input type="text" class="form-control" id="home_page_text_en"  name="home_page_text_en" value="{{ old('home_page_text_en') }}" >
            </div>
            <div class="form-group">
                <label for="home_page_about_text_am">home_page_about_text_am</label>
                <input type="text" class="form-control" id="home_page_about_text_am"  name="home_page_about_text_am" value="{{ old('home_page_about_text_am') }}">
            </div>
            <div class="form-group">
                <label for="home_page_about_text_en">home_page_about_text_en</label>
                <input type="text" class="form-control" id="home_page_about_text_en"  name="home_page_about_text_en" value="{{ old('home_page_about_text_en') }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
    </div>
@endsection('content')
