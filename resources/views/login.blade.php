<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{secure_asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
</head>

<body>
    <br/>
    <a href="../" style="margin: 2%">Go Home</a>
    <div id="logincanvas">
    <form method="POST">
        @csrf
        <div class="login">
            @isset($alert)
            <p>{{$alert}}</p>
            @endisset
            <div>
                <h1>Login</h1>
                <input placeholder="Username" name="username" required/>
                <input placeholder="Password" name="password" type="password" required/>
                <button class="login">Login</button>
            </div>
        </div>
    </form>
    </div>
</body>

</html>