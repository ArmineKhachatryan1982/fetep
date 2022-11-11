@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Updated record
                </header>
                <div class="panel-body">
                    {{--                    {{ $updatecohortfirsttext}}--}}
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
                                <td><img  calss="responsive" src="{{ asset('img/img_alumini')}}/{{ $items->img_url }}" style="width:100px; height:100px"></td>
                                <td><a href="{{ asset('admin/admin_Alumni_Association_image_edit')}}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                                    <a href="{{ asset('admin/admin_Alumni_Association_image_delete')}}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-trash"></i></a>
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



