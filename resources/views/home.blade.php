@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
@if (Auth::user()->hasRole('administrator '))
<h1 class="text-center text-danger">YOU ARE Administrator</h1>
@else
<h1 class="text-center text-danger">YOU ARE Not Administrator {{ Auth::user()->role->name }}</h1>
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
