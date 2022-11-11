@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Upload image
                    
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
                    <form role="form" method="POST" action="{{ route('admin_steering_committe_img_upload') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"  name='steering_committees_id' value="{{ $tableuploadform }}">
                        <div class="form-group">
                            <label for="steering_img_name">Image name  (Choose a file 740*540 size)</label>
                            <input type="file" class="form-control" id="steering_img_name"  name="steering_img_name">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>

    </section>

@endsection('content')


