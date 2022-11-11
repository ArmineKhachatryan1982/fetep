@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tittle am</th>
                <th scope="col">Tittle en</th>

                <th scope="col">Img Text am</th>
                <th scope="col">Img Text en</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $items)
                <tr>
                    <td>{!! $items->id !!}</td>
                    <td>{!! $items->title_en !!}</td>
                    <td>{!! $items->title_am !!}</td>
                    <td>{!! $items->img_text_am !!}</td>
                    <td>{!! $items->img_text_en !!}</td>
                    <td>{!! $items->text_one_am !!}</td>
                    <td>{!! $items->text_one_en !!}</td>
                    <td>{!! $items->text_two_am !!}</td>
                    <td>{!! $items->text_two_en !!}</td>
                    <td><a href="{{ asset('admin/admin_training_edit') }}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('admin/admin_training_delete') }}/{{ $items->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection('content')
        