<x-layout-main>
    <x-navbar/>
    <h1>Crea una categoria</h1>

    @if(session()->has('success'))
    <h5>{{session('success')}}</h5>
    @endif
    <form action="{{route('categories.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input name="name" type="text" class="form-control" id="name">
          </div>
          @error('name')<span class="text-danger">{{ $message }}</span> @enderror
        <button name="submit" class="btn btn-primary">Invia</button>
      </form>
</x-layout-main>