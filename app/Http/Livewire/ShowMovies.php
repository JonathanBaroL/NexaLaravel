<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ShowMovies extends Component
{
    public $title;

    public $search = "";

    public function mount($title){
        $this->title = $title;
    }

    public function render()
    {
        // Sacar peliculas de API
        $movies = Http::get('https://www.omdbapi.com/?s=Batman&page=1&apikey=f1a6aefc');
        $movies = $movies->object();
        $movies = $movies->Search;
        return view('livewire.show-movies', compact('movies') ?? []);
    }
}
