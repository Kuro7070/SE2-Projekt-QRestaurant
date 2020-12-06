<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{

    public static function saveContact(Request $request) {


//        dd($request);

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'nachricht' => 'required',
        ];

        $customMessages = [
            'required' => 'Das Feld :Attribute darf nicht leer sein.',
            'email' => 'Bitte eine gültige E-Mail Adresse eingeben.'
        ];

        (new ContactController)->validate($request, $rules, $customMessages);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->nachricht;

        $contact->save();

        \Mail::send('mails/contact_email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('nachricht'),
            ), function($message) use ($request)
            {
                $message->from($request->email);
                $message->to('dev@qrestaurant.com');
            });
        return back()->with('contact-success', '');

    }

    public static function setSuccess(){
        Session::put('contact-success','');
    }
}
