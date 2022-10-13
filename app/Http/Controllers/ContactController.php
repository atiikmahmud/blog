<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        $title = 'Messages';
        $messages = Contact::orderBy('id', 'desc')->get();
        return view('admin.messages', compact('title', 'messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required'
        ]);

        try{
            $contact = new Contact;
            $contact->name    = $request->name;
            $contact->email   = $request->email;
            $contact->message = $request->message;
            $contact->save();

            return redirect()->back()->with('success', 'Message successfully sent !!');
        }
        catch(\Exception $e){
            Log::error($e->getMessage());
            return redirect()->back()->with('error', 'Message not send !!');
        }
    }

    public function show($id)
    {
        $message = Contact::find($id);
        $message->status = 0;
        $message->save();

        $title = 'Messages';
        $showmsg = Contact::where('id', $id)->first();
        return view('admin.single-message', compact('title', 'showmsg'));
    }

    public function unreadMsg()
    {
        $title = 'Messages';
        $messages = Contact::where('status', 1)->get();
        return view('admin.unread-messages', compact('title', 'messages'));
    }

    public function destroy($id)
    {     
        $message = Contact::find($id);
        $message->delete();
        return redirect()->back()->with('success', 'Message successfully deleted !!');
    }
}