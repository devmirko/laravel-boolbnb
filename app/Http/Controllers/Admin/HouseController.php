<?php

namespace App\Http\Controllers\Admin;

use App\Models\House;
use App\Models\Message;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HouseController extends Controller
{
    public function index( )
    {
         //if (Auth::id() != $house->user_id) abort(401);
        $houses = House::All()->where('user_id', auth()->user()->id);

        return view('admin.houses.index', compact('houses'));
    }

    public function create()
    {
        $services = Service::all();
        return view('admin.houses.create',[
            'services'    => $services,
        ]);
    }

    public function store(Request $request)
    {
        $house = new House();
        $user_id = Auth::user()->id;

        $request->validate([
            'name_house' => 'required|string|max:100',
            'rooms' => 'required|numeric|integer|between:1,10|',
            'beds' => 'required|numeric|integer|between:1,10|',
            'bathrooms' => 'required|numeric|integer|between:1,10|',
            'mq' => 'required|numeric|integer|max:150',
            // 'services'          => 'nullable|array',
            // 'services.*'        => 'integer|exists:services,id',
            // 'latitude' => 'numeric|integer',
            // 'longitude' => 'numeric|integer',
            'address' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'cover_photo' => 'required|file|image|max:5000',
            'services' => 'required|array|exists:services,id|min:1',
        ]);

        // salviamo la richiesta in un variabile
        $data = $request->all();

         // aggiungiamo alla richiesta l'id del utente autentificato
         $data['user_id'] = $user_id;

        if(key_exists('cover_photo', $data)){
        //salvare l'immagine in public
         $img_path = Storage::put('uploads', $data['cover_photo']);
        // aggiornare il valore della chiave image con il nome dell'immagine appena creata
         $data['cover_photo'] = $img_path;

        }

        // creiamo e salviamo nella tabella house
        $house->fill($data);
        $house->save();


        $house->services()->sync($data['services']);

        return redirect()->route('admin.houses.index')

            ->with('success', 'House created successfully.');
    }

    public function show(House $house)
    {
        return view('admin.houses.show', compact('house'));
    }

    public function edit(House $house)
    {
        $services = Service::all();
        return view('admin.houses.edit', [
            'house' => $house,
            'services'    => $services,
        ]);
    }

    public function update(Request $request, House $house)
    {
        $services = Service::all();

        $request->validate([
            'name_house' => 'required|string|max:100',
            'rooms' => 'required|numeric|integer|between:1,10|',
            'beds' => 'required|numeric|integer|between:1,10|',
            'bathrooms' => 'required|numeric|integer|between:1,10|',
            'mq' => 'required|numeric|integer|max:150',
            // 'latitude' => 'required|numeric|integer',
            // 'longitude' => 'required|numeric|integer',
            'address' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'cover_photo' => 'required|file|image|max:5000',
            'services' => 'required|exists:services,id',

        ]);

        $data = $request->all();

        if ($house->cover_photo) {
            Storage::delete($house->cover_photo);
        }

        // caricare il nuovo file
        $img_path = Storage::put('uploads', $data['cover_photo']);

       // aggiornare l'array $data con il percorso del file appena creato
       $data['cover_photo'] = $img_path;

        $house = House::find($house->id);
        $house->update($data);
        $house->services()->sync($data['services']);

        // if ('service_id' <= 1) {
        //     $house->services()->detach();
        // }

        return redirect()->route('admin.houses.index')

            ->with('success', 'House created successfully.');
    }

    public function destroy(House $house)
    {
        $house = House::find($house->id);
        // $house->messages();
        // // var_dump($house->messages());
        // // dd();
        $house->services()->detach();
        $house->messages()->delete();
        $house->photos()->delete();
        $house->views()->delete();

        $house->delete();
        return redirect()->route('admin.houses.index');
    }
}
