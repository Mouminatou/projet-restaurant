<?php

namespace App\Http\Controllers;
use App\Models\Contact;

use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    function index() {
        $contacts = Contact::get();
    
        return view('admin/contact',['contacts' => $contacts,]);
    }
}
