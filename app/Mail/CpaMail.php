<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CpaMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data = [];
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


 $this->from($this->data['from']);
        $this->subject($this->data['subject']);
        if(isset($this->data['attach']) && $this->data['attach'] != '') {
              $this->attach($this->data['attach']['pathname'], [
                'as' => $this->data['attach']['originalName'],
                'mime' => $this->data['attach']['mimeType']
            ]);
        }
        $this->view($this->data['view']);

    }
}
