<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $request) {
      $this->validate($request, [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'
      ]);

      $message = new Message;
      $message->name = $request->input('name');
      $message->email = $request->input('email');
      $message->message = $request->input('message');
      $message->save();

      return redirect('contact')->with('success', 'Your message was sent!');
    }

    public function getMessages() {
      $messages = Message::where('active', 1)
                            ->orderBy('created_at', 'desc')
                            ->get();

      return view('layouts.messages')->with('messages', $messages);
    }
}
