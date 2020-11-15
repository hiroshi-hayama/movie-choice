<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MovieChoice</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    
    <style>
        body{ 
            background-image: url("<?php print htmlspecialchars('https://image.tmdb.org/t/p/w1280/' . $responce->backdrop_path , ENT_QUOTES, "UTF-8"); ?>"); 
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            }
        body::before{
            /* 透過した黒を上から重ねるイメージ */
            background-color: rgba(0,0,0,0.7);
            /* 自由に位置指定 */
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1;
            content: ' ';
            }
    </style>

    <body>

        {{-- ナビゲーションバー --}}
        @include('commons.navbar')

        <div class="container">
            {{-- エラーメッセージ --}}
            @include('commons.error_messages')

            @yield('content')
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>