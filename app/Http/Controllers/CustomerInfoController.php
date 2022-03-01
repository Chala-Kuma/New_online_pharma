<?php

namespace App\Http\Controllers;

use App\Http\Resources\CustomerInfoResource;
use App\Models\CustomerAccount;
use App\Models\CustomerInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return CustomerInfo::all();
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
            'first_name'=>'required|string|',
            'Middle_name'=>'required|string|',
            'last_name'=>'required|string|',
            'location'=>'required|string|',
            'age'=>'required|integer|',
            'sex'=>'required|string|',
            'username'=>'required|string|unique:App\Models\CustomerAccount,username',
            'email'=>'required|email|unique:App\Models\CustomerAccount,email',
            'phone'=>'required|string|unique:App\Models\Customerinfo,phone',
            'password'=>'required|string|confirmed'
        ]);

        $data =new CustomerInfo([
            'first_name'=>$request->get('first_name'),
            'Middle_name'=>$request->get('Middle_name'),
            'last_name'=>$request->get('last_name'),
            'location'=>$request->get('location'),
            'age'=>$request->get('age'),
            'sex'=>$request->get('sex'),
            'phone'=>$request->get('phone')
        ]);

        $data->save();

        $data_account = new CustomerAccount([
            'customerid'=> $data->customerid,
            'username'=>$request->get('username'),
            'password'=>Hash::make($request->get('password')),
            'email'=>$request->get('email')
        ]);

        $data_account->save();

        return new CustomerInfoResource($data);
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
        return new CustomerInfoResource(CustomerInfo::find($id));
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
