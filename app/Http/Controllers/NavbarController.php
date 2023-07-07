<?php

namespace App\Http\Controllers;

use App\Models\Navbar;
use App\Models\Navbar_menus;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Validator;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.pages.navbar.index', [
            'title' => 'Navbar Setting',
            'title2' => 'Navbar Menu Setting',
            'btn_add' => count(Navbar::all()) ? false : true,
            'data' =>  Navbar::all()->first(),
            'menu_data' => Navbar_menus::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.navbar.addNavbar', [
            'title' => 'Add Navbar'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "btn_text" => ['required', 'min:3', 'max:20'],
            "btn_link" => ['required', 'min:3'],
            'img_logo' => ['required', 'file'],
        ]);

        $validatedData['img_logo'] = $request->file('img_logo')->store('images');

        Navbar::create($validatedData);
        Alert::success('Success', 'Berhasil tambah data');

        return to_route('navbar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Navbar $navbar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Navbar $navbar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Navbar $navbar)
    {
        // ddd($request->id);
        $validatedData = $request->validate([
            "btn_text" => ['required', 'min:3', 'max:20'],
            "btn_link" => ['required', 'min:3'],
            'img_logo' => ['file'],
        ]);
        if ($request->file('img_logo')) {
            Storage::delete($request->oldImage);
            $validatedData['img_logo'] = $request->file('img_logo')->store('images');
        }

        Navbar::where('id', $request->id)->update($validatedData);
        Alert::success('Success', 'Berhasil tambah data');
        return to_route('navbar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        $checkMenu = Navbar_menus::where('navbar_id', $id)->get();

        if ($checkMenu) {
            Navbar_menus::where('navbar_id', $id)->delete();
        }
        Navbar::where('id', $id)->delete();
        return to_route('navbar')->with('succes', 'Berhasil delete data');
    }
}
