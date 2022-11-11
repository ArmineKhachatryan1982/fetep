@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
         @if(session()->has('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Training en</th>
                <th>Training am</th> 
            </tr>
            </thead>
            <tbody>
            @foreach($ckeditor as $items)
                
                <tr>
                    <td style="width:100px">{!! $items->id !!}</td>
                    <td style="width:100px">{!! $items->ckeditor_en !!}</td>
                    <td style="width:100px">{!! $items->ckeditor_am !!}</td>
                    
                   
                    <td><a href="{{ asset('admin/admin_trainig_edit/') }}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                        <a href="{{ asset('admin/admin_training_delete') }}/{{ $items->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection('content')