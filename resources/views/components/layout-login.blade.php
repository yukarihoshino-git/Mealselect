<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>フォーム入力</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/index.css')}}">
    
</head>
<body>
    <header>
    </header>
    <main>
<div class="container-fluid bg01">
    <div class="row py-5">
        <div class="col-xs-11 col-sm-10 col-md-5 offset-xs-1 offset-sm-1 offset-md-1 p-5">
            <div class="d-flex align-items-center py-4">
                <div class="form-signin w-100 m-auto">
                {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div> 

</main>
<footer>
</footer>


</body>
</html>