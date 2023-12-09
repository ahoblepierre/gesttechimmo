<?php
use Illuminate\Contracts\Mail\Factory as MailFactory;

if (!function_exists('mailler')) {
    function mailer() : MailFactory {
        return app(MailFactory::class);
    }
}

//mailer()->to('laravel@gmail.com')->send(new Maillable)
       