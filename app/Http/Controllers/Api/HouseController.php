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
    $lat = $request->get('addres_lat');
    $lon = $request->get('addres_lon');
    $rooms_number = $request->get('rooms');
    $bed_number = $request->get('bed');
    // validiamo la richiesta dell'array servizi
    $servicesQuery = $request->validate(["services" => 'nullable|array']);

    $toFilterHouses = House::select('houses.*');








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
