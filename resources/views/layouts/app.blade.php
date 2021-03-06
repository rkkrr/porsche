<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script src="https://use.typekit.net/weg1dte.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>

        <title>porsche</title>
        

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/result.js"></script>
        
        
        <link rel="stylesheet" href="{{ secure_asset('css/showresult.css') }}">
    </head>
    <body>
        <?php
        $user=Auth::user();
        ?>
        @include('commons.navbar', ['user'=>$user])
        <div class="container">
            @include('commons.error_messages')

            @yield('content')
            
            <?php
                $url = $_SERVER['REQUEST_URI'];
             ?>
    
            <?php if($url == "/"){ ?>
                @include('commons.footbar2')
            <?php }else{ ?>
                @include('commons.footbar')
            <?php } ?>
        </div>
    </body>
</html>