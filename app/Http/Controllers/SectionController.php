<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoresectionRequest;
use App\Http\Requests\UpdatesectionRequest;
use App\Models\Card;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.section.index', [
            'title' => 'Section',
            "data" => Section::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.section.addSection', [
            'title' => 'Add Section',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name_section" => ['required', 'min:3', 'max:30'],
            "name_type" => ['required'],
            "title" => ['required', 'min:3', 'max:50'],
            "subtitle" => ['max:255'],
            "btn_text" => ['max:20'],
            "btn_link" => ['max:100'],
            "link_section" => ['max:50'],
            'img' => ['file'],
        ]);

        if ($request->file('img')) {
            $validatedData['img'] = $request->file('img')->store('images');
        }

        Section::create($validatedData);
        return to_route('section')->with('success', 'Sukses tambah section');
    }

    /**
     * Display the specified resource.
     */
    public function show(section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id)
    {
        $data = Section::find($id);
        $checkCard = $data->name_type === 3 || $data->name_type === 4 || $data->name_type === 8 ? true : false;

        return view('dashboard.pages.section.editSection', [
            'title' => 'Edit Section',
            'data' => $data,
            'card' => $checkCard
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            "name_section" => ['required', 'min:3', 'max:30'],
            "name_type" => ['required'],
            "title" => ['required', 'min:3', 'max:50'],
            "subtitle" => ['max:255'],
            "btn_text" => ['max:20'],
            "btn_link" => ['max:100'],
            "link_section" => ['max:50'],
        ]);

        if ($request->file('img')) {
            Storage::delete($request->oldImage);
            $validatedData['img'] = $request->file('img')->store('images');
        }

        Section::where('id', $request->id)->update($validatedData);
        return back()->with('success', 'Sukses update section');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(section $section, $id)
    {
        $checkMenu = Card::where('section_id', $id)->get();

        if ($checkMenu) {
            Card::where('section_id', $id)->delete();
        }
        Section::where('id', $id)->delete();
        return to_route('section')->with('succes', 'Berhasil delete data');
    }
}
