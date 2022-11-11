@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                    Update Maps
                </header>
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_conatct_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" id="date"  name="id" value="{{$data->id}}" >
                        <div class="form-group">
                            <label for="maps">Map Link  Change width="459" height="409"</label>
                            <textarea rows="5" class="form-control" id="maps"  name="maps"
                            >{!! $data->map_url !!}</textarea > 
                        </div>
                        <button type="submit" class="btn btn-primary">Update Maps</button>
                    </form>
                </div>
            </section>
        </div>

    </section>

@endsection('content')

