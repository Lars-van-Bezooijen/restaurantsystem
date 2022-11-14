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
    <div class="container">
        <h1>Maak uw bestelling</h1>

        <form action="" method="">
            @csrf
            <div class="form-group">
                <label for="table_number">Tafel nummer</label>
                <input type="text" name="table_number" id="table_number" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Bestelling plaatsen</button>
        </form>
    </div>
</body>
</html>