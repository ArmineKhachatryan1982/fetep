@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">

        <form role="form" method="POST" action="{{ route('upload_form') }}" enctype="multipart/form-data">
            @csrf
        <label for="upload">Training en </label>
            <textarea id="upload" name="upload"></textarea>
            <label for="upload1">Training am </label>
            <textarea id="upload1" name="upload_am"></textarea>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </section>
    
    <script>
        
    
    CKEDITOR.replace('upload',{
        filebrowserUploadUrl:"{{route('upload',['_token'=>csrf_token()])}}",
        filebrowserUploadMethod:'form'
    });
     CKEDITOR.replace('upload_am')
    
    </script>
@endsection('content')