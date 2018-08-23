<?php

return [
    'from'       => 'CRCExchange Support',
    'salutation' => 'Regards',

    'reset_password' => [
        'subject'      => 'Reset password',
        'welcome'      => 'Hello,',
        'warn_welcome' => 'Whoops!',

        'body'   => 'Please click the button below to reset your password:',
        'button' => 'Reset Password',

        'subcopy' => 'If you’re having trouble clicking the ":actionText" button, copy and paste the URL below into your web browser:',
    ],

    'subject' => 'Email confirmation',

    'welcome'     => 'Hello :username,',
    'body'        => 'Thank you for signing up with :projectName. Please click the link below for email confirmation:',
    'information' => 'If the link is not clickable, copy and paste it to the address bar of your browser.<br/>'
        . 'Thank you for your support!',

    'contacts' => 'If you are not an intended recipient of this email, please contact us via :supportEmail<br/>'
        . 'Contacts Info<br/>'
        . 'Email: :supportEmail<br/>'
        . 'Telegram: :telegram<br/>'
        . 'Twitter: :twitter<br/>'
        . ':website',

];
