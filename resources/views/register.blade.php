<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Register</h1>
    <form action="{{route('food.regstore')}}" method="post">
    @csrf
    @method('post')
    <input type="text" name="name"><br>
    <input type="email" name="email"><br>
    <input type="password" name="password"><br><br>
    <input type="submit">
    </form>
</body>
</html>