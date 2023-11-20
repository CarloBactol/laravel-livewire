<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class HelloWorld extends Component
{
    public $timestamp;
    public function render()
    {
        $formattedTime = Carbon::createFromTimestamp($this->timestamp)->diffForHumans();
        
        return view('livewire.hello-world', ['formattedTime' => $formattedTime]);
    }
}
