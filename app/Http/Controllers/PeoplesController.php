<?php

namespace App\Http\Controllers;

use App\Peoples;
use Illuminate\Http\Request;

class PeoplesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Hello World";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Peoples  $peoples
     * @return \Illuminate\Http\Response
     */
    public function show(Peoples $peoples)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peoples  $peoples
     * @return \Illuminate\Http\Response
     */
    public function edit(Peoples $peoples)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peoples  $peoples
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peoples $peoples)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peoples  $peoples
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peoples $peoples)
    {
        //
    }
}
