@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-offset-2 col-sm-8 bg-white shadow-sm card">
                <div class="panel panel-default">
                    <div class="panel-heading text-center my-3 pb-3">
                        <h4>{{ __('Task List') }}</h4>
                    </div>

                    <div class="panel-body pb-3">
                        @include('common.errors')

                        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="task-name" class="col-sm-3 control-label list-group pb-1">{{ __('Enter a new task') }}</label>

                                <div class="row mb-3">
                                    <div class="col-sm-7">
                                        <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                                    </div>

                                    <div class="col-sm-offset-3 col-sm-5">
                                        <button type="submit" class="btn btn-primary">
                                            <strong>{{ __('+ Add Task') }}</strong>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                @if (count($tasks) > 0)
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <table class="table table-striped task-table">
                                <thead>
                                    <th >{{ __('No.') }}</th>
                                    <th>{{ __('Todo item') }}</th>
                                    <th>&nbsp;</th>
                                </thead>
                                <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="table-text"><div>{{ $task->name }}</div></td>
                                        <td>
                                            <form action="{{url('task/' . $task->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger font-bold bg-red-500 rounded hover:bg-red-700">
                                                    {{ __('Delete') }}
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
