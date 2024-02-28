<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
        <li>
            {{$err}}
        </li>
        @endforeach
    </ul>
    @endif
    <form action="{{route('food.logstore')}}" method="post">
        @csrf
        @method('post')
        <input type="text" name="name"><br>
        <input type="email" name="email"><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="submit">

    </form>

    <a href="{{route('food.register')}}">Register as a User</a>
</body>
</html>