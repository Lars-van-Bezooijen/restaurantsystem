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
        <div class="box tall">
            <h1>Maak uw bestelling</h1>
            <p>Order voor tafel {{ $table_order->number }}</p>

            {{-- radio input with categories  --}}
            <input checked="checked" type="radio" id="all" name="category" value="all">
            <label for="all">Alles</label>
            @foreach($categories as $category)
                <input type="radio" id="{{ $category->id }}" name="category" value="{{ $category->id }}">
                <label for="{{ $category->id }}">{{ $category->name }}</label>
            @endforeach

            
            
        </div>
    </div>
</body>
{{-- <script>
    // send user to order.order route on radio change
    document.querySelectorAll('input[name="category"]').forEach((input) => {
        input.addEventListener('change', (event) => {
            window.location.href = '/order//' + event.target.value;
        });
    });
</script> --}}
</html>