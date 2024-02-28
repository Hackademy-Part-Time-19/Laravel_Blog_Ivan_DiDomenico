<x-layout-main>
    <x-navbar/>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$articles['title'];}} </h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$articles['category'];}}</h6>
            @foreach ($articles->categories as $category)
            <h6>{{$category->name}}</h6>
            @endforeach
            <p class="card-text">{{$articles['description'];}}</p>
        </div> 
    </x-layout-main>