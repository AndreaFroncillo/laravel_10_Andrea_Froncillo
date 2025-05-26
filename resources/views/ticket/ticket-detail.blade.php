<x-layout>
    


    <header>
        <div class="container-fluid tickets">
            <div class="row h-100 justify-content-center">
                <div class="row">
                    <h2 class="display-5 text-white text-center text-color">Dettaglio Biglietto</h2>
                </div>
                <div class="col-12 col-md-6 text-white d-flex flex-column justify-content-center align-items-center">
                    <h3>Settore {{$ticket['settore']}}</h3>
                    <h4>Posto {{$ticket['posto']}}</h4>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="{{$ticket['img']}}" alt="Stadio San Siro" class='img-fluid'>
                </div>
            </div>
        </div>
    </header>

</x-layout>