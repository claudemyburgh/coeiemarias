<?php

namespace App\Listeners;

use App\Mail\EmailToAdmin;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailToAdmin
{

    // public $data;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        Mail::to(config('mail.from.address'), config('mail.from.name'))->queue(new EmailToAdmin($event->form));
    }
}
