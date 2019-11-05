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
        $phoneNumbers = PhoneNumber::latest()->get();

        return view('phoneNumbers.index', [
            'phoneNumbers' => $phoneNumbers
        ]);
    }
}
