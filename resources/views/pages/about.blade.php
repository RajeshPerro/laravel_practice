@extends('layouts.app')
<head>
    <title>{{$title}}</title>
</head>
@section('content')
    <div class="container">
        <di class="col-sm-offset-2 col-sm-8">
            <h1>About Me</h1>
            <div class="panel-body">
                @include('common.errors')
                <table class="table table-responsive">
                    <tr>
                        <td>Name</td>
                        <td>{{$name}}</td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td>{{$desc}}</td>
                    </tr>
                </table>
            </div>
        </di>
    </div>
@endsection
