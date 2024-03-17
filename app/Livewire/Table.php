<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class Table extends Component
{

    // public $data = [];



    // public function mount()
    // {
    //     $this->data = Post::all();
    // }

    public function delete(Post $post)
    {
        $post->delete();
    }

    public function render()
    {
        return view('livewire.table', [
            'data' => Post::all()
        ]);
    }
}
