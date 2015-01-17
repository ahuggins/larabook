<?php namespace Larabook\Mailers;

use Larabook\Users\User;

class UserMailer extends Mailer {

    public function sendWelcomeMessageTo(User $user)
    {
        $subject = 'Welcome to Larabook!';
        $view = 'emails.registration.confirm';

        return $this->sendTo($user, $subject, $view);
    }
}