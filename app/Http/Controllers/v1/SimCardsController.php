<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SimCard;

/**
 * @group Sim card management
 * Class SimCardsController
 * @package App\Http\Controllers\v1
 */
class SimCardsController extends Controller
{
    /**
     * @group Sim card management
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
     * @group Sim card management
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
     * @group Sim card management
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
     * @group Sim card management
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
     * @group Sim card management
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
