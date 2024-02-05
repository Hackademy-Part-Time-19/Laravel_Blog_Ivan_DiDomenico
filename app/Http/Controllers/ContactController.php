<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendContact(Request $request){
        $data = $request->all();

        Mail::to($data['email'])->send(new ContactMail($data['name'],$data['email'],$data['messaggio']));
        
        return redirect()->route('contatti')->with('success','Il form è stato inviato correttamente');
    }
}
