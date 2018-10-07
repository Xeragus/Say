<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSentEvent;
use Illuminate\Support\Facades\Auth;

// ()
class MessagesController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function chatroom()
    {
      return view('chat');
    }

    public function sendMessage(Request $request)
    {
      $user = Auth::user();
      event(new MessageSentEvent($request->input('message'), $user));
      return $request->all();
    }

}
