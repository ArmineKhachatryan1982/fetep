@extends('layouts.adminlayout')
@section('content')
    <section class="wrapper">
        
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Homepage title img 1920px x 400px</th>
                {{-- <th>Homepage title img 768px x 400px</th>
                <th>Homepage title img 425px x 400px</th> --}}

                <th>Trainingpage title img 1920px x 514px</th>
                {{-- <th>Trainingpage title img 768px x 514px</th>
                <th>Trainingpage title img 425px x 514px</th> --}}
            </tr>
            </thead>
            <tbody>
            @foreach($data as $items)
                <tr>
                    <td style="width:100px">{!! $items->id !!}</td>
                    <td  style="width:400px;height:200px"><img src="{{asset('img/img_home')}}/{{ $items->homepage_title_img }}" style="width:200px;height:200px"></td>
                    {{-- <td  style="width:400px;height:200px"><img src="{{asset('img/img_home')}}/{{ $items->homepage_title_img_768 }}" style="width:200px;height:200px"></td>
                    <td  style="width:400px;height:200px"><img src="{{asset('img/img_home')}}/{{ $items->homepage_title_img_425 }}" style="width:200px;height:200px"></td> --}}
                    <td  style="width:400px;height:200px"> <img src="{{asset('img/img_treyning')}}/{{ $items->trainingpage_title_img }}" style="width:200px;height:200px"></td>
                    {{-- <td  style="width:400px;height:200px"> <img src="{{asset('img/img_treyning')}}/{{ $items->trainingpage_title_img_768 }}" style="width:200px;height:200px"></td>
                    <td  style="width:400px;height:200px"> <img src="{{asset('img/img_treyning')}}/{{ $items->trainingpage_title_img_425}}" style="width:200px;height:200px"></td> --}}
                
                    <td><a href="{{ asset('admin/admin_title_image_edit/') }}/{{ $items->id }}" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a>
                    {{-- <a href="{{ asset('admin/admin_title_image_delete') }}/{{ $items->id }}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>   --}}
                </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection('content')
        