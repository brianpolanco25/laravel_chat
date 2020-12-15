<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatList extends Component
{
    public $messages;

    protected $listeners = ["messageRecived"];

    public function mount(){
        $this->messages = [];
    }

    public function messageRecived($message){
        $this->messages[] = $message;
    }

    public function render()
    {
        return view('livewire.chat-list');
    }
}
