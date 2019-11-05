<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SimCard;

class SimCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return SimCard::latest()
            ->with('networkprovider')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $simcard = SimCard::create(
            $this->validateDevice()
        );
        return $simcard;
    }

    /**
     * Display the specified resource.
     *
     * @param  Id  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return SimCard::find($id)
            ->with('networkprovider')
            ->firstOrFail();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  SimCard  $simcard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SimCard $simcard)
    {
        $simcard->update(
            $this->validateSimCard()
        );

        return $simcard;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  SimCard  $simcard
     * @return \Illuminate\Http\Response
     */
    public function destroy(SimCard $simcard)
    {
        $simcard->delete();
    }

    protected function validateSimCard()
    {
        return request()->validate([
            'sim_number' => 'required',
            'network_provider_id' => 'required'
        ]);
    }
}
