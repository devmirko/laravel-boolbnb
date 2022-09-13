<?php

namespace App\Http\Controllers\Admin;

use App\Models\House;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HouseController extends Controller
{
    public function index()
    {
        $perPage = 20;
        $houses = House::paginate($perPage);
        return view('admin.houses.index', compact('houses'));
    }

    public function create()
    {
        return view('admin.houses.create');
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
            'lat' => 'required|numeric|integer',
            'lang' => 'required|numeric|integer',
            'address' => 'required|string|max:100',
            'type' => 'required|string|max:100'
        ]);

        $data = $request->all();
        $data['user_id'] = $user_id;
        $house->fill($data);
        $house->save();

        return redirect()->route('admin.houses.index')

            ->with('success', 'House created successfully.');
    }

    public function show(House $house)
    {
        return view('admin.houses.show', compact('house'));
    }

    public function edit(House $house)
    {

        return view('admin.houses.edit', compact('house'));
    }

    public function update(Request $request, House $house)
    {

        $request->validate([
            'name_house' => 'required|string|max:100',
            'rooms' => 'required|numeric|integer|between:1,10|',
            'beds' => 'required|numeric|integer|between:1,10|',
            'bathrooms' => 'required|numeric|integer|between:1,10|',
            'mq' => 'required|numeric|integer|max:150',
            'lat' => 'required|numeric|integer',
            'lang' => 'required|numeric|integer',
            'address' => 'required|string|max:100',
            'type' => 'required|string|max:100'
        ]);

        $data = $request->all();
        $house = House::find($house->id);
        $house->update($data);

        return redirect()->route('admin.houses.index')

            ->with('success', 'House created successfully.');
    }

    public function destroy(House $house)
    {
        $house = House::find($house->id);
        // $house->messages();
        // // var_dump($house->messages());
        // // dd();
        // $house->services()->detach();
        $house->delete();
        return redirect()->route('admin.houses.index');
    }
}
