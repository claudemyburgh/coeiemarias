<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailToAdmin extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public $event;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($event)
    {
        $this->event = $event;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        return $this
            ->subject($this->event['subject'])
            ->markdown('emails.form.admin')
            ->with([
                'name' => $this->event['name'],
                'email' => $this->event['email'],
                'phone' => $this->event['phone'],
                'subject' => $this->event['subject'],
                'message' => $this->event['message']
            ]);
    }
}
