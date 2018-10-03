<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Dashboard</a></li>
                <li><a href="/series">Series</a></li>
                <li><a href="/quotes">Quotes</a></li>
                <li><a href="/users">Users</a></li>
            </ul>
            @if(auth()->guard('admin')->check())
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Welcome Back {{ $admins->email }}</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
             @else
             <ul class="nav navbar-nav navbar-right">
                <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
            </ul>
            @endif
        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="adminlogin">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                    <hr/>

                    <div class="form-group">
                        <label>Email Address</label>
                        <input type="text" class="form-control" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-default btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>


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
                    <h1 style="color: #2ab27b">What's going on {{ $admins->email }}</h1>
                    <h4 style="color: #2ab27b">Try add some latest TV series and Quotes in those feeds</h4>

                </div>
            </div>
        </div>
    </div>
</div>









<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>