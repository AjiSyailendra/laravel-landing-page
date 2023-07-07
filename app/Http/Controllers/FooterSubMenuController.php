<?php

namespace App\Http\Controllers;

use App\Models\Footer_sub_menu;
use App\Http\Requests\StoreFooter_sub_menuRequest;
use App\Http\Requests\UpdateFooter_sub_menuRequest;
use Illuminate\Http\Request;

class FooterSubMenuController extends Controller
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
            "text_sub_menu" => ['required', 'min:3', 'max:20'],
            "link_sub_menu" => ['required', 'min:3', 'max:100'],
            "type_sub_menu" => ['required'],
        ]);

        $validatedData['footer_menu_id'] = $request->footer_menu_id;

        Footer_sub_menu::create($validatedData);
        return back()->with('success', 'Sukses tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Footer_sub_menu $footer_sub_menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Footer_sub_menu $footer_sub_menu, $id)
    {
        $data = Footer_sub_menu::find($id);

        return view('dashboard.pages.footer.editSubMenu', [
            'title' => 'Edit Sub Menu',
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "text_sub_menu" => ['required', 'min:3', 'max:30'],
            "link_sub_menu" => ['required', 'min:3', 'max:100'],
            "type_sub_menu" => ['required'],
        ]);

        Footer_sub_menu::where('id', $id)->update($validatedData);
        return to_route('footer')->with('success', 'Sukses update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Footer_sub_menu $footer_sub_menu, $id)
    {

        Footer_sub_menu::where('id', $id)->delete();
        return back()->with('success', 'Sukses hapus data');
    }
}
