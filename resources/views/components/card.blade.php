<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{{$titolo}} </h5>
        <img src="{{Storage::url($image)}}" alt="img">
        <h6 class="card-subtitle mb-2 text-body-secondary">{{$categoria}}</h6>
        <p class="card-text">{{$descrizione}}</p>
        <a href="{{route('articles.show',$id)}}" class="card-link">Dettaglio</a>
        <a href="{{route('articles.edit',$id)}}" class="card-link">Modifica</a>
        <form action="{{route('articles.destroy',$id)}}" method="POST">
            @csrf 
            @method('DELETE')
            <button class="text-danger" type="submit">Elimina</button>
        </form> 
    </div>
</div>