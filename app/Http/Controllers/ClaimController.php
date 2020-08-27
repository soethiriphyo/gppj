<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Claim;
use App\User;
use App\Subcategory;
use Illuminate\Support\Facades\Auth;

class ClaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $claims=Claim::all();
        return view ('backend.claims.index', compact('claims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=User::find(Auth::id());
        $subcategories=Subcategory::all();
        return view ('frontend.claimform.create',compact('user','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $request->validate([
        'user_name'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'description'=>'required',
        'subcategory'=>'required',
        ]);
        $claim=new Claim;
        $claim->user_id=Auth::id();
        $claim->email=$request->email;
        $claim->phone=$request->phone;
        $claim->description=$request->description;
        $claim->subcategory_id=$request->subcategory;
        $claim->save();
        return 'Successfully Requested for Claim!';

     
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
