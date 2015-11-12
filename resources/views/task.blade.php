@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">


            <div class="col-sm-offset-2 col-sm-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Registration Form
                    </div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->

                        @include('common.errors')
                        @include('common.success')

                           {{--<button id="click" class="btn btn-primary">Click Me</button>--}}
                                <!-- New Task Form -->
                        <form action="/task" method="POST" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                                    <!-- Task Name -->
                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Name</label>

                                <div class="col-sm-6">
                                    <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Designation</label>

                                <div class="col-sm-6">
                                    <input type="text" name="designation" id="task-name" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Email</label>

                                <div class="col-sm-6">
                                    <input type="email" name="email" id="task-name" class="form-control" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="task" class="col-sm-3 control-label">Your image</label>

                                <div class="col-sm-6">
                                    <input type="file" name="photo" id="task-name" class="form-control" value="">
                                </div>
                            </div>

                            <!-- Add Task Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-6">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-plus"></i>Add Task
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Current Tasks -->
                @if (count($tasks) > 0)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Tasks
                        </div>

                        <div class="panel-body">
                            <table class="table table-striped task-table table-responsive">
                                <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                                </thead>
                                <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>
                                        <td class="table-text"><div>{{ $task->email }}</div></td>
                                        <td class="table-text"><div>{{ $task->designation }}</div></td>
                                        <td class="table-text"><div><img width="170" height="150" src="{{asset('images/'.$task->photo)}}"></div></td>

                                        <!-- Task Delete Button -->
                                        <td>
                                            <form action="/task/{{ $task->id }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection