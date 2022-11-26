<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="text" name="name">
        <input type="submit" name="signup" value="Signup">
        <a href="{{route('login')}}">Goole Login</a>
    </form>
</body>

</html>