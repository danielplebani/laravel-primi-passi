<!-- 
Per prima cosa, creiamo un nuovo progetto Laravel 10, utilizzando questo comando: composer create-project laravel/laravel laravel-primi-passi
Al termine dell'installazione, entriamo nella cartella del progetto cd laravel-primi-passi e avviamo l'artisan serve con uno di questi due comandi: php artisan serve oppure php -S localhost:8000 -t public

A questo punto, iniziamo a prendere confidenza con le rotte e le views: cancelliamo la view welcome.blade.php e creiamo una nostra homepage. Facciamo quindi sì che la rotta / visualizzi home.blade.php 
Inizialmente stampiamo un Hello World, poi passiamo dei dati alla view in modo da visualizzarli dinamicamente con Blade.

Bonus:
Creiamo più di una pagina e visualizziamo un header menu con i link di tutte le pagine, utilizzando la funzione route()
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--bootstrap-css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="bg-info">
    <nav class="navbar navbar-expand-lg bg-primary px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Laravel</a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./features.blade.php">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pricing.blade.php">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h1 class="text-center my-5">Hello World!!!</h1>

    <main class="px-5">
        <div class="mb-4">
            <h3>LISTA DELLA SPESA</h3>
            <ul>
                <li>{{ $spesa['prodotto1'] }}</li>
                <li>{{ $spesa['prodotto2'] }}</li>
                <li>{{ $spesa['prodotto3'] }}</li>
            </ul>
        </div>

        <div>
            <h3>PERSONE DA CONTARE</h3>
            <ul>
                @foreach ($persone as $persona)
                <li>{{$persona}}</li>
                @endforeach
            </ul>
        </div>
    </main>





    <!--boostrap-js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>