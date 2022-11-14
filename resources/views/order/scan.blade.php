<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <div class="container full-size-center">
        <h1 class="text-center">Scan de QR-code om te bestellen</h1>
        <p class="text-center"><a href="{{ route('order.order') }}"><img src="{{ (new chillerlan\QRCode\QRCode)->render(route('order.order')) }}" alt=""></a></p>
    </div>
</body>
</html>