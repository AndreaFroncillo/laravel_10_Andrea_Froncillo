<x-layout>
    
  

    <header>
        <div class="container-fluid tickets">
            <div class="row h-100 justify-content-center">
                <div class="row">
                    <h2 class="display-5 text-white text-center text-color">Biglietti Disponibili</h2>
                </div>
                @foreach ($tickets as $ticket)
                <div class="col-12 col-md-3">
                    <x-card 
                    id="{{$ticket['id']}}"
                    settore="{{$ticket['settore']}}"
                    posto="{{$ticket['posto']}}"
                    img="{{$ticket['img']}}"
                    />
                </div>
                @endforeach
            </div>
        </div>
    </header>

</x-layout>