<?php

namespace App\Classe;

use Mailjet\Client;
use Mailjet\Resources;

class Mail
{
    private $api_key = 'e4db5a502feeb7c479c524c5edfa5e1d';

    private $api_key_secret = '70d1120bb1e7118488209274fdd57ef1';

    public function send($to_email, $to_name, $subject, $content)
    {

        $mj = new Client($this->api_key, $this->api_key_secret, true, ['version' => 'v3.1']);
        
        $body = [
            'Messages' => [
                [
                    'From' => [
                    'Email' => "omiya.japan@protonmail.com",
                    'Name' => "Omiya"
                    ],
                    'To' => [
                    [
                        'Email' => $to_email,
                        'Name' => $to_name,
                    ]
                    ],
                    'TemplateID' => 3870360,
                    'TemplateLanguage' => true,
                    'Subject' => $subject,
                    'Variables' => [
                        'content' => $content
                    ]
                ]
            ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();

    }
}