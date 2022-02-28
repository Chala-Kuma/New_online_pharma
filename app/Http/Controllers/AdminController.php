<?php

namespace App\Http\Controllers;

use App\Http\Resources\AdminResource;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //returning all admin
        return Admin::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating the data
        $request->validate([
            'username'=>'required|string|unique:App\Models\Admin,username',
            'email'=>'required|email|unique:App\Models\Admin,email',
            'phone'=>'required|string|unique:App\Models\Admin,phone',
            'password'=>'required|string|confirmed',
        ]);
       //creating instance of admin
        $data = new Admin([
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'password'=>Hash::make($request->get('password'))
        ]);

        //saving instance of admin
        $data->save();

        //returning instance of admin
        return new AdminResource($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // returning admin by id
        return new AdminResource(Admin::find($id));
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
