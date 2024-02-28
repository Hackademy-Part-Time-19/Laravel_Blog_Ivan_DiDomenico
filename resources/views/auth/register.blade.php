<x-layout-main>
    <x-navbar/>
    <h2>Registrati</h2>

    <div class="container">
        <div class="row">
    <form action="/register" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Nome</label>
            <div class="col-sm-10">
                <input name="name" type="text" class="form-control" id="name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input name="email" type="email" class="form-control" id="email">
            </div>
        </div>
        @error('email') <span class="text-danger">{{$message}}</span>@enderror
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input name="password" type="password" class="form-control" id="password">
            </div>
        </div>
        @error('password') <span class="text-danger">{{$message}}</span>@enderror
        <div class="mb-3 row">
            <label for="password_confirmation" class="col-sm-2 col-form-label">Conferma Password</label>
            <div class="col-sm-10">
                <input name="password_confirmation" type="password" class="form-control" id="password-confirmation">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
</div>

</x-layout-main>