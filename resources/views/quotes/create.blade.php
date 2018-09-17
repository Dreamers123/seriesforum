@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create the Quote List
                </div>

                <div class="panel-body">
                    <form action="/quotes" method="POST">

                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> </input>

                        <div class="form-group">
                            <label for="quotes">Quote</label>
                            <textarea name="quotes" class="form-control"> </textarea>
                        </div>

                        <div class="form-group">
                            <label for="author">Author</label>
                            <textarea name="author" class="form-control"> </textarea>
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
