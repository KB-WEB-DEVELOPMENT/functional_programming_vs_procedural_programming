<?php

namespace App\Classes;

use Illuminate\Support\Collection;

use App\Classes\Message;

class InMemoryMailer
{
    public array $messages;

    public function hasMessageFor($email):bool
    {

        $messageInfos = new Message(
                                subject:'An example email subject!',
                                recipients:['mail1@gmail.com','mail2@gmail.com','mail3@gmail.com'],
                                body:'Some email body text',
                        );

        $this->messages = [
            'recipients' => $messageInfos->recipients,
        ]; 

        return collect($this->messages)->contains(function ($values, $keys) use ($email) {
            
            $emails = collect($values);
        
            return $emails->contains($email);

        });

    }

}