<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;
    public $sign_up;
    public $sign_in;
    public $sign_up_prof;
    public $sign_in_prof;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($sign_up)
    {
        $this->sign_up = $sign_up;
    }

    public function __constructx($sign_in)
    {
        $this->sign_in = $sign_up;
    }

    public function __constructxx($sign_up_prof)
    {
        $this->sign_up_prof = $sign_up_prof;
    }
    
    public function __constructxxx($sign_in_prof)
    {
        $this->sign_in_prof = $sign_in_prof;
    }


    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('🐦UFC-TWITO🐦')->view('emails.sign_up_user');  
        return $this->subject('🐦UFC-TWITO🐦')->view('emails.sign_in_user');
        return $this->subject('🐦UFC-TWITO🐦')->view('emails.sign_up_prof');
        return $this->subject('🐦UFC-TWITO🐦')->view('emails.sign_in_prof');
        
    }
}
