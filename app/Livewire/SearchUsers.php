<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchUsers extends Component
{
    
    public $users;
    public $search = "Inserisci la ricerca utente";
    
    public function render()
    {
        if($this->search=="Inserisci la ricerca utente"){
            $this->users = User::all();
        }
        else{
            $this->users= User::where('name', 'like','%'.$this->search.'%')->get();
        }
        
        return view('livewire.search-users');
    }
}
