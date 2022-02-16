<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('show', 5) }}" method="GET">
        @csrf

        <input type="submit" name="submit" value="edit" id="">
    </form>
</body>
</html>