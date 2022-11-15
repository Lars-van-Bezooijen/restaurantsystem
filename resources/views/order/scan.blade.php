<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Welcome</title>
</head>
<body>
    <div class="full-size-center">
        <div class="box">
            <h1 class="text-center">Scan de QR-code om te bestellen</h1>
            <p class="text-center"><img class="large-img" src="{{ (new chillerlan\QRCode\QRCode)->render(route('order.table')) }}" alt=""></p>
            <p class="text-center">of <a href="{{ route('order.table') }}">klik hier</a></p>
        </div>
    </div>
</body>
</html>