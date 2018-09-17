@inject('quotes', 'App\Quotes')
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ Auth::user()->name }}'s Profile</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="thumbnail">
                            <a href="{{  Auth::user()->profile->image_link  }}">
                                <img src="{{ Auth::user()->profile->image_link }}" alt="Lights" style="width:30%;  border: 5px solid lightblue; border-radius: 100%; ">
                                    <div class="caption">
                                    </div>
                         </a>

                    </di>
                </div>
            </div>
        </div>
    </div>
@endsection
