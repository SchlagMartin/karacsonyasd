<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('gift_type.store')}}" method="POST">
Type:<input type="text" name="type" id="type"><br>
        <input type="submit" value="Szubmit">
</form>
</body>
</html>