<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatList extends Component
{
    public $messages;

    public function mount(){
        $this->messages = [];
    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}
