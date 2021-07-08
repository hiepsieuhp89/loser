<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CountDown;
use Illuminate\Http\Request;

class CountDownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CountDown::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CountDown  $countDown
     * @return \Illuminate\Http\Response
     */
    public function show(CountDown $countDown)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CountDown  $countDown
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CountDown $countDown)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CountDown  $countDown
     * @return \Illuminate\Http\Response
     */
    public function destroy(CountDown $countDown)
    {
        //
    }
}
