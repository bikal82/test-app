<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('user.create')}}">Create User</a>
    <table>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>RePassword</th>
          <th>Action</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->repassword}}</td>
            <td>
                <a href="{{route('user.edit', ['id'=>$user->id])}}">Edit</a>
                <a href="{{route('user.delete', ['id'=>$user->id])}}">Delete</a>
            </td>
          </tr>
        @endforeach
        
        
      </table>
      
</body>
</html>