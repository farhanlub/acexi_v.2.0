<?php

namespace App\Http\Controllers;

use App\Models\NewsProgramKegiatan;
use App\Models\ProgramKegiatan;
use App\Models\Studi;
use App\Models\News;
use App\Models\NewsKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class KumpulanBeritaController extends Controller
{
    function index(): View
    {
        $user = Auth::user();
        $program = NewsKategori::all();
        return view('pages.admin.kumpulan-berita.index', compact('user', 'program'));
    }

    function create(): View
    {
        $user = Auth::user();
        $program = NewsKategori::all();
        return view('pages.admin.kumpulan-berita.create', compact('user', 'program'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'content' => 'required|string',
            'program_kegiatan_id' => 'required|exists:news_categories,id',
            'image' => 'required|string',
        ]);
        $news = new News();
        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->desc = $request->desc;
        $news->source = $request->content;
        $news->image = $request->image;
        $news->news_category_id = $request->program_kegiatan_id;
        $news->views = 0;

        $news->save();

        return redirect()->route('admin-kumpulan-berita')->with('success', 'Berita kegiatan berhasil ditambahkan.');
    }

    public function edit($id): View
    {
        $user = Auth::user();
        $news = News::findOrFail($id);
        $program = NewsKategori::all();
        return view('pages.admin.kumpulan-berita.edit', compact('user', 'news', 'program'));
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'content' => 'required|string',
            'content' => 'required|string',
            'program_kegiatan_id' => 'required|exists:news_categories,id',
            'image' => 'required|string',
        ]);

        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->desc = $request->desc;
        $news->source = $request->content;
        $news->image = $request->image;
        $news->news_category_id = $request->program_kegiatan_id;

        $news->save();

        return redirect()->route('admin-kumpulan-berita')->with('success', 'Berita kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $news = News::findOrFail($id);

        $news->delete();

        return redirect()->route('admin-kumpulan-berita')->with('success', 'Berita kegiatan berhasil dihapus.');
    }

    function indexKategori(): View
    {
        $user = Auth::user();
        $categories = NewsKategori::all();
        return view('pages.admin.kumpulan-berita.index-kategori', compact('user', 'categories'));
    }
    function createKategori(): View
    {
        $user = Auth::user();
        return view('pages.admin.kumpulan-berita.create-kategori', compact('user'));
    }

    public function storeKategori(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);
        $category = new NewsKategori();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->desc = $request->desc;
        $category->save();

        return redirect()->route('admin-kategori-kumpulan-berita')->with('success', 'Kategori berita berhasil ditambahkan.');
    }

    public function editKategori($id): View
    {
        $user = Auth::user();
        $category = NewsKategori::findOrFail($id);
        return view('pages.admin.kumpulan-berita.edit-kategori', compact('user', 'category'));
    }

    public function updateKategori(Request $request, $id)
    {
        $category = NewsKategori::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'desc' => 'required|string',
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'desc' => $request->desc,
        ]);

        return redirect()->route('admin-kategori-kumpulan-berita')->with('success', 'Kategori berita berhasil diperbarui.');
    }

    public function destroyKategori($id)
    {
        $category = NewsKategori::findOrFail($id);
        $category->delete();

        return redirect()->route('admin-kategori-kumpulan-berita')->with('success', 'Kategori berita berhasil dihapus.');
    }
}
