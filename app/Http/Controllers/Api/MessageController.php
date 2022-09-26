<?php

namespace App\Http\Controllers\Api;

use App\Models\House;
use App\Models\Message;
use App\Mail\LeadToLead;
use App\Mail\LeadToAdmin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // validation
        $data = $request->all();

        // salviamo i parametri della richiesta
        $id = $data['id'];
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];


        $messaggio = new Message();
        $messaggio->house_id = $id;
        $messaggio->name = $name;
        $messaggio->email = $email;
        $messaggio->message = $message;

        // salviamo nella tabella
        $messaggio->save();

        return response()->json([
            'success'   => true
        ]);

        // $validation_rules = [
        //     'name'          => 'required|string|max:100',
        //     'email'          => 'required|email|max:256',
        //     'message'       => 'required|string|max:8000',
        // ];

	   // $request->validate($validation_rules);

    //    $validator = Validator::make($request->all(), $validation_rules);



    //     if ($validator->fails()) {
    //          return response()->json([
    //             'success'   => false,
    //             'response'  => $validator->errors(),
    //         ]);
    //     }

    //     // salvare nel database
    //     $message = Message::create($form_data);

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
