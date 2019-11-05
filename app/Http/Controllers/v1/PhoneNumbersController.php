<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PhoneNumber;

/**
 * @group Phone number management
 * Class PhoneNumbersController
 * @package App\Http\Controllers\v1
 */
class PhoneNumbersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @group Phone number management
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PhoneNumber::latest()
            ->with('networkprovider')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     * @group Phone number management
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
     * @group Phone number management
     *
     * @param  Id $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return PhoneNumber::find($id)
            ->with('networkprovider')
            ->firstOrFail();
    }

    /**
     * Update the specified resource in storage.
     * @group Phone number management
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
     * @group Phone number management
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
