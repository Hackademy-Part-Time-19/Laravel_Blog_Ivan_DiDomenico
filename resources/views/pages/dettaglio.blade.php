<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>Document</title>
</head>
<body>
  
    <a href="{{route('articoli')}}">Articoli</a>
    <a href="{{route('contatti')}}">Contatti</a>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$articoli['titolo'];}} </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$articoli['categoria'];}}</h6>
            <p class="card-text">{{$articoli['descrizione'];}}</p>
            <a href="#" class="card-link">Card link</a>
        </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html
