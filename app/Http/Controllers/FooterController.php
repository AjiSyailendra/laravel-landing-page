<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Http\Requests\StoreFooterRequest;
use App\Http\Requests\UpdateFooterRequest;
use App\Models\Footer_menu;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.footer.index', [
            'title' => 'Footer Setting',
            'title2' => 'Footer Menu Setting',
            'btn_add' => count(Footer::all()) ? false : true,
            'data' =>  Footer::all()->first(),
            'menu_data' => Footer_menu::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.footer.addFooter', [
            'title' => 'Add Footer'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name_footer" => ['required', 'min:3', 'max:30'],
            'img_logo' => ['required', 'file'],
        ]);

        $validatedData['img_logo'] = $request->file('img_logo')->store('images');

        Footer::create($validatedData);
        return to_route('footer')->with('success', 'Berhasil tambah data');;
    }

    /**
     * Display the specified resource.
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFooterRequest $request, Footer $footer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
