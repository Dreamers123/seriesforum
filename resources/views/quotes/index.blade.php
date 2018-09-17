

@extends('layouts.app')

@section('content')
    @forelse($quotes as $quote)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>

                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <blockquote>
                                    <p>{{ $quote->quotes }}</p>
                                    <footer>{{ $quote->author }}</footer>
                                </blockquote>

                        </div>
                    </div>
                </div>
                @empty
                    <h1 style="margin-left: 300px;font-size:100px"> Nothing to Show</h1>
                @endforelse
            </div>
        </div>
@endsection