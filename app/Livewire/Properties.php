<?php

namespace App\Livewire;

use Livewire\Component;

class Properties extends Component
{

    public $todo = "";

    public $todos = [
        'lorem ipsum',
        'dolor',
        'sit amet',
        'aramugam'
    ];

    public function add()

    {
        $this->todos[] = $this->todo;

        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.properties');
    }
}
