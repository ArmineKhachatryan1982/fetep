@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    Edit news
                </header>
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
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_news_update') }}" enctype="multipart/form-data">
                        @csrf
                         <input type="hidden" class="form-control" id="date"  name="id" value="{{$data->id}}" >
                        <div class="form-group">
                            <label for="date">Date am</label>
                            <input type="text" class="form-control" id="date"  name="date_am" value="{{$data->date_am}}" >
                        </div>
                        <div class="form-group">
                            <label for="date">Date en</label>
                            <input type="text" class="form-control" id="date"  name="date_en" value="{{$data->date_en}}" >
                        </div>
                       
                        <div class="form-group">
                            <label for="title_text_am">Title am</label>
                            <input type="text" class="form-control" id="title_text_am"  name="title_text_am" value="{{$data->title_text_am}}" >
                        </div>

                        <div class="form-group">
                            <label for="title_text_en">Title en</label>
                            <input type="text" class="form-control" id="title_text_en"  name="title_text_en" value="{{$data->title_text_en}}" >
                            <!-- <textarea rows="5" class="form-control" ></textarea> -->
                        </div>
                        
                        <div class="form-group">
                            <label for="index_text_am">Mini text am</label>
                            <textarea rows="5" class="form-control" id="index_text_am"  name="index_text_am" >{{$data->index_text_am}}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="index_text_en">Mini text en</label>
                            <textarea rows="5" class="form-control" id="index_text_en"  name="index_text_en" >{{$data->index_text_en}}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="text_am">Long text am</label>
                            <textarea rows="5" class="form-control" id="text_am"  name="text_am" >{{$data->text_am}}</textarea > 
                        </div>

                        <div class="form-group">
                            <label for="text_en">Long text en</label>
                            <textarea rows="5" class="form-control" id="text_en"  name="text_en"
                            >{{$data->text_en}}</textarea > 
                        </div>

                        <div class="form-group">
                            <label for="index_img_name">Mini Image(Choose a file 620px x 560px) </label>
                            <input type="file" class="form-control" id="index_img_name"  name="index_img_name">
                            <img  style="width: 100px;height: 100px;" src="{{ asset('img/img_news1') }}/{{$data->index_img_name}}">
                        </div>

                        <div class="form-group">
                            <label for="page_img_name">Long Image (Choose a file 1919px x 374px)</label>
                            <input type="file" class="form-control" id="page_img_name"  name="page_img_name">
                            <img style="width: 200px;height: 100px;" src="{{ asset('img/img_news1') }}/{{$data->page_img_name}}">
                        </div>


                        <button type="submit" class="btn btn-primary">Update News</button>
                    </form>
                </div>
                 <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
                 <script>
                     CKEDITOR.replace('index_text_am')
                     CKEDITOR.replace('index_text_en')
                     CKEDITOR.replace('text_am')
                     CKEDITOR.replace('text_en')
                </script>
            </section>
        </div>

    </section>

@endsection('content')

