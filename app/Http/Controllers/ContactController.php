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
            'contact_name' => 'required',
            'contact_email' => 'required|email',
            'contact_nachricht' => 'required',
        ];

        $customMessages = [
            'required' => 'Dieses Feld darf nicht leer sein.',
            'email' => 'Bitte eine gültige E-Mail Adresse eingeben.'
        ];

        (new ContactController)->validate($request, $rules, $customMessages);

        $contact = new Contact;

        $contact->name = $request->contact_name;
        $contact->email = $request->contact_email;
        $contact->message = $request->contact_nachricht;

        $contact->save();

        \Mail::send('mails/contact_email',
            array(
                'name' => $request->get('contact_name'),
                'email' => $request->get('contact_email'),
                'user_message' => $request->get('contact_nachricht'),
            ), function($message) use ($request)
            {
                $message->from($request->contact_email);
                $message->to('dev@qrestaurant.com');
            });
        return back()->with('contact-success', '');

    }

}
