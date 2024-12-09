@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header title m-b-md"><h3>{{ __('Intermediate Task List') }}</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <a
                        href="{{ url('/tasks') }}"
                        class="rounded-md px-3 py-2 btn btn-link"
                    >
                        {{ __('Please visit task list page') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
