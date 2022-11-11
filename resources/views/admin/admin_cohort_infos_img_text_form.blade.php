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
                    <form role="form" method="POST" action="{{ route('admin_cohort_infos_img_text_inserted') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- <input type="hidden"  name='cohort_infos_cohorts_id' value="{{ $cohort->id }}">  -->
                        <div class="form-group">
                            <label for="img_url">Image name</label>
                            <input type="file" class="form-control" id="img_url"  name="cohorts_info_img_url_file">
                        </div>
                        <div class="form-group">
                            <label for="cohorts_info_en">cohorts_info_en</label>
                            <textarea rows="5" class="form-control" id="cohorts_info_en"  name="cohorts_info_en"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cohorts_info_am">cohorts_info_am</label>
                            <textarea rows="5" class="form-control" id="cohorts_info_am"  name="cohorts_info_am"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cohorts_title_data_text_en">cohorts_title_data_text_en</label>
                            <textarea rows="5" class="form-control" id="cohorts_title_data_text_en"  name="cohorts_title_data_text_en"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cohorts_title_data_text_am">cohorts_title_data_text_am</label>
                            <textarea rows="5" class="form-control" id="cohorts_title_data_text_am"  name="cohorts_title_data_text_am"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title_en">title_en</label>
                            <textarea rows="5" class="form-control" id="title_en"  name="title_en"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="title_am">title_am</label>
                            <textarea rows="5" class="form-control" id="title_am"  name="title_am"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>

    </section>

@endsection('content')



