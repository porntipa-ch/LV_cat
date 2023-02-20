<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index')->with('tripView',$trips);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trip.formTrip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prepareTrip = [
            'trip_name' => $request->trip_name,
            'guide_name' => $request->guide_name,
            'outbound_flight' => $request->outbound_flight,
            'inbound_flight' => $request->inbound_flight,
            'hotel' => $request->hotel,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'user_id' => Auth::id()
        ];
        $trip = Trip::create($prepareTrip);

        $customers = Trip::orderBy('created_at', 'desc')->first();
        // return view('trip.formCustomer', ['customers' => $customers]);
        $id = $customers->id;

        return redirect()->to('trips/addCustomer/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function addCustomer($id)
    {
        $tripDetail = Trip::where('id',$id)->first();
        $tripMember = Customer::where('trip_id',$id)->get();
        return view('trip.formCustomer', ['tripDetail' => $tripDetail,'tripMember' =>$tripMember]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        $customers = Customer::where('trip_id',$trip->id)->get();
        return view('trips.show', ['members' => $customers,'tripDetail' => $trip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
