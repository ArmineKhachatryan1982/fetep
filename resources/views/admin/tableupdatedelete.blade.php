@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Home page img_name</th>
                <th scope="col">Home page_about_img_name</th>
                <th scope="col">Home_page_text_am</th>
                <th scope="col">Home_page_text_en</th>
                <th scope="col">About_text_am</th>
                <th scope="col">About_text_en</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $items)
                <tr>
                    <td>{{ $items->id  }}</td>
                    <td>{{ $items->img_name  }}</td>
                    <td>{{ $items->about_img_name }}</td>
                    <td>{{ $items->home_page_text_am }}</td>
                    <td>{{ $items->home_page_text_en }}</td>
                    <td>{{ $items->about_text_am }}</td>
                    <td>{{ $items->about_text_en }}</td>
                    <td><a href="{{ route('edithomepagecreate',['homepageid'=>$items->id]) }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection('content')
