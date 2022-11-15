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
            <h1>Wat is uw tafel nummer</h1>


                <div class="form-group">
                    <input type="text" name="table_number" id="table_number" class="form-control mid-text">
                </div>
                <div class="form-group">
                    <button id="table_form" class="mid-btn btn btn-primary">Volgende</button>
                </div>

        </div>
    </div>
</body>
<script>
    const isEmpty = str => !str.trim().length;
    
    let $table_number =  document.getElementById("table_number");
    let $table_form = document.getElementById("table_form");

    

    $table_form.addEventListener("click", function(){
        if(isEmpty($table_form.value))
        {
            alert("Vul een tafel nummer in");
        }
        else
        {
            alert("Tafel nummer is " + $table_number.value);
        }



        // let table_number = $table_number.value;

        // var url = '{{ route("order.order", ":table") }}';
        // url = url.replace(':table', table_number);        

        // window.location.href=url;
    });


    


    

</script>
</html>