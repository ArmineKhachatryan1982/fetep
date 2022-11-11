@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    
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

                    <form role="form" method="POST" action="{{route('admin_footer_update')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value=" {{$data->id}}">
                        
                        <div class="form-group">
                            <label for="logo_name">logo img</label>
                            <input type="file" class="form-control" id="logo_name"  name="logo_name">
                            <img src="{{asset('img/img_header')}}/{{$data->logo_name}}" style="width:70px;height:70px">
                        </div>
                         <div class="form-group">
                            <label for="phone">Phone number</label>
                            <textarea  class="form-control" id="phone"  name="phone">{{$data->phone}}</textarea>
                        </div>
                         <div class="form-group">
                            <label for="email">email</label>
                            <input type="email" class="form-control" id="email"  name="email" value="{{$data->email}}">
                        </div>
                        <div class="form-group">
                            <label for="text_am"> text_am</label>
                            <textarea  rows="10" class="form-control" id="text_am"  name="text_am">{{$data->text_am}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="text_en"> text_am</label>
                            <textarea  rows="10" class="form-control" id="text_en"  name="text_en">{{$data->text_en}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </section>
             <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
             <script>
                CKEDITOR.replace('phone')
                 CKEDITOR.replace('text_am')
                 CKEDITOR.replace('text_en')
             </script>
             
        </div>

    </section>

@endsection('content')



