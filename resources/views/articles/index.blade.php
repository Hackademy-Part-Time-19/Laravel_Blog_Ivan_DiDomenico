<x-layout-main>
    <x-navbar/>
    <h1>ARTICOLI</h1>
    
    @if(session()->has('success'))
    <h5 class="text-danger">{{session('success')}}</h5>
    @endif
    
    <div id="Container-Articoli" class="row">
        
        @if($articoli==NULL)<p>Nessun articolo disponibile.</p>
        
        @else
        
        @foreach($articoli as $chiave => $articolo)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$articolo['title'];}} </h5>
                @foreach ($articolo->categories as $category)
                <h6>{{$category->name}}</h6>
                @endforeach
                <p class="card-text">{{$articolo['description'];}}</p>
                <a class="btn btn-primary" href="{{route('articles.show',$articolo->id)}}">Dettaglio</a>
                <a class="btn btn-primary" href="{{route('articles.edit',$articolo->id)}}">Modifica</a>
                <form action="{{route('articles.destroy',$articolo->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </div> 
        </div>
        @endforeach
        
        @endif
        
    </div>
</x-layout-main>