<?php

namespace App\Http\Controllers;

use App\Models\NewsProgramKegiatan;
use App\Models\ProgramKegiatan;
use App\Models\Tren;
use App\Models\TrenCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class TrenTerbaruController extends Controller
{
    function index(): View
    {
        $user = Auth::user();
        $program = TrenCategory::all();
        return view('pages.admin.tren-terbaru.index', compact('user', 'program'));
    }
    
    function create(): View 
    {
        $user = Auth::user();
        $program = TrenCategory::all();
        return view('pages.admin.tren-terbaru.create', compact('user', 'program'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'content' => 'required|string',
            'program_kegiatan_id' => 'required|exists:tren_categories,id',
            'image' => 'required|string',
        ]);
        $news = new Tren();
        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->desc = $request->desc;
        $news->content = $request->content;
        $news->image = $request->image;
        $news->tren_category_id = $request->program_kegiatan_id;
        $news->views = 0; 

        $news->save();

        return redirect()->route('admin-tren-terbaru')->with('success', 'Berita kegiatan berhasil ditambahkan.');
    }

    public function edit($id): View
    {
        $user = Auth::user();
        $news = Tren::findOrFail($id);
        $program = TrenCategory::all();
        return view('pages.admin.tren-terbaru.edit', compact('user', 'news', 'program'));
    }

    public function update(Request $request, $id)
    {
        $news = Tren::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'content' => 'required|string',
            'content' => 'required|string',
            'program_kegiatan_id' => 'required|exists:tren_categories,id',
            'image' => 'required|string',
        ]);

        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->desc = $request->desc;
        $news->content = $request->content;
        $news->image = $request->image;
        $news->tren_category_id = $request->program_kegiatan_id; 

        $news->save();

        return redirect()->route('admin-tren-terbaru')->with('success', 'Berita kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $news = Tren::findOrFail($id);
 
        $news->delete();

        return redirect()->route('admin-tren-terbaru')->with('success', 'Berita kegiatan berhasil dihapus.');
    }
    
    function indexKategori(): View
    {
        $user = Auth::user();
        $categories = TrenCategory::all();
        return view('pages.admin.tren-terbaru.index-kategori', compact('user', 'categories'));
    }
    // Menambahkan fungsi create untuk membuat kategori baru
public function createKategori(): View
{
    $user = Auth::user();
    return view('pages.admin.tren-terbaru.create-kategori', compact('user'));
}

// Menambahkan fungsi store untuk menyimpan kategori baru
public function storeKategori(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'desc' => 'required|string'
    ]);

    $category = new TrenCategory([
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'desc' => $request->desc
    ]);

    $category->save();

    return redirect()->route('admin-kategori-tren-terbaru')->with('success', 'Kategori berhasil ditambahkan.');
}

// Menambahkan fungsi edit untuk mengedit kategori yang ada
public function editKategori($id): View
{
    $user = Auth::user();
    $category = TrenCategory::findOrFail($id);
    return view('pages.admin.tren-terbaru.edit-kategori', compact('user', 'category'));
}

// Menambahkan fungsi update untuk memperbarui kategori yang ada
public function updateKategori(Request $request, $id)
{
    $category = TrenCategory::findOrFail($id);
    $request->validate([
        'name' => 'required|string|max:255',
        'desc' => 'required|string'
    ]);

    $category->update([
        'name' => $request->name,
        'slug' => Str::slug($request->name),
        'desc' => $request->desc
    ]);

    return redirect()->route('admin-kategori-tren-terbaru')->with('success', 'Kategori berhasil diperbarui.');
}

// Menambahkan fungsi destroy untuk menghapus kategori
public function destroyKategori($id)
{ 
    $category = TrenCategory::findOrFail($id);
    $category->delete();

    return redirect()->route('admin-kategori-tren-terbaru')->with('success', 'Kategori berhasil dihapus.');
}

}
