<?php

namespace App\Http\Controllers\Api;

use App\Models\House;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HouseController extends Controller
{
      private function fixImageUrl($imgPath)
      {
       return $imgPath ? asset('/storage/' . $imgPath) : null;
      }

    public function index()
    {

          $houses = House::all();
          foreach ( $houses as $house ) {
          $house->cover_photo = $this->fixImageUrl($house->cover_photo);
           }

          return response()->json([
            'success'   => true,
            'result'    => $houses,
           ]);

    }



    public function show($id)
    {
        $houses = House::with(['user', 'services'])->where('id', $id)->first();
            $houses->cover_photo = $this->fixImageUrl($houses->cover_photo);
            return response()->json([
                'success'   => true,
                'result'    => $houses,
            ]);


    }

    public function search(Request $request)
   {

    // chiamata a tutti i dati della tabella services
    $services = Service::all();
    // salviamo una variabile con le richieste dei campi del form
    $radius = $request->get('radius');
    $lat = $request->get('latitude');
    $lon = $request->get('longitude');
    $rooms_number = $request->get('rooms');
    $bed_number = $request->get('bed');

    // validiamo la richiesta dell'array servizi
    $servicesQuery = $request->validate(["services" => 'nullable|array']);

    $toFilterHouses = House::select('houses.*')

    ->selectRaw('( 6371 * acos( cos( radians(?) ) *
                          cos( radians( latitude) )
                          * cos( radians( longitude ) - radians(?)
                          ) + sin( radians(?) ) *
                          sin( radians( latitude ) ) )
                        ) AS distance', [$lat, $lon, $lat])
    ->havingRaw("distance < ?", [$radius])
    ->orderBy('distance', 'ASC')->get();
    // creo un array vuoto
    $houses = [];

    // facciamo un for each tra i campi della tabella house
    foreach ($toFilterHouses as $toFilterHouse) {
        if (($toFilterHouse->rooms >= $rooms_number) && ($toFilterHouse->beds >= $bed_number) && ($toFilterHouse->visible == 1)) {



        // se i servizi sono diversi da 0
        // prendo la request dei servizi
         if (!$servicesQuery == 0) {
             $servicesQuery = $request->get('services');
             // creo un array vuoto
             $serviceFilter = [];
             // faccio un foreach della tabella services
             foreach ($toFilterHouses->services as $x) {
             // pusho id l'iterazione nell array
                 $serviceFilter[] = $x->id;
             }

             if (count(array_intersect($servicesQuery, $serviceFilter)) == count($servicesQuery)) {
                 $houses[] = $toFilterHouses;
                 }

               } else {
                $houses[] = $toFilterHouses;
               }

        }
    }


    if ($houses) {
        return response()->json([
            'success'   => true,
            'result'    => $houses,
        ]);
    } else {
        return response()->json([
            'success'   => false,
        ]);
    }

    }
    public function city(Request $request)
    {
        $address_ = DB::table('houses')
            ->where('address', 'like', '%' . $request->search . '%')
            ->get();
            if ($address_) {
                return response()->json([
                    'success'   => true,
                    'result'    => $address_
                ]);
            } else {
                return response()->json([
                    'success'   => false,
                ]);
            }
    }


















}
