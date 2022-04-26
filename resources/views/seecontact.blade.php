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
        <a href="../Edit/{{$contact->id}}">Edit Contact</a>
        <p>AlfaSoft Pedro Caires</p>
    </nav>
    <div id="contactlist">
        <p>ID: {{$contact->id}}</p>
        <p>Name: {{$contact->name}}</p>
        <p>Contact: {{$contact->contact}}</p>
        <p>Email Address: {{$contact->email_address}}</p>
        <p>Created At: {{$contact->created_at}}</p>
        <p>Last Time Edited: {{$contact->updated_at}}</p>
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