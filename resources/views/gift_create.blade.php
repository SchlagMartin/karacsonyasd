<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('gift.store')}}" method="POST">
Gift_Név:<input type="text" name="gift_name" id="gift_name"><br>
        Ár:<input type="number" name="price" id="price"><br>
        <input type="submit" value="Szubmit">
</form>
</body>
</html>