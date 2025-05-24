<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INTER</title>
    <!-- CDN BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <!-- CDN BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <!-- CSS CUSTOM -->
     <link rel="stylesheet" href="/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('homepage')}}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('squadra')}}">Squadra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contacts')}}">Contatti</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">I nostri servizi</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('ticket.list')}}" class="dropdown-item">Biglietti disponibili</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container-fluid header">
            <div class="row h-100">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h1 class="text-light display-1 fw-bold text-color">INTER</h1>
                </div>
            </div>
        </div>
    </header>

    

    








    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>