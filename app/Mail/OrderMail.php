<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;



    public function __construct($details)
    {
        $this->details = $details;
    }

    
    public function build()
    {
        return $this->subject('Incoming mail from adoan2552@gmail.com')->view('mail.MailOrder',['details' => $this->details]);
    }
}
