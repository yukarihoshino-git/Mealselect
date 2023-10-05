<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>myapp</title>
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('/css/index.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/addmenu.css')}}">
    
    
</head>
<body>
    <x-layout-top>
    <main id ="main">
   <p>{{ $date}}</p>
       <div class="col-xs-11 col-sm-10 col-md-10 offset-xs-1 offset-sm-1 offset-md-1 p-5 ">
            <div class="d-flex align-items-center py-4 addmenu">
                <div class="form-signin w-100 m-auto">

<form class="text-center  mx-0" action ="{{ route('addmenu') }}" method ="post">
    @csrf
        <h6 class="h6 mt-2 mb-0 fw-normal">献立登録</h6>
        <div class="login">
        @if($errors->any())
            <div class = "alert alert-danger py-2">


            </div><br>
        @endif
            <input type="hidden" name="id">
            <input type="text" name="date" placeholder="日付" class = "input"><br>
            <input type="text" name="title" placeholder="献立名" ><br>

            <button type ="submit">登録</button>


        </div>
    </form>




            </div>
        </div>
    </div>
    </x-layout-top>

</main>


</body>
</html>



