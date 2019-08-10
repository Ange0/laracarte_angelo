<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class EmailMessage extends Mailable
{
    use Queueable, SerializesModels;
    #je l'es mets en public pour les avoir disponible dans mes vues
    public $name;
    public $email;
    public $msg;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name,$email,$msg)

    {
        $this->name=$name;
        $this->email=$email;
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
