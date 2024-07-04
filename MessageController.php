<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {

        $messages = Message::all();
        return view('index', ['messages' => $messages]);
    }


    public function create()
    {

        return view('message.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'dob' => 'required|date',
            'gender' => 'required',
            'message' => 'required',
        ]);


        Message::create($request->all());


        return redirect()->route('messages.index')
            ->with('success', 'Message created successfully.');
    }
    public function destroy($id)
    {

        $message = Message::find($id);


        if (!$message) {
            return response()->json(['message' => 'Message not found.'], 404);
        }


        $message->delete();


        return redirect()->route('messages.index')->with('success', 'Message deleted successfully.');
    }
}
