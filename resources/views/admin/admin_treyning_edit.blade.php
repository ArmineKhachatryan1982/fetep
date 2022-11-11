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
                <header class="panel-heading">
                    Ctreate Training
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_training_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="id"  name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label for="date">Training image</label>
                            <input type="file" class="form-control" id="imagepath"  name="imagepath">
                            <img src="{{ asset('img/img_treyning') }}/{{$data->imagepath}}"  style="width:425px;height:425px">
                        </div>
                        <div class="form-group">
                            <label for="img_text_am">Img text am</label>
                            <textarea rows="5" class="form-control" id="img_text_am"  name="img_text_am">{!!$data->img_text_am!!}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="img_text_en">Img text en</label>
                            <textarea  class="form-control" id="img_text_en"  name="img_text_en" >
                                {!!$data->img_text_en!!}
                            </textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="title_en">Title en</label>
                            <textarea rows="5" class="form-control" id="title_en"  name="title_en">{!! $data->title_en !!}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="title_am">Title am</label>
                            <textarea rows="5" class="form-control" id="title_am"  name="title_am" >{!! $data->title_am !!}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="text_one_am">Paragraph one am</label>
                            <textarea rows="5" class="form-control" id="text_one_am"  name="text_one_am" >{!! $data->text_one_am !!}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="text_one_en">Paragraph one en</label>
                            <textarea rows="5" class="form-control" id="text_one_en"  name="text_one_en" >{!! $data->text_one_en !!}</textarea> 
                        </div>

                         <div class="form-group">
                            <label for="text_two_am">Paragraph two am</label>
                            <textarea rows="5" class="form-control" id="text_two_am"  name="text_two_am" >{!! $data->text_two_am !!}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="text_two_en">Paragraph two en</label>
                            <textarea rows="5" class="form-control" id="text_two_en"  name="text_two_en" >{!!$data->text_two_en !!}</textarea> 
                        </div>

                        <button type="submit" class="btn btn-primary">Update Training</button>
                    </form>
                </div>
                  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
                  <script>
                    CKEDITOR.replace('img_text_am')
                    CKEDITOR.replace('img_text_en')
                    CKEDITOR.replace('title_en')
                    CKEDITOR.replace('title_am')
                    CKEDITOR.replace('text_one_am')
                    CKEDITOR.replace('text_one_en')
                    CKEDITOR.replace('text_two_am')
                    CKEDITOR.replace('text_two_en')
                  </script>
            </section>
        </div>


    </section>

@endsection('content')
