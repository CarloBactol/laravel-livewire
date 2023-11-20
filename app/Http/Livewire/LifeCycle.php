<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LifeCycle extends Component
{
    public $todo = '';
    public $todos = [];

    function add()  {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    function mount()  {
      
    }

    public function render()
    {
        return view('livewire.life-cycle');
    }
}
