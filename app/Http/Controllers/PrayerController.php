<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrayerRequest;
use App\Http\Requests\UpdatePrayerRequest;
use App\Models\Prayer;

class PrayerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePrayerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Prayer $prayer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prayer $prayer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePrayerRequest $request, Prayer $prayer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prayer $prayer)
    {
        //
    }
}
