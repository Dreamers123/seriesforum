
<header class="container">
    @if(Sentinel::check())
        <div class="row"><h1 class ="col-sm-4">Hello {{ Sentinel::getUser() ->first_name }}</h1>
            <nav class="col-sm-8 text-right">
                @else
                    <div class="row"><h1 class ="col-sm-4">Unauthenticated User</h1>
                        <nav class="col-sm-8 text-right">
                            @endif

                            @if(Sentinel::check())
                                <form action="/logout" method="POSt" id="logout-form">
                                    {{ csrf_field() }}

                                    <a href="#" onclick="document.getElementById('logout-form').submit()"><p>Logout</p></a>
                                </form>


                            @else

                                <a href="https://www.cricket.com.au/" target="_blank" ><p>Home</p></a>
                                <a href="/login"><p>Login</p></a>
                                <a href="/register"><p>Register</p></a>

                            @endif
                        </nav>
                    </div>
            </nav>
        </div>
</header>