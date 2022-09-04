<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Task;
use App\Models\Member;
use Illuminate\Support\Str;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = Activity::all();
        $activitiesId = Activity::task()->id;
        $tasks = Task::with('activity')->where('tasks.activity_id', '=', $activitiesId)->get();
        $activityy = Task::find(1)->activity;
        $activityyy = $activityy->count();
        $members = Member::all();
        //$taskMembers = Task::whereBelongsTo(Activity::class)->groupBy('activity_id')->get();
        echo $activityy;
        
        /*return view('activity')->
            with([
                "activities"=>$activities, 
                "activityyy"=>$activityyy, 
                "members"=>$members, 
                "tasks"=>$tasks,
        ]);*/
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
        $activity = Activity::create ([
            'satker_id' =>  $request->satker_id,
            'judul' =>  Str::title($request->judul),
            'mulai' =>  $request->mulai,
            'selesai' =>  $request->selesai,
            'satuan' => $request->satuan, 
        ]);

        return redirect()->route('daftar-kegiatan.index');
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
    public function update(Request $request, $id)
    {
        $activity = Activity::find($id);
        $activity->fill($request->post())->save();
        return redirect()->route('daftar-kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = Activity::find($id);
        $activity->delete();
        return redirect()->route('daftar-kegiatan.index');
    }
}
