<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Create User

    <form method="post" action="{{route('user.update', ['id'=>$user->id])}}">
        @csrf
        <input type="text" name="name" placeholder="enter your name" value="{{$user->name}}">
        <input type="email" name="email" placeholder="enter your email" value="{{$user->email}}">
        <input type="password" name="repassword" placeholder="enter your repassword" value="{{$user->repassword}}">
        <input type="submit" value="Update">
    </form>
</body>
</html>