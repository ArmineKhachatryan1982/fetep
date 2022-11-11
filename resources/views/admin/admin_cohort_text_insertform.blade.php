@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Insert data into cohort_text
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
                    <form role="form" method="POST" action="{{route('admin_cohort_text_insertform_inserted')}}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="cohorts_text_en">cohorts_text_en</label>
                            <textarea  rows="10" class="form-control" id="cohorts_text_en"  name="cohort_text_en"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cohorts_text_am">cohorts_text_am</label>
                            <textarea  rows="10" class="form-control" id="cohorts_text_am"  name="cohort_text_am"></textarea>
                        </div>
                         <div class="form-group">
                            <label for="cohort_date_en">cohort_date_en</label>
                           <input type=text class="form-control" id="cohort_date_en"  name="cohort_date_en">
                        </div>
                        <div class="form-group">
                            <label for="cohort_date_am">cohort_date_am</label>
                           <input type=text class="form-control" id="cohort_date_am"  name="cohort_date_am">
                        </div>
                        <div class="form-group">
                            <label for="cohort_group_first_en">cohort_group_en</label>
                           <input type=text class="form-control" id="cohort_group_en"  name="cohort_group_en">
                        </div>
                         <div class="form-group">
                            <label for="cohort_group_am">cohort_group_am</label>
                           <input type=text class="form-control" id="cohort_group_am"  name="cohort_group_am">
                        </div>

                        <div class="form-group">
                            <label for="cohort_date_second_en">cohort_date_second_en</label>
                           <input type=text class="form-control" id="cohort_date_second_en"  name="cohort_date_second_en">
                        </div>
                        <div class="form-group">
                            <label for="cohort_date_second_am">cohort_date_second_am</label>
                           <input type=text class="form-control" id="cohort_date_second_am"  name="cohort_date_second_am">
                        </div>

                        <div class="form-group">
                            <label for="cohort_group_second_en">cohort_group_second_en</label>
                           <input type=text class="form-control" id="cohort_group_second_en"  name="cohort_group_second_en">
                        </div>
                        <div class="form-group">
                            <label for="cohort_group_second_am">cohort_group_second_am</label>
                           <input type=text class="form-control" id="cohort_group_second_am"  name="cohort_group_second_am">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>
             <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
             <script>
                 CKEDITOR.replace('cohorts_text_en')
                 CKEDITOR.replace('cohorts_text_am')
             </script>
             
        </div>

    </section>

@endsection('content')



