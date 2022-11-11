@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Update image
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
                    @if(session()->has('error_file'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error_file') }}
                    </div>
                @endif
                    <form role="form" method="POST" action="{{route('admin_Alumni_Association_image_update')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        
                        <div class="form-group">
                            <label for="img_url">Alumni Association image update (Chose a file  with 740*540 size)</label>
                            <input type="file" class="form-control" id="img_url"  name="img_url" value="">
                            <img src="{{ asset('img/img_alumini')}}/{{ $data->img_url }}" style="width:370px;height:270px">
                            
                        </div> 
                        
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </section>
             <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
             <script>
                  CKEDITOR.replace('')
                  CKEDITOR.replace('')
             </script>
        </div>

    </section>

@endsection('content')



