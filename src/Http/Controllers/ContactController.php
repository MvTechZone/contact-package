<?php

namespace TechGuy\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use TechGuy\Contact\Http\Requests\ContactRequest;
use TechGuy\Contact\Mail\ContactMail;
use TechGuy\Contact\Models\Contact;

class ContactController extends Controller {
    public function index() {
        return view('contact::contact');
    }

    public function send(ContactRequest $request) {
        $contact = Contact::query()->create(
            $request->all()
        );

        if ($contact){
            Mail::to(config('contact.send_email_to'))->send(new ContactMail($request->message));
            return response()->json([
                'success' => true,
                'message' => 'Query Saved.',
            ], 200);
        }
        return response()->json([
            'success' => false,
            'message' => 'Query Failed.',
        ], 406);
    }
}
