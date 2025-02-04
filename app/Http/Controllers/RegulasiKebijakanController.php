<?php

namespace App\Http\Controllers;

use App\Models\RegulationCategory;
use App\Models\RegulationCC;
use App\Models\RegulationKebijakan;
use App\Models\RegulationKebijakanCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegulasiKebijakanController extends Controller
{
    function index(): View
    {
        $user = Auth::user();
        // Eager load the related category data
        $categories = RegulationCategory::all();

        return view('pages.admin.peraturan-regulasi-kebijakan.index', compact('user', 'categories'));
    }

    function create(): View
    {
        $user = Auth::user();
        $categories = RegulationCategory::all();
        $regulationCat = RegulationKebijakanCategory::all();
        return view('pages.admin.peraturan-regulasi-kebijakan.create', compact('user', 'categories','regulationCat'));
    }

    public function store(Request $request)
    { 
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'source' => 'required|string',
            'year' => 'required|integer',
            'regulation_categories_id' => 'required|exists:regulation_categories,id',
            'category_id' => 'required|exists:regulation_kebijakan_category,id',
        ]);

        $regulation = new RegulationKebijakan();
        $regulation->title = $request->title;
        $regulation->desc = $request->desc;
        $regulation->source = $request->source;
        $regulation->year = $request->year;
        $regulation->regulation_categories_id = $request->regulation_categories_id;
        $regulation->category_id = $request->category_id;

        $regulation->save();

        return redirect()->route('admin-peraturan-regulasi-kebijakan')->with('success', 'Peraturan berhasil ditambahkan.');
    }

    public function edit($id): View
    {
        $user = Auth::user();
        $regulation = RegulationKebijakan::findOrFail($id);
        $categories = RegulationCategory::all();
        $regulationCat = RegulationKebijakanCategory::all(); 
        return view('pages.admin.peraturan-regulasi-kebijakan.edit', compact('user', 'regulation', 'categories','regulationCat'));
    }

    public function update(Request $request, $id)
    {
        $regulation = RegulationKebijakan::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'source' => 'required|string',
            'year' => 'required|integer',
            'regulation_categories_id' => 'required|exists:regulation_categories,id',
            'category_id' => 'required|exists:regulation_kebijakan_category,id',
        ]);

        $regulation->title = $request->title;
        $regulation->desc = $request->desc;
        $regulation->source = $request->source;
        $regulation->year = $request->year;
        $regulation->regulation_categories_id = $request->regulation_categories_id;
        $regulation->category_id = $request->category_id;

        $regulation->save();

        return redirect()->route('admin-peraturan-regulasi-kebijakan')->with('success', 'Peraturan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $regulation = RegulationKebijakan::findOrFail($id);
        $regulation->delete();

        return redirect()->route('admin-peraturan-regulasi-kebijakan')->with('success', 'Peraturan berhasil dihapus.');
    }


    function indexKategori(): View
    {
        $user = Auth::user();
        $categories = RegulationCategory::all();
        return view('pages.admin.peraturan-regulasi-kebijakan.index-kategori', compact('user', 'categories'));
    }
}
