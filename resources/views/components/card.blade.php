<div class="card mb-3" style="width: 18rem;">
    <img src="{{$img}}" class="card-img-top card-img" alt="San Siro Settori">
    <div class="card-body">
        <h5 class="card-title">Settore {{$settore}}</h5>
        <p class="card-text">Posto {{$posto}}</p>
        <a href="{{route('ticket.detail', [$id])}}" class="btn btn-primary">Leggi di piu'</a>
    </div>
</div>