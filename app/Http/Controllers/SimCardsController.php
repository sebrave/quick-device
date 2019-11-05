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
        $simCards = SimCard::latest()->with('networkProvider')->get();

        return view('simCards.index', [
            'simCards' => $simCards
        ]);
    }
}
