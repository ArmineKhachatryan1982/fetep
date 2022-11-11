@extends('layouts.adminlayout')
@section('content')
 <section class="wrapper">
    @if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Cohort group en</th>
                <th scope="col">Cohort img name</th>
                <th scope="col">Cohort picture name en</th>
                <th scope="col">Cohort picture name am</th>
                <th scope="col">Cohort img text en</th>
                <th scope="col">Cohort img text am</th>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td>{!! $items->cohort_group_en !!}</td>
                    <td>{!! $items->cohort_img_name !!}</td>
                    <td>{!! $items->cohort_pic_title_en !!}</td>
                    <td>{!! $items->cohort_pic_title_am !!}</td>
                    <td>{!! $items->cohort_img_text_en!!}</td>
                    <td>{!! $items->cohort_img_text_am !!}</td>
                    
                    <td><a href="{{ asset('admin/admin_cohort_group_edit') }}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('admin/admin_cohort_group_delete') }}/{{ $items->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
   @endsection('content')

     