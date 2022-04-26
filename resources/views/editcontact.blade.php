<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="../">Go Back</a>
    @if ($errors->any())
        <div class="alert alert-danger">
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
    <div>
        <p>Name: {{$contact->name}}</p>
        <p>Contact: {{$contact->email_address}}</p>
        <p>Email Address: {{$contact->id}}</p>
    </div>
    <div>
        <form method="POST">
        @csrf
        <p><input type="text" name="name" minlength="5" value="{{$contact->name}}" required/></p>
        <p><input type="number" name="contact" value="{{$contact->contact}}" required/></p>
        <p><input type="email" name="email_address" value="{{$contact->email_address}}" required/></p>
        <p><input type="submit"/></p>
        </form>
    </div>
</body>
</html>