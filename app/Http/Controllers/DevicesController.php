<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = Device::latest()->get();

        return view('devices.index', [
            'devices' => $devices
        ]);
    }
}
