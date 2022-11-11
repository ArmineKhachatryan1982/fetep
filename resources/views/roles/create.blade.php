@extends('layouts.adminlayout')
{{-- @extends('layouts.app') --}}


@section('content')
<section class="wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Permission:</strong>
                <br/>
                {{-- @foreach($permission as $value)
                    <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                        {{ $value->name }}</label>
                    <br/>
                @endforeach --}}
            

   

       
            

<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">Role</th>
          <th scope="col">Title</th>
          <th scope="col">About</th>
          <th scope="col">Our Partners</th>
          <th scope="col">Training</th>
          <th scope="col">News</th>
          <th scope="col">Cohorts</th>
          <th scope="col">Steering Commitee</th>
          <th scope="col">Alumni Association</th>
          <th scope="col">Footer</th>
        </tr>
      </thead>
      <tbody>
          <tr>
              @for($i=0;$i<10;$i++)
              @if($i==0)
              <td>
                @foreach($permission as $value)
                    @php
                        $permition_value=explode('-', $value->name);
                        if($permition_value[0]=='role'){
                            // echo $value->name."<br>";
                          echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                        }
                    @endphp 
                @endforeach
            </td>
                @endif
              @if($i==1)
                <td>
                    @foreach($permission as $value)
                        @php
                            $permition_value=explode('-', $value->name);
                            if($permition_value[0]=='homepage'){
                                // echo $value->name."<br>";
                                echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                            }
                        @endphp 
                    @endforeach
                </td>
                @endif
                @if($i==2)
                <td>
                    @foreach($permission as $value)
                        @php
                            $permition_value=explode('-', $value->name);
                            if($permition_value[0]=='about'){
                                // echo $value->name."<br>";
                                echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                            }
                        @endphp 
                    @endforeach
                </td>
                @endif
                @if($i==3)
                <td>
                    @foreach($permission as $value)
                    @php
                        $permition_value=explode('-', $value->name);
                        if($permition_value[0]=='partner'){
                            // echo $value->name."<br>";
                            echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                        }
                    @endphp 
                @endforeach

                   
                </td>
                @endif
                @if($i==4)
                <td>
                    @foreach($permission as $value)
                        @php
                            $permition_value=explode('-', $value->name);
                            if($permition_value[0]=='training'){
                                // echo $value->name."<br>";
                                echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                            }
                        @endphp 
                    @endforeach
                </td>
                @endif
                @if($i==5)
                <td>
                    @foreach($permission as $value)
                        @php
                            $permition_value=explode('-', $value->name);
                            if($permition_value[0]=='news'){
                                // echo $value->name."<br>";
                                echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                            }
                        @endphp 
                    @endforeach
                </td>
                @endif
                @if($i==6)
                <td>
                    @foreach($permission as $value)
                        @php
                            $permition_value=explode('-', $value->name);
                            if($permition_value[0]=='cohort'){
                                // echo $value->name."<br>";
                                echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                            }
                        @endphp 
                    @endforeach
                </td>
                @endif
                @if($i==7)
                <td>
                    @foreach($permission as $value)
                        @php
                            $permition_value=explode('-', $value->name);
                            if($permition_value[0]=='steering'){
                                // echo $value->name."<br>";
                                echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                            }
                        @endphp 
                    @endforeach
                </td>
                @endif
                @if($i==8)
                <td>
                    @foreach($permission as $value)
                        @php
                            $permition_value=explode('-', $value->name);
                            if($permition_value[0]=='alumni'){
                                // echo $value->name."<br>";
                                echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                            }
                        @endphp 
                    @endforeach
                </td>
                @endif
                @if($i==9)
                <td>
                    @foreach($permission as $value)
                        @php
                            $permition_value=explode('-', $value->name);
                            if($permition_value[0]=='footer'){
                                // echo $value->name."<br>";
                                echo  "<input type='checkbox' name='permission[]'' class='name'  false  id= $value->id value=$value->name> $value->name</br>";
                            }
                        @endphp 
                    @endforeach
                </td>
                @endif
              
              @endfor 
          </tr>

      </tbody>
</table>
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
{!! Form::close() !!}

   
</div>
</section>
@endsection
