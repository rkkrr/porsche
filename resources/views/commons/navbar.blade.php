<!DOCTYPE html>
<html>
<header>
   <link rel="stylesheet" href="{{ secure_asset('css/showresult.css') }}">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><strong>PORSCHE</strong></a>
            </div>
<<<<<<< HEAD
            <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
            <!--    <ul class="nav navbar-nav navbar-right">-->
            <!--        <li><a href="#"></a></li>-->
            <!--        <li><a href="#"></a></li>-->
=======
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li><a href="home">Users</a></li>
                        <li class="dropdown">
                            <a href="home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="home">My profile</a></li>
                                <li role="separator" class="divider"></li>
                                <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                            </ul>
                        </li>
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <li>{!! link_to_route('login', 'Login') !!}</li>
                    @endif
>>>>>>> cad52ad704b0758cdb0468f2205f23509dbe398c
                </ul>
            </div>
        </div>
    </nav>
</header>
</html>