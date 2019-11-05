<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NetworkProvider;

class NetworkProvidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return NetworkProvider::latest()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $networkprovider = NetworkProvider::create(
            $this->validateNetworkProvider()
        );
        return $networkprovider;
    }

    /**
     * Display the specified resou$networkProviderrce.
     *
     * @param  NetworkProvider  $networkProvider
     * @return \Illuminate\Http\Response
     */
    public function show(NetworkProvider $networkprovider)
    {
        return $networkprovider;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  NetworkProvider  $networkprovider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NetworkProvider $networkprovider)
    {
        $networkprovider->update(
            $this->validateNetworkProvider()
        );

        return $networkprovider;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  NetworkProvider  $networkprovider
     * @return \Illuminate\Http\Response
     */
    public function destroy(NetworkProvider $networkprovider)
    {
        $networkprovider->delete();
    }

    protected function validateNetworkProvider()
    {
        return request()->validate([
            'name' => 'required'
        ]);
    }

}
