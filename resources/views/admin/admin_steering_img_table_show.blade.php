@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    All steering images
                </header>
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
                <div class="panel-body">
                   
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image name</th>
                           
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $items)
                            <tr>
                                <td>{{ $items->id }}</td>
                                <td><img  calss="responsive" src="{{ asset('img/img_steering')}}/{{ $items->img_name }}" style="width:100px; height:100px"></td>
                                <td><a href="{{ asset('/admin/admin_steering_committee_image_edit')}}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                                    <a href="{{ asset('/admin/admin_steering_committee_image_delete')}}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-trash"></i></a>
                                </td>
                                 
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </section>
        </div>

    </section>

@endsection('content')



