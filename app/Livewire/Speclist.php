<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class Speclist extends Component
{
    use WithPagination;

    public $amount =4;

    public function loadMore(){
        $this->amount += 4;
    }
    public function render()
    {
        $posts = Post::take($this->amount)->get();


        return view('livewire.speclist', ['posts' => $posts]);
    }


}
