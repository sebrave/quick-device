<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

/**
 * @group User management
 * Class UsersController
 * @package App\Http\Controllers\v1
 */
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     * @group User management
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     * @group User management
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create(
            $this->validateUser()
        );
        return $user;
    }

    /**
     * Display the specified resource.
     * @group User management
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return $user;
    }

    /**
     * Update the specified resource in storage.
     * @group User management
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update(
            $this->validateUser()
        );

        return $user;
    }

    /**
     * Remove the specified resource from storage.
     * @group User management
     *
     * @param  User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }

    protected function validateUser()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required'
        ]);
    }
}
