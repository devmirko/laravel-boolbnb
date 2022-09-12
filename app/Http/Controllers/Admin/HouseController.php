<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        return view('admin.houses.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(House $house)
    {
        //
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
