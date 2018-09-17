@extends('layouts.app')

@section('content')
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="panel panel-default">
                           <div class="panel-body">
                           <div class="thumbnail">
                      <a href="{{ $post->cover_image }}">
                    <img src="/storage/cover_images/{{$post->cover_image}}">
                    <div class="caption">
                        <p>{{ $post->name  }}</p>
                    </div>
                </a>
            </div>
            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif

@endsection