@extends('layouts.adminlayout')


@section('content')
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                     About Page
                </header>
                <div class="panel-body">
                    
                    <form role="form" method="POST" action="{{ route('admin_aboutindex_edit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="date">Text Am</label>
                           <textarea type="text" class="form-control" id="text_am"  name="text_am" required>{{$data->text_am}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Text En</label>
                           <textarea type="text" class="form-control" id="text_en"  name="text_en" required>{{$data->text_en}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="img_tree">Title image</label>
                            <input type="file" class="form-control" id="imgpath"  name="imgpath"  >
                            <img src="{{ asset('img/about') }}/{{$data->imgpath}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update About index</button>
                    </form>
                </div>
            </section>
             <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
            <script>    
          
                 CKEDITOR.replace('text_am')
                 CKEDITOR.replace('text_en')
             </script>

        </div>

    </section>



@endsection('content')

     