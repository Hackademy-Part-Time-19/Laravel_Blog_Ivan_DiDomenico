<x-layout-main>
    <x-slot:title>{{$titolo}}<x/-slot>
    <x-navbar/>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$articoli['title'];}} </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$articoli['category'];}}</h6>
            <p class="card-text">{{$articoli['description'];}}</p>
        </div> 
    </x-layout-main>