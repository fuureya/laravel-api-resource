<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Livewire\Attributes\Title;

class Index extends Component
{
    #[Title('Kontak')]
    public function render()
    {
        return view('livewire.posts.index');
    }
}
