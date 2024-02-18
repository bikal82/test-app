<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Create User

    <form method="post" action="{{route('user.store')}}">
        @csrf
        <input type="text" name="name" placeholder="enter your name">
        <input type="email" name="email" placeholder="enter your email">
        <input type="password" name="password" placeholder="enter your password">
        <input type="password" name="repassword" placeholder="enter your repassword">
        <input type="submit" name="submit">
    </form>
</body>
</html>