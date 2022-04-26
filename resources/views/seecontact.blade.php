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
    <a href="../Edit/{{$contact->id}}">Edit Contact</a>
    <p>ID: {{$contact->id}}</p>
    <p>Name: {{$contact->name}}</p>
    <p>Contact: {{$contact->contact}}</p>
    <p>Email Address: {{$contact->email_address}}</p>
    <p>Created At: {{$contact->created_at}}</p>
    <p>Last Time Edited: {{$contact->updated_at}}</p>
</body>
</html>