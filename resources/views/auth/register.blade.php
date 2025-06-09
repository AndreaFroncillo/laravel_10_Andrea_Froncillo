<x-layout>
    <header>
        <div class="container-fluid header">
            @if(session()->has('emailSent'))
            <div class="alert alert-success">
                {{session('emailSent')}}
            </div>
            @endif
            @if(session()->has('emailError'))
            <div class="alert alert-danger">
                {{session('emailError')}}
            </div>
            @endif
            @if(session()->has('successMessage'))
            <div class="alert alert-success">
                {{session('successMessage')}}
            </div>
            @endif
            <div class="row h-100">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h1 class="text-light display-1 fw-bold text-color">Registrati</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}" class="p-4 shadow rounded bg-body-secondary w-75">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Inserisci la tua mail</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>