@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    Update Training
                </header>
                <div class="panel-body">
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
                    @if(session()->has('message'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <form role="form" method="POST" action="{{ route('admin_training_update') }}" enctype="multipart/form-data">
                        @csrf

                        <input type="hidden" value="{{ $data->id }}" name="id">
                        <div class="form-group">
                            <label for="ckeditor_en">Training text en</label>
                            <textarea rows="5" class="form-control" id="ckeditor_en"  name="upload" >{!! $data->ckeditor_en!!}</textarea> 
                        </div>

                        <div class="form-group">
                            <label for="ckeditor_am">Training text am</label>
                            <textarea rows="5" class="form-control" id="ckeditor_am"  name="ckeditor_am" >{!! $data->ckeditor_am !!}</textarea> 
                        </div>

                        <button type="submit" class="btn btn-primary">Update Training</button>
                    </form>
                </div>
            </section>
             <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
               <script>
                    CKEDITOR.replace('upload',{
                        filebrowserUploadUrl:"{{route('upload',['_token'=>csrf_token()])}}",
                        filebrowserUploadMethod:'form'
                    });
                 CKEDITOR.replace('ckeditor_am')
        
                     
                  
                </script>
        </div>

    </section>

@endsection('content')
