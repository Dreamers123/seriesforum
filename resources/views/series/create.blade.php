@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create the Series List
                </div>

                <div class="panel-body">
                    <form action="/series" method="POST" enctype = "multipart/form-data">

                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"></input>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <textarea name="name" class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <input type="file" name="cover_image">
                        </div>

                        <div>
                            <input type="submit" class="btn btn-success pull-right">
                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
