<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ClientVerifyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumbs = [
            ['link'=>"/",'name'=>"Home"],['link'=>"/",'name'=>"Page"], ['name'=>"Test Page"]
        ];

        return view('/ifinn/client/verify', [
            'breadcrumbs' => $breadcrumbs
        ]);
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
        // Validate the form data

        $birthdate = $request->birthdate;

    $user_profile = new UserProfile();
    $user_profile->prefix = $request->prefix;
    $user_profile->name = $request->name;
    $user_profile->surname = $request->surname;
    $user_profile->gender = $request->gender;
    $user_profile->birthdate = $request->birthdate;
    $user_profile->age = Carbon::parse($birthdate)->age;
    $user_profile->address = $request->address;
    $user_profile->province = $request->province;
    $user_profile->zipcode = $request->zipcode;
    $user_profile->career = $request->career;
    $user_profile->income = $request->income;
    $user_profile->phone_number = $request->phone_number;
    $user_profile->line_id = $request->line_id;
    $user_profile->facebook = $request->facebook;
    $user_profile->user_id = $request->user_id;

    // Store the files
    $path1 = $request->file('file_link_id_card_front')->store('file_link_id_card_front', 'public');
    $path2 = $request->file('file_link_id_card_back')->store('file_link_id_card_back', 'public');
    $path3 = $request->file('file_link_id_card_hold')->store('file_link_id_card_hold', 'public');


    $user_profile->file_link_id_card_front = $path1;
    $user_profile->file_link_id_card_back = $path2;
    $user_profile->file_link_id_card_hold = $path3;


    $user_profile->save();


    return redirect()->route('dashboard-ecommerce')->with('success', 'บันทึกข้อมูลการยืนยันตัวตนเสร็จแล้ว');
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
