<?php

namespace App\Livewire;

use Livewire\Component;

class Lifecycles extends Component
{

    public $todo = "";

    public $todos = ['aramugam'];

    // mount di gunakan untuk merender data misalnya dari database.. 
    // data yang di rujuk sebaiknya adalah data yang siap di gunakan..
    // public function mount()
    // {
    //     $this->todos = [
    //         'lorem ipsum',
    //         'dolor',
    //         'sit amet',
    //         'aramugam'
    //     ];

    //     $this->todo = 'please submit me....';
    // }



    public function updatedToDo($value)
    {
        $this->todo = strtoupper($value);
    }

    public function add()
    {
        $this->todos[] = $this->todo;
    }

    public function render()
    {
        return view('livewire.lifecycles');
    }
}
