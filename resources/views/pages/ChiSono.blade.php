<x-layout-main>
    <x-slot:title>{{$titolo}}<x/-slot>
    <x-navbar/>
    <h1>Chi sono</h1>

    @if(session()->has('success'))
    <h5>{{session('success')}}</h5>
    @endif
    <form action="{{route('contact.send')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input name="name" type="name" class="form-control" id="name">
          </div>
        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input name="email" type="email" class="form-control" id="email">
        </div>
        <div class="mb-3">
          <label for="messaggio" class="form-label">Messaggio</label>
          <input name="messaggio" type="text" class="form-control" id="messaggio">
        </div>
        <button name="submit" class="btn btn-primary">Invia</button>
      </form>
</x-layout-main>