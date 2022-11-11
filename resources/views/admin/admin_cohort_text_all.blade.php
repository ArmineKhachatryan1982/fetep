@extends('layouts.adminlayout')
@section('content')
 <section class="wrapper">
        <table class="table">
            <thead>
            <tr>
                <th scope="col" style="width:100px">ID</th>
                <th scope="col">Cohort text en</th>
                <th scope="col">Cohort text am</th>
                <th scope="col">Cohort date en</th>
                <th scope="col">Cohort date am</th>
                <th scope="col">Cohort group en</th>
                <th scope="col">Cohort group am</th>
                <th scope="col">Cohort date second en</th>
                <th scope="col">Cohort date second am</th>
                <th scope="col">Cohort group second en</th>
                <th scope="col">Cohort group second am</th>
            </tr>
            </thead>
            <tbody>

            @foreach($data as $items)
                <tr>
                    <td>{{ $items->id }}</td>
                    <td style="width:100px">{!! $items->cohort_text_en !!}</td>
                    <td style="width:100px">{!! $items->cohort_text_am !!}</td>
                    <td style="width:100px">{!! $items->cohort_date_en !!}</td>
                    <td style="width:100px">{!! $items->cohort_date_am !!}</td>
                    <td style="width:100px">{!! $items->cohort_group_en !!}</td>
                    <td style="width:100px">{!! $items->cohort_group_am !!}</td>
                    <td style="width:100px">{!! $items->cohort_date_second_en !!}</td>
                    <td style="width:100px">{!! $items->cohort_date_second_am !!}</td>
                    <td style="width:100px">{!! $items->cohort_group_second_en !!}</td>
                    <td style="width:100px">{!! $items->cohort_group_second_am !!}</td>
                    <td><a href="{{ asset('admin/admin_cohort_text_edit') }}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                    <a href="{{ asset('admin/admin_cohort_text_delete') }}/{{ $items->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
   @endsection('content')

     