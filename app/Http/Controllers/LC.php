<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return view('location')->with("locations", $locations);
    }

    public function create()
    {
        return view ('add_loc');
    }

    /*public function store(Request $request)
    {
        $request->validate([
            'kode_satker' => 'required',
            'nama_satker' => 'required',
        ]);
        $locations = Location::create([
            'kode_satker' =>  $request->kode_satker,
            'nama_satker' =>  $request->nama_satker
        ]);
        return redirect()->route('location')
        ->with('success','Location created successfully.');
    }

    public function show()
    {

    }
    
    public function edit(Location $location)
    {
        return view('edit_loc');
    }

    public function update(Request $request, Location $location)
    {
        $request->validate([
            'kode_satker' => 'required',
            'nama_satker' => 'required',
        ]);
        $locations = Location::update([
            'kode_satker' =>  $request->kode_satker,
            'nama_satker' =>  $request->nama_satker
        ]);
        return redirect()->route('location')
        ->with('success','Location Updated successfully.');
    }

    public function destroy(Location $location)
    {
        $location->delete();

        return redirect()->route('location')
        ->with('success','Location deleted successfully.');
    }*/

}
