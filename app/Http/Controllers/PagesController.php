<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Mail;

class PagesController extends Controller
{
    public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request, [
            'email'     =>  'required|email',
            'subject'   =>  'min:3',
            'message'   =>  'min:10'
        ]);

        $data = [
            'email'     => $request->email,
            'subject'   => $request->subject,
            'bodyMessage' => $request->message,
        ];

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('cjustinobi@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('message', 'Mail sent successfully');

        return redirect('/');
    }
}
