<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DataPi Refer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> 

        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <a class="logo" href="http://datapi.com"><img src="img/logo.png" alt="DataPi"></a>
                <div class="phone"><a href="tel:+16047070357">(604) 707-0357</a></div>
            </div>
        </header>
        @yield('content')
    </body>
</html>
