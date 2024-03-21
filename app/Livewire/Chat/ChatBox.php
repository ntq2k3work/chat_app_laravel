<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class ChatBox extends Component
{
    public $selectedConversation;
    public $body;
    public $loadedMessages;


    public function loadedMessages(){
        $this -> loadedMessages = Message::where('conversation_id',$this -> selectedConversation -> id) -> get();
    }

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
    public function mount(){
        $this -> loadedMessages();
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }
}
