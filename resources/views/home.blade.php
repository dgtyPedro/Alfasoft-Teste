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
        <a href="../CreateContact">Create Contact</a>
        <p>Timezone: Europe/Lisbon ({{date('Y-m-d H:i:s')}})</p>
        <p>AlfaSoft Pedro Caires</p>
    </nav>

    <div id="contactlist">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            @if (Session::get('logged_in'))
                <th>Actions</th>
            @endif   
        </tr>
        @forelse ($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->name}}</td>
            @if (Session::get('logged_in'))
                <td>
                    <a href="../See/{{$contact->id}}">See</a>
                    <a href="../Edit/{{$contact->id}}">Edit</a>
                    <a href="../Del/{{$contact->id}}">Delete</a>
                </td>
            @endif
        </tr>
        @empty
        <p>No contacts found</p>    
        @endforelse
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