<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trip.formCustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prepareCustomer = [
            'prefix' => $request->prefix,
            'fname' => $request->fname,
            'lname' => $request->lname,
            'en_fname' => $request->en_fname,
            'en_lname' => $request->en_lname,
            'birthdate' => $request->birthdate,
            'birth_location' => $request->birth_location,
            'passport_name' => $request->passport_name,
            'passport_start' => $request->passport_start,
            'passport_end' => $request->passport_end,
            'room' => $request->room,
            'note' => $request->note,
            'trip_id' => $request->trip_id,
            'user_id'=> Auth::id()
        ];
        $addCustomer = Customer::create($prepareCustomer);
        $tripMember = Trip::where('id',$request->id)->get();
        return redirect()->to('trips/addCustomer/'.$request->trip_id)->with('tripMember',$tripMember);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $tripInst = Customer::find($customer->id);
        $tripInst->delete( );

        return redirect()->to('trips/'.$customer->trip_id);
    }
}
