<?php

use PHPMailer\PHPMailer\PHPMailer;

class Email extends PHPMailer
{

    public function send()
    {
        return 'Email enviado com sucesso';

    }

}