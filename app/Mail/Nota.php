<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Nota extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $details;


    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $images = public_path('/'.$this->details['qrcode']);
        return $this->subject('Update Pembuatan Legalitas')
        ->view('email.nota')
        ->with([
            'details', $this->details,
            'images' => $images
        ]);
    }
}
