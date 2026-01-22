<?php

namespace App\Models;


class Contact
{
    public static $data_contact = [
        "email" => "ainulfuadi1234@gmail.com",
        "no_hp" => "0858-0840-6486",
        "github" => "https://github.com/muhammadainulfuady/",
        "instagram" => "https://instagram.com/mhmmdanlfuady"
    ];
    public static function all()
    {
        return collect(self::$data_contact);
    }
}
