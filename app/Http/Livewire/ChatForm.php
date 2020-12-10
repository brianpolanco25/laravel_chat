<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $name;

    public function mount(){
        $this->name = "";
    }
    public function render()
    {
        return view('livewire.chat-form');
    }
}
