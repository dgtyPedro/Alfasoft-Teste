<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AlfaSoft Pedro Caires</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{secure_asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">

</head>
<body>
    <nav>
        <a href="../">Go Back</a>
        <p>AlfaSoft Pedro Caires</p>
    </nav>
    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @isset($response)
    <div class="alert">
        <p>{{$response}}</p>
    </div>
    @endisset
    <div id="editcontainer">
        <div>
            <h3>Current</h3>
            <p>Name: {{$contact->name}}</p>
            <p>Contact: {{$contact->contact}}</p>
            <p>Email Address: {{$contact->email_address}}</p>
        </div>
        <div>
            <form method="POST">
            @csrf
            <h3 style="text-align: center">New</h3>
            <p>Name: <input type="text" name="name" minlength="5" value="{{$contact->name}}" required/></p>
            <p>Contact: <input type="number" name="contact" value="{{$contact->contact}}" required/></p>
            <p>Email Address: <input type="email" name="email_address" value="{{$contact->email_address}}" required/></p>
            <p><input type="submit" value="Edit"/></p>
            </form>
        </div>
    </div>

<footer>
    @if (Session::get('logged_in'))
        <a href="../Logout">Logout ({{Session::get('user_username')}})</a>
    @else
        <a href="../Login">Login</a>
    @endif
</footer>
</body>
</html>