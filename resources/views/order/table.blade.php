{{-- 
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

            <form action="" method="">
                @csrf
                <div class="form-group">
                    <label for="table_number">Tafel nummer</label>
                    <input type="text" name="table_number" id="table_number" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Bestelling plaatsen</button>
            </form>
            <h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1><h1>kasjdkas</h1>
        </div>
    </div>
</body>
</html> --}}



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
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <h1>Wat is uw tafel nummer</h1>

            <form action="{{ route('order.tablePost') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="text" name="table_number" id="table_number" class="form-control mid-text">
                </div>
                <div class="form-group">
                    <button type="submit" id="table_form" class="mid-btn btn btn-primary">Volgende</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>