<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($gift_types as $gift_type)
    {{$gift_type->gift_type}} <br>
@endforeach
</body>
</html>