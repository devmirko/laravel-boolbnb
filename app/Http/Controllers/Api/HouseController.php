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

    // salviamo una variabile con le richieste dei campi del form
    $radius = $request->get('radius');
    $lat = $request->get('latitude');
    $lon = $request->get('longitude');
    $rooms_number = $request->get('rooms');
    $bed_number = $request->get('beds');
<<<<<<< HEAD
=======

>>>>>>> cd1dae44329317692cee9803628601d26c32eff6

    // validiamo la richiesta dell'array servizi
    $servicesQuery = $request->validate(["services" => 'nullable|array']);
    // prendiamo tutti i dati dalla tabella houses
    $toFilterHouses = House::select('houses.*')
    // filtriamo per i km di ditanza richiesti
    ->selectRaw('( 6371 * acos( cos( radians(?) ) *
                          cos( radians( latitude) )
                          * cos( radians( longitude ) - radians(?)
                          ) + sin( radians(?) ) *
                          sin( radians( latitude ) ) )
                        ) AS distance', [$lat, $lon, $lat])
    ->havingRaw("distance < ?", [$radius])
    ->orderBy('distance', 'ASC')
    ->get();
    // creo un array vuoto
    $houses = [];

    // facciamo un for each tra i campi della tabella house
    foreach ($toFilterHouses as $toFilterHouse) {
        // filtriamo per stanze, letti e visibilità
        if (($toFilterHouse->rooms >= $rooms_number) && ($toFilterHouse->beds >= $bed_number) && ($toFilterHouse->visible == 1)) {



            // se la richiesta dei servizi passa la validazione
             if (!$servicesQuery == 0) {
                //  prendo la richiesta contente i servizi
                 $servicesQuery = $request->get('services');
                 // creo un array vuoto
                 $serviceFilter = [];
                 // faccio un foreach della tabella services della tabella del database
                    foreach ($toFilterHouse->services as $x) {
                    // pusho id l'iterazione nell array
                     $serviceFilter[] = $x->id;  //abbiamo un array con l'id dei servizi del nostro db
                    }

                    // filtro servizi:
                    if (count(array_intersect($servicesQuery, $serviceFilter)) == count($servicesQuery)) {
                        $houses[] = $toFilterHouse;
                        }

                    }       else {
                        $houses[] = $toFilterHouse;
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
