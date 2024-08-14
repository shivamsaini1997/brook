<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Dotenv\Validator;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }

    public function upload(Request $request){
        $filename =  time() . "-shivam." . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('upload',$filename);
    }

    public function contactForm(Request $request){
        $requests = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contact,email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        if($requests){
            $contact = new Contact();
            $contact->name = $request['name'];
            $contact->email = $request['email'];
            $contact->subject = $request['subject'];
            $contact->message = $request['message'];
            $contact->save();
            Mail::to('shivamsaini798@gmail.com')->send(new ContactMail($requests));
            return response()->json(['success' => "Your message has been sent successfully!"]);

        }else{
            return response()->json(['error'=> "error"]);
        }

    }
}
