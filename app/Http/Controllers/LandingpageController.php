<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\Navbar;
use App\Models\Section;
use App\Models\Landingpage;
use App\Http\Requests\StoreLandingpageRequest;
use App\Http\Requests\UpdateLandingpageRequest;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $navbar = Navbar::all()->first();
        $footer = Footer::all()->first();
        $section = Section::all();
        return view('landingpage', [
            "navbar" => $navbar,
            "footer" => $footer,
            "data" => $section
        ]);
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
    public function store(StoreLandingpageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Landingpage $landingpage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Landingpage $landingpage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLandingpageRequest $request, Landingpage $landingpage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Landingpage $landingpage)
    {
        //
    }
}
