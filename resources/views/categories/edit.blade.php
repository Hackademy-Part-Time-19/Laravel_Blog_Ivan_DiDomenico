<x-layout-main>
    <x-navbar/>
    <h1>Modifica la categoria</h1>

    @if(session()->has('success'))
    <h5>{{session('success')}}</h5>
    @endif
    <form action="{{route('categories.update',$category->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input name="name" type="text" class="form-control" id="name" value={{old($category['name'])}} >
          </div>
          @error('name')<span class="text-danger">{{ $message }}</span> @enderror
        <button name="submit" class="btn btn-primary">Invia</button>
      </form>
</x-layout-main>