<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CSS</title>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
 
        <style>
        .btn
        {
            display: inline-block;
            width: 150px;
            height: 32px;
            line-height: 32px;
            background-color: #EF858C;
            color: #FFF;
            text-align: center;
        }
 
        .btn.active {
            background-color: #ccc;
        }
 
        .btn > span:last-of-type,
        .btn.active > span:first-of-type
        {
            display: none;
        }
 
        .btn.active > span:last-of-type {
            display: inline;
        }
        </style>
 
        <script>
        $(function(){
            $('.btn').on('click', function(event){
                event.preventDefault();
                $(this).toggleClass('active');
            });
        });
        </script>
    </head>
    <link rel="stylesheet" href="{{ secure_asset('css/result.css') }}">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
    <body>
        <a class="btn" href="#">
            <span><strong>誘う</strong></span>
            <span><strong>リクエスト済み</strong></span>
        </a>
    </body>
</html>