<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class WebContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $data;
    public $view;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $data, $view)
    {
        $this->data = $data;
        $this->subject = $subject;
        $this->view = $view;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->subject)->markdown($this->view)
            ->with(['data' => $this->data]);
    }
}
