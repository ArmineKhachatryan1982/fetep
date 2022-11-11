@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Updated record
                </header>
                <div class="panel-body">
{{--                                        <h1>{{ $steerings }}</h1>--}}
                    @foreach($steerings as $key => $value)

{{--                                                {{ $value->id }}--}}
                    @endforeach
                    @if(session()->has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <form role="form" method="POST" action="{{ route('admin_steering_committee_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"  name='id' value="{{ $value->id }}">
                        <div class="form-group">
                            <label for="title_en">Title en</label>
                            <input type="text" class="form-control"  id=title_en" name="title_en"  value="{{ $value->title_en }}">

                        </div>
                        <div class="form-group">
                            <label for="title_am">Title am</label>
                            <input type="text" class="form-control"  id=title_am" name="title_am"  value="{{ $value->title_am }}">

                        </div>
                        <div class="form-group">
                            <label for="paragraph_one_en">Paragraph one en</label>
                            <textarea  rows="10" class="form-control" id="paragraph_one_en"  name="paragraph_one_en">{{ $value->paragraph_one_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="text_one_am">Paragraph one am</label>
                            <textarea rows="10" class="form-control" id="paragraph_one_am"  name="paragraph_one_am"> {{ $value->paragraph_one_am }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="text_two_en">Paragraph two en</label>
                            <textarea rows="10" class="form-control" id="paragraph_two_en"  name="paragraph_two_en"> {{ $value->paragraph_two_en }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="text_two_am">Paragraph two am</label>
                            <textarea rows="10" class="form-control" id="paragraph_two_am"  name="paragraph_two_am">{{ $value->paragraph_two_am }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>

             <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
             <script>    
          
                 CKEDITOR.replace('paragraph_one_am')
                 CKEDITOR.replace('paragraph_one_en')
                 CKEDITOR.replace('paragraph_two_en')
                 CKEDITOR.replace('paragraph_two_am')
                
             </script>

        </div>

    </section>

@endsection('content')

