@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">

            <section class="panel">
                @if(session()->has('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                <header class="panel-heading">
                   Insert Image 
                </header>
            
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_title_image_upload') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="image">Select image for homepage title(Choose a file size 1920px x 400px) </label>
                            <input type="file" class="form-control"  id="homepage_title_img" name="homepage_title_img"  required >
                        </div>
                        <div class="form-group">
                            <label for="image">Select image for homepage title (Choose a file size 768px x 400px)</label>
                            <input type="file" class="form-control"  id="homepage_title_img_768" name="homepage_title_img_768" required  >
                        </div>
                        <div class="form-group">
                            <label for="image">Select image for homepage title(Choose a file size 425px x 400px)</label>
                            <input type="file" class="form-control"  id="homepage_title_img_425" name="homepage_title_img_425" required  >
                        </div>
                        <p>training</p>
                        <div class="form-group">
                            <label for="image">Select image  for trainingpage title(Choose a file size 1920px x 514px) </label>
                            <input type="file" class="form-control"  id="trainingpage_title_img" name="trainingpage_title_img"  required >
                        </div>
                        <div class="form-group">
                            <label for="image">Select image  for trainingpage title (Choose a file size 768px x 514px) </label>
                            <input type="file" class="form-control"  id="trainingpage_title_img_768" name="trainingpage_title_img_768"  required >
                        </div>
                        <div class="form-group">
                            <label for="image">Select image  for trainingpage title (Choose a file size 425px x 514px) </label>
                            <input type="file" class="form-control"  id="trainingpage_title_img_425" name="trainingpage_title_img_425"  required >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>
    </section>
@endsection('content')
