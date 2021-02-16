<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">ログイン</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規ユーザー登録</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="links">
                    <a href="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/README.md" style="display:inline-block">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6zjpwwcbuwBQSU8EhevwPxMraVpShYbQ83w&usqp=CAU" alt="" width="100px" style="display:block">
                    GitHub</a>
                </div>
                <div class="title m-b-md">
                    Tatsumi's  Portfolio
                    {{-- <img src="http://myfirstdeploy.s3.coreserver.jp/work/web/imgs/myLogoWhite.png" alt="" width="100px"> --}}
                    {{-- <hr> --}}
                </div>
                <br>
                {{-- <div class="links">
                    <a href="http://myfirstdeploy.s3.coreserver.jp/work/web/php_app/eva.php" style="display:inline-block">
                    <img src="https://images.unsplash.com/photo-1553531888-a5892402adce?ixid=MXwxMjA3fDF8MHxzZWFyY2h8MXx8cGxhbnR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" width="100px" style="display:block">コメント投稿アプリ</a>

                    <a href="http://myfirstdeploy.s3.coreserver.jp/work/web/covid_19/covid.php" style="display:inline-block">
                    <img src="https://images.unsplash.com/photo-1490750967868-88aa4486c946?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDF8fHBsYW50fGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt="" width="100px" style="display:block">
                        コロナデータ</a>
                    
                    <a href="http://myfirstdeploy.s3.coreserver.jp/work/web/talk_API/talk.php" style="display:inline-block">
                    <img src="https://images.unsplash.com/photo-1534517610821-54969322566c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fGhvdXNlcGxhbnR8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt=""  width="100px" style="display:block">
                        AIチャットボット</a>

                    <a href="http://myfirstdeploy.s3.coreserver.jp/work/web/weather_API/weather.php" style="display:inline-block">
                    <img src="https://images.unsplash.com/photo-1534349762230-e0cadf78f5da?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8aG91c2VwbGFudHxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60" alt=""  width="100px" style="display:block">
                        天気予報アプリ</a>
                    
                </div> --}}
            </div>
        </div>
    </body>
</html>
