<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $err)
        <li>
            {{$err}}
        </li>
        @endforeach
    </ul>
    @endif
    <form action="{{route('food.include')}}" method="post">
        @csrf
        @method('post')
        <input type="text" name="name"><br>
        <input type="text" name="type"><br>
        <input type="text" name="qty"><br><br>
        <input type="submit">
    </form>

    <table border=2 width="50%">
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>QTY</th>
        </tr>
        @foreach($table as $val)
        <tr>
            <td>{{$val->name}}</td>
            <td>{{$val->type}}</td>
            <td>{{$val->qty}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>