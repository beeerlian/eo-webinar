<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EventMail extends Mailable
{
    use Queueable, SerializesModels;

    public $event;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $event)
    {
        $this->user = $user;
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('certificate', ['user' => $this->user, 'event' => $this->event]);
    }
}
