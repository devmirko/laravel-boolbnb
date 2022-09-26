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




        // $messages = Message::all()->where('house_id', auth()->user()->id);

        // return view('admin.messages.index', compact('messages'));

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //prende un id e restituisce un singolo modello
        $house = House::find($id);
        // richiamiamo l'id relativo al utente della casa
        $user = $house->user;
        // controllo se l'utente registrato e lo stesso utente che ha inserito la casa
        if( Auth::id() == $user->id ){
            $messages = $house -> messages() -> orderBy('created_at') -> get();
            return view('admin.messages.show', compact('messages'));
        } else{
            abort(404);
        }
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
