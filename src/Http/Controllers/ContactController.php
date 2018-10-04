<?php

namespace Tahmina\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Tahmina\Contact\Mail\ContactMailable;
use Tahmina\Contact\Models\Contact;

class ContactController extends Controller
{
	public function index()
	{
		//1st contact is package name nd 2nd is view/blade file
		return view('contact::contact');
    }
	
	public function send(Request $request)
	{
		//Send Mail before saving to admin tahmina@gmail.com
		Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name));
		//if we use create then we have to give fillable field/guarded variable in model
		Contact::create($request->all());
		return redirect(route('contact'));
    }
}
