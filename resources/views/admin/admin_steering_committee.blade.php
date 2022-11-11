@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">title en</th>
                <th scope="col">title am</th>
                <th scope="col">Paragraph one en</th>
                <th scope="col">Paragraph one am</th>
                <th scope="col">Paragraph two en</th>
                <th scope="col">Paragraph two am</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($steering as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{!! $items->title_en !!}</td>
                    <td>{!! $items->title_am !!}</td>
                    <td>{!! $items->paragraph_one_en !!}</td>
                    <td>{!! $items->paragraph_one_am !!}</td>
                    <td>{!! $items-> paragraph_two_en !!}</td>
                    <td>{!! $items->paragraph_two_am !!}</td>
                    <td><a href="{{ route('admin_steering_committee_edit',['steering_Id'=>$items->id]) }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection(''content'')

