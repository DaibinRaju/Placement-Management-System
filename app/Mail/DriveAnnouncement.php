<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DriveAnnouncement extends Mailable
{
    use Queueable, SerializesModels;
    public $drive;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($drive)
    {
        $this->drive=$drive;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Campus Drive Notification')->markdown('emails.driveannounce');
    }
}
