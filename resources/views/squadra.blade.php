<x-layout>


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
        <div class="container-fluid d-flex users-height bg-dark justify-content-evenly">
            <div class="row h-100 justify-content-center align-items-center">
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

    <div class="container-fluid bg-primary">
        <div class="row text-center justify-content-center">
            <div class="col-12 col-md-3">
                <h2 class="bolder shadow  bg-warning display-3">Commenti</h2>
                <a href="{{route('squadra.commenti')}}" class="btn btn-dark mt-5" role="button">Clicca qui per inserire un commento</a>
            </div>
        </div>
        <section>
            <div class="container users-height">
                <div class="row h-100 justify-content-around align-items-center">
                    @foreach ($comments as $comment)
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comment->name }} {{ $comment->surname }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $comment->date }}</h6>
                                <p>{{ $comment->comment }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>



</x-layout>