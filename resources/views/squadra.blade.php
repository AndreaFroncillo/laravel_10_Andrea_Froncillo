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
        <div class="container-fluid header-squadra">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="col-6">
                    <h2 class="text-light text-color text-center">SQUADRA</h2>
                    <p class="text-white text-color">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam quo quibusdam illo non? Repudiandae dolore qui architecto deleniti minus harum, quibusdam asperiores maxime laudantium unde, quae blanditiis suscipit ipsum accusamus!</p>
                </div>
                <div class="col-6">
                    <img src="/media/InterTeam.jpg" alt="foto del team" class="shadow rounded">
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container users-height">
            <div class="row h-100 justify-content-around align-items-center">
                @foreach ($users as $user)
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$user['name']}} {{$user['surname']}}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
                                <a href="{{route('squadraDetail', ['name'=>$user['name']])}}" class="card-link">Leggi di piu'</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    

    








    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>