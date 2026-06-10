<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Contact form recipient
    |--------------------------------------------------------------------------
    |
    | Inbound messages from the public contact form are sent to this address.
    | Falls back to MAIL_FROM_ADDRESS when CONTACT_MAIL_TO is not set.
    |
    */
    'contact_recipient' => env('CONTACT_MAIL_TO', env('MAIL_FROM_ADDRESS', 'hello@example.com')),

];
