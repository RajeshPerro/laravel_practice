@extends('layouts.app')
<head>
    <title>{{$title}}</title>
</head>
@section('content')
    <div class="container">
        <di class="col-sm-offset-2 col-sm-8">
            <h1>Contact Info.</h1>
            <div class="panel-body">
                @include('common.errors')
                <table class="table table-responsive">
                    <tr>
                        <td>Phone Number</td>
                        <td>{{$cell}}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{$email}}</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>{{$addr}}</td>
                    </tr>
                </table>
            </div>
        </di>
    </div>
@endsection
