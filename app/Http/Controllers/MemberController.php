<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return view('member')->with("members", $members);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = Member::create ([
            'satker_id' =>  $request->satker_id,
            'nama' =>  Str::title($request->nama),
            'nik' =>  $request->nik,
            'asal_kec' =>  Str::title($request->asal_kec),
            'asal_des' =>  Str::title($request->asal_des),
            'nohp' =>  $request->nohp,
            'email' =>  $request->email,
            'npwp' =>  $request->npwp,
            'norek' =>  $request->norek, 
        ]);

        return redirect()->route('daftar-mitra.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nik)
    {
        $member = Member::find($nik);
        $member->fill($request->post())->save();
        return redirect()->route('daftar-mitra.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($nik)
    {
        $member = Member::find($nik);
        $member->delete();
        return redirect()->route('daftar-mitra.index');
    }
}
