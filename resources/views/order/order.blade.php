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

            @foreach($categories as $category)
                <h2 class="category">{{ $category->name }}</h2>
                <div class="grid">
                    @foreach($consumables as $consumable)
                        @if($consumable->category_id == $category->id)
                        <div class="grid-item">
                            <p>{{ $consumable->name }}</p>
                            <p>&euro;{{ number_format($consumable->price, 2, ",", ".") }}</p>
                            <p>{{ $consumable->description }}</p>
                            <button class="add-product" id="add-product">Voeg toe</button>
                        </div>
                        @endif
                    @endforeach
                </div>
            @endforeach   
        </div>
    </div>
</body>
<script>
    // Get all the buttons by class
    var buttons = document.getElementsByClassName("add-product");
    // add event listener to all the buttons
    for(var i = 0; buttons.length > i; i++){

    }


    // const addProduct = document.getElementById('add-product');
    // addProduct.addEventListener('click', function() {
    //     addProduct.classList.add('added');
    //     addProduct.innerHTML = 'Toegevoegd';

    //     setTimeout(function() {
    //         addProduct.classList.remove('added');
    //         addProduct.innerHTML = 'Voeg toe';
    //     }, 2000);
    // });


    // var addProduct = document.getElementsByClassName("add-product");
    // for (var i = 0; i < addProduct.length; i++) {
    //     addProduct[i].addEventListener('click', function() {
    //         addProduct[i].classList.add('added');
    //         addProduct[i].innerHTML = 'Toegevoegd';

    //         setTimeout(function() {
    //             addProduct[i].classList.remove('added');
    //             addProduct[i].innerHTML = 'Voeg toe';
    //         }, 2000);
    //         });
    // }
</script>
</html>