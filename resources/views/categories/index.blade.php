<x-layout-main>
    <x-navbar/>
    <h1>ARTICOLI</h1>

    @if(session()->has('success'))
    <h5 class="text-danger">{{session('success')}}</h5>
    @endif

    <div id="Container-Categorie" class="row">
       
    @if($categorie==NULL)<p>Nessun articolo disponibile.</p>
    
    @else
    
    @foreach($categorie as $chiave => $categoria)
    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$categoria->name}} </h5>
            <a href="{{route('categories.edit',$categoria->id)}}" class="card-link">Modifica</a>
            <form action="{{route('categories.destroy',$categoria->id)}}" method="POST">
                @csrf 
                @method('DELETE')
                <button class="text-danger" type="submit">Elimina</button>
            </form> 
        </div>
    </div>
    
    @endforeach
    
    @endif
       
    </div>
</x-layout-main>