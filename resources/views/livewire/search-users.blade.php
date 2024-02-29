<div>
    
    <label for="search">Cerca Utenti:</label>
    <input type="text" id="search" wire:model.live="search">
    
    <div class="container-fluid">
        <div class="row">
            @foreach ($users as $user )
            
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <h4 class="card-title">{{$user->name}}</h4>
                    <h4 class="card-text">{{$user->email}}</h4>
                </div>
            </div> 
            
            @endforeach
            
        </div>
    </div>
    
</div>