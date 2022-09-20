<?php

namespace App\Http\Controllers\Api;

use App\Models\House;
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
    $address =  $request->get('address');
    $houses_ = House::with(['address'])->whereHas('address', function ($q) use ($address) {
        $q->where('id', 'like', $address);
        })->get();

        if ($houses_) {
            return response()->json([
                'success'   => true,
                'result'    => $houses_
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
