<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{


    public function store(Request $request)
    {
        // SALVIAMO LA RICHIESTA IN DATA
        $data = $request->all();
        // salviamo i parametri della richiesta
        $id = $data['id'];
        $contact_name = $data['contact_name'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $request_text = $data['request_text'];

        $message = new Message();
        $message->house_id = $id;
        $message->contact_name = $contact_name;
        $message->lastname = $lastname;
        $message->request_text = $request_text;
        $message->email = $email;
        // salviamo nella tabella
        $message->save();

        return response()->json([
            'success'   => true
        ]);




    }







}
