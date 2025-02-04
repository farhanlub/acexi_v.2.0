<?php

namespace App\Http\Controllers;

use App\Models\NewsProgramKegiatan;
use App\Models\ProgramKegiatan;
use App\Models\Studi;
use App\Models\Tren;
use App\Models\StudiCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class StudiKasusController extends Controller
{
    function index(): View
    {
        $user = Auth::user();
        $program = StudiCategory::all();
        return view('pages.admin.studi-kasus.index', compact('user', 'program'));
    }
    
    function create(): View 
    {
        $user = Auth::user();
        $program = StudiCategory::all();
        return view('pages.admin.studi-kasus.create', compact('user', 'program'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'content' => 'required|string',
            'program_kegiatan_id' => 'required|exists:studi_categories,id',
            'image' => 'required|string',
        ]);
        $news = new Studi();
        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->desc = $request->desc;
        $news->content = $request->content;
        $news->image = $request->image;
        $news->studi_category_id = $request->program_kegiatan_id;
        $news->views = 0; 

        $news->save();

        return redirect()->route('admin-studi-kasus')->with('success', 'Berita kegiatan berhasil ditambahkan.');
    }

    public function edit($id): View
    {
        $user = Auth::user();
        $news = Studi::findOrFail($id);
        $program = StudiCategory::all();
        return view('pages.admin.studi-kasus.edit', compact('user', 'news', 'program'));
    }

    public function update(Request $request, $id)
    {
        $news = Studi::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'content' => 'required|string',
            'content' => 'required|string',
            'program_kegiatan_id' => 'required|exists:studi_categories,id',
            'image' => 'required|string',
        ]);

        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->desc = $request->desc;
        $news->content = $request->content;
        $news->image = $request->image;
        $news->studi_category_id = $request->program_kegiatan_id; 

        $news->save();

        return redirect()->route('admin-studi-kasus')->with('success', 'Berita kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $news = Studi::findOrFail($id);
 
        $news->delete();

        return redirect()->route('admin-studi-kasus')->with('success', 'Berita kegiatan berhasil dihapus.');
    }
    
    function indexKategori(): View
    {
        $user = Auth::user();
        $categories = StudiCategory::all();
        return view('pages.admin.studi-kasus.index-kategori', compact('user', 'categories'));
    }
}
