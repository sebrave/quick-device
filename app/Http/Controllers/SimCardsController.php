<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SimCard;

/**
 * Class SimCardsController
 * @package App\Http\Controllers
 */
class SimCardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $simCards = SimCard::latest()
        ->with('networkProvider')
        ->paginate(15);

        return view('simCards.index', [
            'simCards' => $simCards
        ]);
    }
}
