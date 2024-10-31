<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        // You can pass any data needed for the email here
    }

    public function build()
    {
        return $this->view('emails.test') // Ensure this view exists
                    ->subject('Test Email');
    }
}
