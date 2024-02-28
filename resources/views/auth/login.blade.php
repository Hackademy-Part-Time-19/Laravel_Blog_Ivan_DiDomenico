<x-layout-main>
    <x-navbar/>

    <h2>Effettua il login</h2>
    
    <div class="container">
        <div class="row">
    <form action="/login" method="POST">
        @csrf
        <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
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
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
</div>
</x-layout-main>