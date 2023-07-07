<?php

namespace App\Http\Controllers;

use App\Models\Navbar_menus;
use App\Http\Requests\StoreNavbar_menusRequest;
use App\Http\Requests\UpdateNavbar_menusRequest;
use Illuminate\Http\Request;

class NavbarMenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
            "menu_text" => ['required', 'min:3', 'max:20'],
            "menu_link" => ['required', 'min:3'],
        ]);

        $validatedData['navbar_id'] = $request->navbar_id;


        Navbar_menus::create($validatedData);
        return to_route('navbar')->with('success', 'Sukses tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(Navbar_menus $navbar_menus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request  $navbar_menus, $id)
    {
        $data = Navbar_menus::find($id);
        return view('dashboard.pages.navbar.editNavbarMenu', [
            'title' => 'Edit Menu',
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "menu_text" => ['required', 'min:3', 'max:20'],
            "menu_link" => ['required', 'min:3'],
        ]);

        $validatedData['navbar_id'] = $request->navbar_id;


        Navbar_menus::where('id', $id)->update([
            'menu_text' => $request->menu_text,
            'menu_link' => $request->menu_link,
        ]);

        return to_route('navbar')->with('success', 'Sukses update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $navbar_menus, $id)
    {
        Navbar_menus::where('id', $id)->delete();
        return to_route('navbar')->with('success', 'Sukses hapus data');
    }
}
