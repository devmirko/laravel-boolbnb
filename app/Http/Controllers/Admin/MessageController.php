<?php

namespace App\Http\Controllers\Admin;

use App\Models\House;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {




        $messages = Message::all()->where('house_id', auth()->user()->id);

        return view('admin.messages.index', compact('messages'));

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Message $message)
    {
        //
    }


    public function edit(Message $message)
    {
        //
    }


    public function update(Request $request, Message $message)
    {
        //
    }


    public function destroy(Message $message)
    {
        //
    }
}
