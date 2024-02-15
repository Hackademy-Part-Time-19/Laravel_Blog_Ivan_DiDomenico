<x-layout-main>
    <x-slot:title>{{$titolo}}<x/-slot>
    <x-navbar/>
    <h1>ARTICOLI</h1>

    <div id="Container-Articoli" class="row">
       
    @if($articoli==NULL)<p>Nessun articolo disponibile.</p>
    
    @else
    
    @foreach($articoli as $chiave => $articolo)
    
    <x-card 
    :titolo="$articolo['title']"
    :categoria="$articolo['category']"
    :descrizione="$articolo['description']"
    :chiave="$chiave"
    :image="$articolo['image']"
    />
    
    @endforeach
    
    @endif
       
    </div>
</x-layout-main>