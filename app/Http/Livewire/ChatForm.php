<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChatForm extends Component
{
    public $name;
    public $message;

    public function mount(){
        $this->name = "";
        $this->message = "";
    }

    public function render()
    {
        return view('livewire.chat-form');
    }

    public function sendMessage(){
        // Save message
        // Message::create([
        //     'message'   =>  $this->message
        // ]);
        $this->validate([
            "name"      =>  "required|min:3",
            "message"   =>  "required"
        ]);

        $this->emit("messageSuccess");

        $data = [
            "user"      => $this->name,
            "message"   => $this->message
        ];

        $this->emit("messageRecived", $data);
    }
}
