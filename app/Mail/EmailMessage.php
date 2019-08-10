<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use  App\Models\Message;
class EmailMessage extends Mailable
{
    use Queueable, SerializesModels;
    #je l'es mets en public pour les avoir disponible dans mes vues
    public $msg;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $msg)

    {
        $this->msg=$msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.created');# c'est la vue utiliser pour etre envoyer comme mail 
    }
}
