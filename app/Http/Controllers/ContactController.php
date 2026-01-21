<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function showContact()
    {
        return view('contact', [
            "title" => "Contact",
            "contact" => Contact::all()
        ]);
    }
}
