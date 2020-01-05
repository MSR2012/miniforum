<?php

namespace App\Mail;

use App\Model\Activation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActivateUserEmailOnRegistration extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $activation = new Activation();
        $activation->code = uniqid(60);
        $activation->user_id = $this->user->id;
        $activation->save();

        $this->code = $activation->code;

        return $this->subject('Verify Account on MiniForum')->view('email.registration.verify');
    }
}
