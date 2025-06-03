<x-layout>
    <div class="container-fluid vh-100 bg-primary">
        <div class="row">
            <h2>Inserisci qui un commento da far vedere alla squadra</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('commenti.aggiungi')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="surname" class="form-label">Cognome</label>
                        <input type="text" name="surname" class="form-control" id="surname" aria-describedby="surnameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Data Pubblicazione</label>
                        <input type="date" name="date" class="form-control" id="date" aria-describedby="dateHelp">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Scrivi qui un messaggio per la squadra</label>
                        <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-dark">Commenta</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>