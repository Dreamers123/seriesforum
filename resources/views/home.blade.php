@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <p> You are {{ Auth::user()->name }}
                        </p>
                        <span class="pull-right"> <a href="/profile/{{ Auth::user()->profile->id }}/edit"> Edit</a></span>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
