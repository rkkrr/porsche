<!DOCTYPE html>
<html>
<header>
   <link rel="stylesheet" href="{{ secure_asset('css/showresult.css') }}">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
                    @if (Auth::check())
                      <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/home"><strong>PORSCHE</strong></a>
        
               </div>
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="test">ひとりで</a></li>
                        <li><a href="test2">みんなで</a></li>
                        <li><a href="home">トップページへ</a></li>
                        <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>
                </ul>
                
                        
                   
                   
                   
                    @else
                     <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" ><strong>PORSCHE</strong></a>
            </div>
            
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
</html>