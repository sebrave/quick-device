<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Device;

/**
 * @group Device management
 * Class DevicesController
 * @package App\Http\Controllers\v1
 */
class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @group Device management
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Device::latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     * @group Device management
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $device = Device::create(
            $this->validateDevice()
        );
        return $device;
    }

    /**
     * Display the specified resource.
     * @group Device management
     *
     * @param  Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        return $device;
    }

    /**
     * Update the specified resource in storage.
     * @group Device management
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Device $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {
        $device->update(
            $this->validateDevice()
        );

        return $device;
    }

    /**
     * Remove the specified resource from storage.
     * @group Device management
     *
     * @param  Device $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        $device->delete();
    }

    protected function validateDevice()
    {
        return request()->validate([
            'type' => 'required',
            'serial_number' => 'required',
            'imei_number' => 'required|min:15|max:15',
            'manufacturer' => 'required',
            'model' => 'required',
            'operating_system' => 'required'
        ]);
    }

}
