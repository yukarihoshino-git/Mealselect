<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Meal select</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/index.css')}}">
</head>
<body class="antialiased">
    <div class="container-fluid bg01">
        <div class="row py-5 ">
            <div class="col-xs-11 col-sm-10 col-md-5 offset-xs-1 offset-sm-1 offset-md-1 p-5">
                <div class="d-flex align-items-center py-4">
                    <div class="form-signin w-100 m-auto">
                        <form class="text-center  mx-0">
                            <h2 class="py-0 pt-4 text-white">今日は何食べる？</h2>
                            <div class = "text-center ">
                                <div class="login pt-0">
                                    @if (Route::has('login'))
                                    @auth
                                </div>
                            </div>
                        </form>
                                    @csrf
                        <h6 class="h6 mt-2 mb-0 fw-normal">
                            <div class="login text-center">
                                <a href="{{ route('calendar') }}">Top page...</a></h6>
                            </div>
                                    @else
                            <div class="login">
                            <a href="{{ route('logon') }}">Login</a>
                            </div>
                            @if (Route::has('register'))
                            <div class="login">
                                <a href="{{ route('create') }}">新規会員登録
                            </a><hr>
                            </div>
                            @endif
                            @endauth
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>