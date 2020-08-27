<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Policy;
use App\Subcategory;
use App\User;



class PolicyController extends Controller
{   
    public function __construt($value='')
    {
       $this->middleware('role:admin')->except('store');
       $this->middleware('role:customer')->only('store');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policies = Policy::all();

        return view('backend.policies.index',compact('policies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // return('h');
        $cartArr=json_decode($request->policy_arr);
        // $cartArr=$request->policy_arr;
        // dd($cartArr);
        // dd($cartArr);
        $total=0;
        foreach ($cartArr as $row) {
            
            $total+=($row->price * $row->duration);
            
        }
        // dd($total);
        $policy=new Policy;
        $policy->voucherno= uniqid() ; //output unique id
        $policy->orderdate= date('Y-m-d');
        $policy->note= $request->notes;
        $policy->total= $total;
        $policy->status= 0;
        $policy->duration= $row->duration;
        $policy->user_id= Auth::id();
        $policy->save(); //only saved into order table
        // foreach ($cartArr as $row) {
        // $policy->attach($row->id,['duration'=>$row->duration]);
        // }
        //save into order_detail
        return 'Successfully!';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $policy = Policy::find($id);

        return view('backend.policies.show',compact('policy'));
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
        $policy =Policy::find($id);
        $policy->delete();
        //redirect
        return redirect()->route('policies.index');
    }
}
