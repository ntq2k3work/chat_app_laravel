<?php

namespace App\Livewire\Chat;

use Livewire\Component;

class ChatBox extends Component
{
    public $selectedConversation;
    public $body;

    public function sendMessage(){
        $this -> validate(['body' => 'required|string']);

        $createdMessage = Message::create([
            'conversation_id' => $this -> selectedConversation -> id,
            'sender_id' => auth() -> id(),
            'receiver_id' => $this -> selectedConversation -> getReceiver() -> id,
            'body' => $this -> body,
        ]);

        $this -> reset('body'); 
    }
    public function render()
    {
        return view('livewire.chat.chat-box');
    }
}
