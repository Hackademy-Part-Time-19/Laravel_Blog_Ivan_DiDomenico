<x-layout-main>
        <x-navbar/>

    <h2>Generi Anime:</h2>

            @foreach ($dati as $anime)
            <ul>
                    <li><a href="{{route('genere.anime',['id'=>$anime['mal_id']])}}">{{$anime['name']}}</a></li>
            </ul> 
            @endforeach

</x-layout-main>