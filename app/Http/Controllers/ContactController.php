<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function saveContact(Request $request) {



        $rules = [
            'Name' => 'required',
            'Email' => 'required|email',
            'Nachricht' => 'required',
        ];

        $customMessages = [
            'required' => 'Das Feld :Attribute darf nicht leer sein.'
        ];

        $this->validate($request, $rules, $customMessages);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;

        $contact->save();


        \Mail::send('mails/contact_email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message'),
            ), function($message) use ($request)
            {
                $message->from($request->email);
                $message->to('dev@qrestaurant.com');
            });
        return back()->with('contact-success', '');

    }
}
