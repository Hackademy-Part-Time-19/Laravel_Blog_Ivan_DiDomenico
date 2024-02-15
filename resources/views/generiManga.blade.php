<x-layout-main>
    <x-navbar/>

    <h2>Generi Manga</h2>
    
    @foreach ( $dati as $manga )
        
    @endforeach
    <ul>
       <li><a href="{{route('genere.manga',['id'=>$manga['mal_id']])}}"> {{$manga['name']}}</li> 
    </ul>

</x-layout-main>