<?php

namespace App\Mail;

use App\Inquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AnswerInquiry extends Mailable {
    
    use Queueable, SerializesModels;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $inquiry;
    
    public function __construct(Inquiry $inquiry)
    {
        $this->inquiry = $inquiry;
    }
    
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.answer');
    }
}
