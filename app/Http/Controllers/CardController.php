<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Requests\StorecardRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatecardRequest;

class CardController extends Controller
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "title" => ['required', 'min:3', 'max:50'],
            "subtitle" => ['max:255'],
            "img" => ['required', 'file'],
        ]);

        $validatedData['section_id'] = $request->section_id;
        $validatedData['img'] = $request->file('img')->store('images');

        card::create($validatedData);
        return back()->with('success', 'Sukses tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(card $card, $id)
    {
        $data = Card::find($id);

        return view('dashboard.pages.section.editCard', [
            'title' => 'Edit Card',
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, card $card)
    {
        $validatedData = $request->validate([
            "title" => ['required', 'min:3', 'max:50'],
            "subtitle" => ['min:3', 'max:255'],
            "btn_text" => ['max:20'],
            "btn_text" => ['max:100'],
            "img" => ['file'],
        ]);

        if ($request->file('img')) {
            Storage::delete($request->oldImage);
            $validatedData['img'] = $request->file('img')->store('images');
        }

        Card::where('id', $request->id)->update($validatedData);
        return to_route('section')->with('success', 'Sukses update section');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(card $card, $id)
    {
        Card::where('id', $id)->delete();
        return back()->with('success', 'Sukses hapus card');
    }
}
