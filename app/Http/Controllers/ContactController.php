<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMe;
class ContactController extends Controller
{
    public function showContact()
    {
        return view('contact', [
            "title" => "Contact",
            'active' => 'contact',
            "contacts" => ContactMe::all()
        ]);
    }
}
