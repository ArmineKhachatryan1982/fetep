@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Edit record
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
                    <form role="form" method="POST" action="{{route('admin_cohort_update_update')}}" enctype="multipart/form-data">
                       
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label for="cohort_group_en">Cohort group en</label>
                            <input type=text   class="form-control" id="cohort_group_en"  name="cohort_group_en" value="{{$data->cohort_group_en}}">
                        </div>
                        <div class="form-group">
                            <label for="cohort_img_name">Cohort img name</label>
                            <input type="file" class="form-control" id="cohort_img_name"  name="cohort_img_name" value="{{$data->cohort_img_name}}">
                            <img src="{{asset('img/img_cohort')}}/{{$data->cohort_img_name}}" style="width:70px;height:70px">
                            <!-- <input type="hidden" name="current_img" value="{{$data->cohort_img_name}}"> -->
                        </div>
                        <div class="form-group">
                            <label for="cohort_pic_title_en">cohort picture name en</label>
                            <input type=text   class="form-control" id="cohort_pic_title_en"  name="cohort_pic_title_en" value="{{$data->cohort_pic_title_en}}" >
                        </div>
                        <div class="form-group">
                            <label for="cohort_pic_title_am">cohort picture name am</label>
                            <input type=text   class="form-control" id="cohort_pic_title_am"  name="cohort_pic_title_am" value="{{$data->cohort_pic_title_am}}">
                        </div>
                         <div class="form-group">
                            <label for="cohort_img_text_en">Cohort img text en</label>
                            <textarea  rows="10" class="form-control" id="cohort_img_text_en"  name="cohort_img_text_en">{{$data->cohort_img_text_en}}</textarea>
                        </div>
                         <div class="form-group">
                            <label for="cohort_img_text_am">Cohort img text am</label>
                            <textarea  rows="10" class="form-control" id="cohort_img_text_am"  name="cohort_img_text_am">{{$data->cohort_img_text_am}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </section>
             <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
             <script>
                  CKEDITOR.replace('cohort_img_text_en')
                  CKEDITOR.replace('cohort_img_text_am')
             </script>
        </div>

    </section>

@endsection('content')



