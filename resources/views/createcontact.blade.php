<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{secure_asset('public/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">

</head>
<body>
    <nav>
        <a href="../">Go Back</a>
        <p>AlfaSoft Pedro Caires</p>
    </nav>

    <div id="contactlist">
    @if ($errors->any())
        <div class="alert ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @isset($response)
        <p>{{$response}}</p>
    @endisset
    <table>
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Email Address</th>
            
        </tr>
        <tr>
            <form method="POST">
                @csrf
                <td><input type="text" name="name" minlength="5" required/></td>
                <td><input type="number" name="contact" required/></td>
                <td><input type="email" name="email_address" required/></td>
                <td><input type="submit"/></td>
            </form>
        </tr>
    </table>
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