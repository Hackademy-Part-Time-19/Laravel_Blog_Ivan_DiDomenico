<x-layout-main>
    <x-navbar/>
    <h2>Manga per genere:</h2>
    <div class="container">
        <div class="row">
            
                @foreach ($manga as $card)
                <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$card['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{$card['title']}}</h3>
                        <p class="card-text">{{$card['synopsis']}}</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                </div>
                @endforeach
        </div>
    </div>
</x-layout-main>