@extends('layouts.adminlayout')
@section('content') 
 <section class="wrapper">

        <div class="col-md-12">
            <section class="panel">
                <header class="panel-heading">
                     Update Partners
                </header>
                @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if(session()->has('message'))
                <div class="alert alert-danger" role="alert">
                    {{ Session::get('message') }}
                </div>
            @endif
                <div class="panel-body">
                    <form role="form" method="POST" action="{{ route('admin_partnore_update') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="form-group">
                            <label for="date">Partner's name am</label>
                            <input  type="text" class="form-control" id="name_am"  name="name_am" value="{{$data->name_am}}" >
                        </div>
                        <div class="form-group">
                            <label for="date">Partner's name en</label>
                            <input type="text" class="form-control" id="name_en"  name="name_en" value="{{$data->name_en}}" >
                        </div>
                        <div class="form-group">
                            <label for="date">Mini Text Am</label>
                            <textarea type="text" class="form-control" id="min_text_am"  name="min_text_am" >{{$data->min_text_am}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Mini Text En</label>
                             <textarea type="text" class="form-control" id="min_text_en"  name="min_text_en" >{{$data->min_text_en}}</textarea>
                        </div>


                        {{-- <div class="form-group">
                            <label for="date">Desc en</label>
                             <textarea type="text" class="form-control" id="des_en"  name="des_en" >{{$data->des_en}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Desc am</label>
                             <textarea type="text" class="form-control" id="des_am"  name="des_am" >{{$data->des_am}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="date">Paragraf one en</label>
                             <textarea type="text" class="form-control" id="text_one_en"  name="text_one_en" >{{$data->text_one_en}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf one am</label>
                             <textarea type="text" class="form-control" id="text_one_am"  name="text_one_am" >{{$data->text_one_am}}</textarea>
                        </div>


                         <div class="form-group">
                            <label for="date">Paragraf two en</label>
                             <textarea type="text" class="form-control" id="text_two_en"  name="text_two_en" >{{$data->text_two_en}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf two am</label>
                             <textarea type="text" class="form-control" id="text_two_am"  name="text_two_am" >{{$data->text_two_am}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf tree en</label>
                             <textarea type="text" class="form-control" id="text_three_en"  name="text_three_en" >{{$data->text_three_en}}</textarea>
                        </div>

                         <div class="form-group">
                            <label for="date">Paragraf tree am</label>
                             <textarea type="text" class="form-control" id="text_tree_am"  name="text_tree_am" >{{$data->text_tree_am}}</textarea>
                        </div>

                      --}}
                        

                        <div class="form-group">
                            <label for="date">Partner img (Choose a file 208px x 244px )</label>
                            <!--  <textarea type="text" class="form-control" id="logo"  name="logo" ></textarea> -->
                            <input type="file"  class="form-control" id="img_partner"  name="img_partner">
                            <img style="width:150px;height:200px" src="{{ asset('img/img_partners') }}/{{$data->img_partner}}">
                        </div>
                        {{-- <div class="form-group">
                            <label for="date">Logo</label>
                            <!--  <textarea type="text" class="form-control" id="logo"  name="logo" ></textarea> -->
                            <input type="file"  class="form-control" id="compni_logo"  name="compni_logo">
                            <img style="width:150px;height:200px" src="{{ asset('img/img_partners') }}/{{$data->compni_logo}}">
                            <input type="hidden" value="{{$data->compni_logo}}" name="old_compni_logo">
                        </div> --}}
                        <button type="submit" class="btn btn-primary">Update Partners</button>
                    </form>
                </div>
                 <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
                 <script>
                     CKEDITOR.replace('min_text_am')
                     CKEDITOR.replace('min_text_en')
                     CKEDITOR.replace('des_en')
                     CKEDITOR.replace('des_am')
                     CKEDITOR.replace('text_one_en')
                     CKEDITOR.replace('text_one_am')
                     CKEDITOR.replace('text_two_en')
                     CKEDITOR.replace('text_two_am')
                     CKEDITOR.replace('text_three_en')
                     CKEDITOR.replace('text_tree_am')
                </script>
            </section>
        </div>

    </section>
   

@endsection('content')