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
                            <th scope="col">title_en</th>
                            <th scope="col">title_am</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cohort_info_tabe_show as $items)
                            <tr>
                                <td>{{ $items->id }}</td>
                                <td>{{ $items->text_en }}</td>
                                <td>{{ $items->text_am }}</td>

                                <td><a href="" class="btn btn-info btn-sm float-left mr-1"><i class="fa fa-edit"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </section>
        </div>

    </section>

@endsection('content')



