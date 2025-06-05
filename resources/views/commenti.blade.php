<x-layout>
    <div class="container-fluid vh-100 bg-primary">
        <div class="row">
            <h2>Inserisci qui un commento da far vedere alla squadra</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{route('commenti.aggiungi')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" value="{{old('name')}}">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input type="text" name="surname" class="form-control" id="surname" aria-describedby="surnameHelp" value="{{old('surname')}}">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Data Pubblicazione</label>
                        <input type="date" name="date" class="form-control" id="date" aria-describedby="dateHelp" value="{{old('date')}}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci un'immagine allo stadio</label>
                        <input type="file" name="img" class="form-control" id="img" aria-describedby="imgHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Scrivi qui un messaggio per la squadra</label>
                        <textarea name="comment" id="message" cols="30" rows="10" class="form-control">{{old('comment')}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Commenta</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>