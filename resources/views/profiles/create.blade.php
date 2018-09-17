@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Update Your Profile
                </div>

                <div class="panel-body">
                    <form action="/profile" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"></input>

                        <div class="form-group">
                            <label for="city">City</label>
                            <textarea name="city" class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="about">About</label>
                            <textarea name="about" class="form-control"> </textarea>
                        </div>


                        <div class="form-group">
                            <label for="image_link">Image Link</label>
                            <textarea name="image_link" class="form-control"> </textarea>
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
