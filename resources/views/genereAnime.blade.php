<x-layout-main>
    
    <x-navbar/>
    <div class="container">
        <div class="row">
            
                @foreach ($anime as $card)
                <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{$card['images']['jpg']['image_url']}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{$card['title']}}</h3>
                        <p class="card-text">{{$card['synopsis']}}</p>
                        <h6>{{$card['duration']}}</h6>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                </div>
                @endforeach
        </div>
    </div>
</x-layout-main>