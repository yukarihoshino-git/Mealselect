<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myapp</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="sidebars.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/index.css')}}">
    


</head>
<body>
<div class="container-fluid bg01">
    <div class="row py-5">
        <div class="col-xs-11 col-sm-10 col-md-5 offset-xs-1 offset-sm-1 offset-md-1 p-5">
            <div class="d-flex align-items-center py-4">
                <div class="form-signin w-100 m-auto">
                    <form class="text-center  mx-0" action ="{{ route('login') }}" method ="post">
                    @csrf
                        <h6 class="h6 mt-2 mb-0 fw-normal">ログインはこちら</h6>
                        <div class="login">
                        <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
 <div class = "alert alert-danger">
    {{ session('login_error')}}
</div>
@endif
                            
@if($errors->any())
    <div class ="alert alert-warning col-8">
    <ul style="list-style: none; padding-left: 0;">

            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
</ul>
    </div>
@endif


@if(session('logout'))
 <div class = "alert alert-danger">
    {{ session('logout')}}
</div>
@endif

                            <input type="text" name="email" placeholder="email" ><br>
                            <input type="password" name="password" placeholder="password" ><br>
                            <button type ="submit">Login</button>
                            </div>
                    </form>
                        <div class = "text-center"><hr>
                            <h6 class="h6 mt-4 mb-0 fw-normal">パスワードを忘れた場合はこちら</h6>
                            <div class="login"><a href ="{{ route('reset')}}">
                                <input class = "reset" type="button" value="再設定"></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div> 


<div>

            <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username">
            <input-error :messages="$errors->get('email')" class="mt-2" >
</div>



</body>
</html>


<!-- メンバートップ画面 -->
<!-- <x-layout-login>
    <form class="text-center  mx-0" action ="{{ route('login') }}" method ="post">
    @csrf
        <h6 class="h6 mt-2 mb-0 fw-normal">ログインはこちら</h6>
        <div class="login">
 
                    <ul style="list-style: none; padding-left: 0;">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <input type="text" name="email" placeholder="email" ><br>
            <input type="password" name="password" placeholder="password" ><br>
            <button type ="submit">Login</button>

            <div class = "text-center"><hr>
                <h6 class="h6 mt-4 mb-0 fw-normal">パスワードを忘れた場合はこちら</h6>
                <div class="login"><a href="{{ route('password.request') }}">再設定</a>
                </div>
            </div>
        </div>
    </form>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'></script>
    <div id='calendar'></div>

</x-layout-login> -->