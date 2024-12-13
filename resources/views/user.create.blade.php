<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('user.store')}}" method="POST">
Név:<input type="text" name="people_name" id="people_name"><br>
        <input type="submit" value="Szubmit">
</form>
</body>
</html>