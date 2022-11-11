@extends('layouts.adminlayout')
@section('content')

    <section class="wrapper">
        <div class="col-md-6" >
            <div class="panel-body m-5">

                {{--                <h1>{{ $result }}</h1>--}}
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
                <ul>


                    {{--                @foreach($result as $item )--}}
                    {{--                    <li>{{ $item }}</li>--}}
                    {{--                @endforeach--}}
                </ul>
                <form role="form" method="POST" action="{{ route('updatehomepage') }}" enctype="multipart/form-data">
                    @csrf
                    {{--                    @method('PUT')--}}

                    <input type="text" name="id"  value="{{ $result[0]->h_id }}">
                    <div class="form-group">
                        <label for="Image name">Image name</label>
                        <input type="file" class="form-control" id="Image name" name="image_name_file"  value="{{ $result[0]->img_name }}">
                        <img src="{{ asset('../../img/img_home') }}/{{ $result[0]->img_name }}" style="width:130px">

                    </div>
                    <div class="form-group">
                        <label for="About image name">About image name</label>
                        <input type="file" class="form-control" id="About image name"  name="about_image_name"  value="{{ $result[0]->about_img_name  }}">
                        <img src="{{ asset('../../img/img_home') }}/{{ $result[0]->about_img_name }}" style="width:130px">
                    </div>
                    <div class="form-group">
                        <label for="home_page_text_am">home_page_text_am</label>
                        <input type="text" class="form-control" id="home_page_text_am"  name="home_page_text_am" value="{{ $result[0]->home_page_text_am  }}">
                    </div>
                    <div class="form-group">
                        <label for="home_page_text_en">home_page_text_en</label>
                        <input type="text" class="form-control" id="home_page_text_en"  name="home_page_text_en" value="{{ $result[0]->home_page_text_en }}" >
                    </div>
                    <div class="form-group">
                        <label for="home_page_about_text_am">home_page_about_text_am</label>
                        <input type="text" class="form-control" id="home_page_about_text_am"  name="home_page_about_text_am" value="{{ $result[0]->about_text_am }}">
                    </div>
                    <div class="form-group">
                        <label for="home_page_about_text_en">home_page_about_text_en</label>
                        <input type="text" class="form-control" id="home_page_about_text_en"  name="home_page_about_text_en" value="{{ $result[0]->about_text_en }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </section>

    </section>
@endsection
