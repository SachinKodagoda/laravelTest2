<?php

namespace App;
use Illuminate\Support\Facades\Mail;

class PostcardSendingService
{
    private $country;
    private $width;
    private $height;

    public function __construct($county, $width, $height)
    {
        $this->country = $county;
        $this->width = $width;
        $this->height = $height;
    }

    public function hello($message, $email)
    {
        Mail::raw($message, function($message) use ($email){
            $message->to('dumindag.k@gmail.com');
        });
        dump('msg:'.$message);
    }
}
