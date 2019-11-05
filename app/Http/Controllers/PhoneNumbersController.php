<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PhoneNumber;

class PhoneNumbersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PhoneNumber::latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phonenumber = PhoneNumber::create(
            $this->validateDevice()
        );
        return $phonenumber;
    }

    /**
     * Display the specified resource.
     *
     * @param  PhoneNumber $phonenumber
     * @return \Illuminate\Http\Response
     */
    public function show(PhoneNumber $phonenumber)
    {
        return $phonenumber;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  PhoneNumber $phonenumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PhoneNumber $phonenumber)
    {
        $phonenumber->update(
            $this->validatePhoneNumber()
        );

        return $phonenumber;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  PhoneNumber  $phonenumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(PhoneNumber $phonenumber)
    {
        $phonenumber->delete();
    }

    protected function validatePhoneNumber()
    {
        return request()->validate([
            'phone_number' => 'required|min:11|max:11',
            'network_provider_id' => 'required'
        ]);
    }
}
