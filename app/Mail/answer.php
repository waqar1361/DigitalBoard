<?php

namespace App\Mail;

use App\faq;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class answer extends Mailable {
    
    use Queueable, SerializesModels;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $faq;
    
    public function __construct(faq $faq)
    {
        $this->faq = $faq;
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
