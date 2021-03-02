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
	     @keyframes git {
                0%  {
                    filter:opacity(0);
                }
                100%{
                    filter:opacity(0.8);
                }
            }

	     html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;

            }

            .full-height {
                height: 88vh;
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
                font-size: 54px;
	    }
	    
            .links {
		
	    }

            .links > a {
                color: #636b6f;
                padding: 0 20px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display:inline-block;
                margin:auto;

                filter: drop-shadow(30px 20px 8px lightgrey);
            }
            img{
                display:block;
                margin:auto;

            }
            
             .git{
                filter: opacity(0);
                animation: git 5s  forwards;

            }
            .m-b-md {
                margin-bottom: 0px;
            }
            header,
            footer{
                height: 6vh;
                background:rgb(245, 245, 245);
            }
        </style>
    </head>
    <body>
        <header></header>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">新規登録</a>
                        @endif
                    @endauth
                </div>
                @endif

        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="links">
                    <a href="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/README.md" style="">
                        <img src="https://github.com/Tatsumi-I/laravel_app/blob/master/github_original_wordmark_logo_icon_146506.png?raw=true" alt="" width="50px" style="">
                    </a>
                </div>
                <br>
                <div class="title m-b-md git">
                    Tatsumi's  Portfolio
                </div>

		<div class="links">
		    <a href="https://github.com/Tatsumi-I/laravel_app/blob/master/README.md" style="">readme  ＞1</a> 
		    <a href="https://github.com/Tatsumi-I/For-php_dockerDev/blob/master/README.md" style="">＞2</a>
                </div>
                {{-- <hr> --}}
                <br>
                <br>
                <br>
                <div class="links">
                    
                    <a href="http://myfirstdeploy.s3.coreserver.jp/work/web/covid_19/covid.php" style=>
		    <img src="https://github.com/Tatsumi-I/laravel_app/blob/master/SS_covid.png?raw=true" alt="" width="80px" style=""><br>Covid_19<br>Data解析</a>

                    <a href="http://myfirstdeploy.s3.coreserver.jp/work/web/weather_API/weather.php" style=";margin:auto;">
                    <img src="https://github.com/Tatsumi-I/laravel_app/blob/master/SS_weather.png?raw=true" alt=""  width="80px" style=""><br>API<br>天気予報</a>
                    
                    <a href="http://myfirstdeploy.s3.coreserver.jp/work/web/talk_API/talk.php" style=";margin:auto;">
                    <img src="https://github.com/Tatsumi-I/laravel_app/blob/master/SS_AI.png?raw=true" alt=""  width="80px" style=""><br>イラッとする<br>AI-bot</a>
		
                    <a href="http://ec2-35-72-191-104.ap-northeast-1.compute.amazonaws.com/login" style=";margin:auto;">
                    <img src="https://github.com/Tatsumi-I/laravel_app/blob/master/SS_login.png?raw=true" alt=""  width="80px" style=""><br>CRUD<br>app</a>

                </div>
            </div>
        </div>
        <footer>
            <br>
            <div class="flex-center">
                2021 - Tatsumi's  Portfolio
            </div>

        </footer>

    </body>
</html>
