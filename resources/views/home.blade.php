<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="#">AlfaSoft Pedro Caires</a>
    </nav>

    <div id="contactlist">
    <div class="links">
        <a href="../CreateContact">Create Contact</a>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        @forelse ($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->name}}</td>
            <td>
                <a href="../Del/{{$contact->id}}">Delete</a>
                <a href="../See/{{$contact->id}}">See</a>
                <a href="../Edit/{{$contact->id}}">Edit</a>
            </td>
        </tr>
        @empty
        <p>No contacts found</p>    
        @endforelse
    </table>
    </div>

</body>
</html>