<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view ('contactus');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        Contact::create($input);
        return redirect('/contactus')->with('success', 'Your message is sent successfully!');
    }
}
