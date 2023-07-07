<?php

namespace App\Http\Controllers;

use App\Models\Footer_menu;
use App\Http\Requests\StoreFooter_menuRequest;
use App\Http\Requests\UpdateFooter_menuRequest;
use Illuminate\Http\Request;

class FooterMenuController extends Controller
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
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "text_menu" => ['required', 'min:3', 'max:30'],
        ]);

        $validatedData['footer_id'] = $request->footer_id;

        Footer_menu::create($validatedData);
        return back()->with('success', 'Sukses tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Footer_menu $footer_menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer_menu $footer_menu, $id)
    {
        $data = Footer_menu::find($id);

        return view('dashboard.pages.footer.editMenu', [
            'title' => 'Edit Menu',
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "text_menu" => ['required', 'min:3', 'max:20'],
        ]);


        Footer_menu::where('id', $id)->update($validatedData);
        return back()->with('success', 'Sukses update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer_menu $footer_menu, $id)
    {
        Footer_menu::where('id', $id)->delete();
        return to_route('footer')->with('success', 'Sukses hapus data');
    }
}
