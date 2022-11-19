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

            @foreach($categories as $category)
                <h2 class="category">{{ $category->name }}</h2>
                <div class="grid">
                    @foreach($category->consumables as $consumable)
                        @if($consumable->category_id == $category->id)
                            <div class="grid-item">
                                <div class="product-top">
                                    <div class="product-flex">
                                        <p class="product-name">{{ $consumable->name }}</p>
                                    </div>
                                    <div class="product-flex">
                                        <p class="product-price">&euro;{{ number_format($consumable->price, 2, ",", ".") }}</p>
                                        <button id="addBtn-{{$consumable->id}}" class="add-product" id="add-product">+</button>
                                    </div>
                                </div>
                                <p class="product-description">{{ $consumable->description }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
            
            <section>
                <h1 class="list">Uw bestellijst</h1>
                <p>Bestelling voor tafel {{ $table_order->number }}</p>
                <div class="alert alert-warning">
                    <p class="m-0">U heeft nog niks in uw bestelling</p>
                </div>
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div  id="inputCollection" class="form-group">
                        <input type="hidden" name="table_id" value="{{ $table_order->id }}">
                    </div>
                    <div class="form-group">
                        {{-- add disabled on default if 0 products --}}
                        <button class="btn btn-primary" type="text" type="submit">Bestelling afronden</button>
                    </div>
                </form>
            </section>

        </div>
    </div>

    <script>

        for(let i = 1; i <= {{$consumableCount}}; i++) {
            document.getElementById("addBtn-" + i)
                .addEventListener("click", function(e ) {
                    let name = e.composedPath()[2].children[0].textContent;
                    // console.log(e.composedPath()[2].children[1].children[0].textContent);
                    document.getElementById("inputCollection")
                    .innerHTML += `
                        <input class="form-control" type="text" disabled id="" value="${name}">
                        <input class="form-control" name="consumable[]" type="hidden" id="" value="${i}">
                    `;
                });
        }
    </script>
</body>
</html>