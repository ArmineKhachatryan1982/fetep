@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Upload image
                </header>
                <div class="panel-body">
{{--                        {{ $updatecohortfirsttext[0]->text_en }}--}}
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
                    <form role="form" method="POST" action="{{ route('admin_cohorts_first_text_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden"  name='id' value="{{ $updatecohortfirsttext[0]->id }}">
                        <div class="form-group">
                            <label for="cohorts_text_en">cohorts_text_en</label>
                            <textarea  rows="10" class="form-control" id="cohorts_text_en"  name="cohorts_text_en">{{ $updatecohortfirsttext[0]->text_en }} </textarea>
                        </div>
                        <div class="form-group">
                            <label for="cohorts_text_am">cohorts_text_am</label>
                            <textarea  rows="10" class="form-control" id="cohorts_text_am"  name="cohorts_text_am">{{ $updatecohortfirsttext[0]->text_am  }}$updatecohortfirsttext[0]->text_am</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </section>
        </div>

    </section>

@endsection('content')



