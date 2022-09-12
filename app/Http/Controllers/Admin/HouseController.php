<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

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
        //
    }

    public function show(House $house)
    {
        return view('admin.houses.show', compact('house'));
    }

    public function edit(House $house)
    {
        //
    }

    public function update(Request $request, House $house)
    {
        //
    }

    public function destroy(House $house)
    {
        //
    }
}
