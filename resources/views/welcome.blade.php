<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{__('Project title')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fcfcfc;
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
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login', app()->getLocale()) }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register', app()->getLocale()) }}">Register</a>
                        @endif

                        <a href="{{ route('examples', app()->getLocale()) }}">
                            {{__("Examples")}}
                        </a>

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title title-app m-b-md">
                    {{__('Laravel Multi-Lang')}}
                </div>

                <div class="links links-lang">
                    <a href="/es">
                        <div class="img-lang">
                            <img width="60" src="{{ asset('img/lang/es.svg') }}" alt="Click Change Lang to Spanish">
                        </div>
                        <div class="label-lang">
                            {{__("Spanish")}}
                        </div>
                    </a>
                    <a href="/en">
                        <div class="img-lang">
                            <img width="60" src="{{ asset('img/lang/en.svg') }}" alt="Click Change Lang to English">
                        </div>
                        <div class="label-lang">
                            {{__("English")}}
                        </div>
                    </a>
                    <a href="/fr">
                        <div class="img-lang">
                            <img width="60" src="{{ asset('img/lang/fr.svg') }}" alt="Click Change Lang to French">
                        </div>
                        <div class="label-lang">
                            {{__("French")}}
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
