<x-layout-main>
    <x-navbar/>
    <h1>Modifica l'articolo</h1>

    @if(session()->has('success'))
    <h5>{{session('success')}}</h5>
    @endif
    <form action="{{route('articles.update',$articles->id) }}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input name="title" type="text" class="form-control" id="title" value={{$articles->title}} >
          </div>
          @error('title')<span class="text-danger">{{ $message }}</span> @enderror

          <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
           @foreach ($categories as $category)
           <div class="form-check">
            <input name="categories[]" class="form-check-input" type="checkbox" value="{{$category->id}}" id="btn{{$category->id}}">
            <label class="form-check-label" for="flexCheckDefault">
              {{$category->name}}
            </label>
          </div>
           @endforeach
          </div>
          @error('category')<span class="text-danger">{{ $message }}</span> @enderror
        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <input name="description" type="text" class="form-control" id="description" value={{$articles->description}}>
        </div>
        @error('description')<span class="text-danger">{{ $message }}</span> @enderror
        <div class="mb-3">
        
        <input name="image" type="file" class="form-control" id="image">
        </div>
        <button name="submit" class="btn btn-primary">Invia</button>
      </form>
</x-layout-main>