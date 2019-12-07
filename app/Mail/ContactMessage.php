<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The request instance.
     *
     * @var Request
     */
    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Request $message)
    {
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message')
            ->subject('Mensaje de contacto')
            ->replyTo($this->message->email)
            ->with([
                'name' => $this->message->name,
                'email' => $this->message->email,
                'phone' => $this->message->phone,
                'msg' => $this->message->message,
            ]);
    }
}
