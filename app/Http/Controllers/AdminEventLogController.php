<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminEventLogResource;
use App\Models\AdminEventLog;
use Illuminate\Http\Request;

class AdminEventLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //returning all admin event log
        return AdminEventLog::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'adminid'=> 'required|integer|exists:App\Models\Admin,adminid',
            'admin_event_action'=> 'required|string|',
            'admin_event_detail'=> 'required|string|'
        ]);

        $data = new AdminEventLog([
            'adminid'=>$request->get('adminid'),
            'admin_event_action'=>$request->get('admin_event_action'),
            'admin_event_detail'=>$request->get('admin_event_detail')
        ]);

        $data->save();

        return new AdminEventLogResource($data);
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
        return new AdminEventLogResource(AdminEventLog::find($id));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
