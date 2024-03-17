<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;

class Table extends Component
{


    #[Title('Add Title')]
    public $title = [];
    public $coment = [];

    public function add()
    {
        Post::insert([
            'title' => $this->title,
            'coment' => $this->coment
        ]);

        $this->reset('title');
        $this->reset('coment');
    }

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
