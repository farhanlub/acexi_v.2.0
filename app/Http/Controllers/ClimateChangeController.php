<?php

namespace App\Http\Controllers;

use App\Models\RegulationCategory;
use App\Models\RegulationCC;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ClimateChangeController extends Controller
{
    function index(): View
    {
        $user = Auth::user();
        // Eager load the related category data
        $categories = RegulationCategory::all();

        return view('pages.admin.peraturan-climate-change.index', compact('user', 'categories'));
    }

    function create(): View
    {
        $user = Auth::user();
        $categories = RegulationCategory::all();
        return view('pages.admin.peraturan-climate-change.create', compact('user', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'source' => 'required|string',
            'year' => 'required|integer',
            'regulation_categories_id' => 'required|exists:regulation_categories,id',
        ]);

        $regulation = new RegulationCC();
        $regulation->title = $request->title;
        $regulation->desc = $request->desc;
        $regulation->source = $request->source;
        $regulation->year = $request->year;
        $regulation->regulation_categories_id = $request->regulation_categories_id;

        $regulation->save();

        return redirect()->route('admin-peraturan-climate-change')->with('success', 'Peraturan berhasil ditambahkan.');
    }

    public function edit($id): View
    {
        $user = Auth::user();
        $regulation = RegulationCC::findOrFail($id);
        $categories = RegulationCategory::all();
        return view('pages.admin.peraturan-climate-change.edit', compact('user', 'regulation', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $regulation = RegulationCC::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'source' => 'required|string',
            'year' => 'required|integer',
            'regulation_categories_id' => 'required|exists:regulation_categories,id',
        ]);

        $regulation->title = $request->title;
        $regulation->desc = $request->desc;
        $regulation->source = $request->source;
        $regulation->year = $request->year;
        $regulation->regulation_categories_id = $request->regulation_categories_id;

        $regulation->save();

        return redirect()->route('admin-peraturan-climate-change')->with('success', 'Peraturan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $regulation = RegulationCC::findOrFail($id);
        $regulation->delete();

        return redirect()->route('admin-peraturan-climate-change')->with('success', 'Peraturan berhasil dihapus.');
    }


    function indexKategori(): View
    {
        $user = Auth::user();
        $categories = RegulationCategory::all();
        return view('pages.admin.peraturan-climate-change.index-kategori', compact('user', 'categories'));
    }
}
