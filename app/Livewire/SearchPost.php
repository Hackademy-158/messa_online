<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPost extends Component
{
    public $search = "";

    public function render()
    {
        //! se non sto effettuando nessuna ricerca, mi fai vedere tutti i post presenti nel db, altrimenti mi fai vedere i post che nel titolo contengono quello che sto cercando
        if(!$this->search){
            $posts = Post::all();
        } else {
            //$posts = Post::where('title', $this->search)->get();
            $posts = Post::where('title', 'like', "%$this->search%")
                        ->orWhere('content', 'like', "%$this->search%")
                        ->get();
        }
        return view('livewire.search-post', compact('posts'));
    }
}
