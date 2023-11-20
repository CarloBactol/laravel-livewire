<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Properties extends Component
{
    public $todo = "";
    public $todos = [
        'Carlo Bactol',
        'Jaime Yao'
    ];

    function add()  {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    

    public function render()
    {
        return view('livewire.properties');
    }
}
