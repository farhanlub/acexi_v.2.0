<?php

namespace App\Http\Controllers;

use App\Models\NewsProgramKegiatan;
use App\Models\ProgramKegiatan; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\View\View;

class KegiatanController extends Controller
{
    function index(): View
    {
        $user = Auth::user();
        $program = ProgramKegiatan::where('type', 'kegiatan')->get();
        return view('pages.admin.kegiatan.index', compact('user', 'program'));
    }
    
    function create(): View 
    {
        $user = Auth::user();
        $program = ProgramKegiatan::where('type', 'kegiatan')->get();
        return view('pages.admin.kegiatan.create', compact('user', 'program'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'content' => 'required|string',
            'program_kegiatan_id' => 'required|exists:program_kegiatan,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $news = new NewsProgramKegiatan();
        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->desc = $request->desc;
        $news->content = $request->content;
        $news->program_kegiatan_id = $request->program_kegiatan_id;
        $news->views = 0;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('/assets/images/news_program_kegiatan', 'public');
            $news->image = 'storage/' . $imagePath;
        }

        $news->save();

        return redirect()->route('admin-kegiatan')->with('success', 'Berita kegiatan berhasil ditambahkan.');
    }

    public function edit($id): View
    {
        $user = Auth::user();
        $news = NewsProgramKegiatan::findOrFail($id);
        $program = ProgramKegiatan::where('type', 'kegiatan')->get();
        return view('pages.admin.kegiatan.edit', compact('user', 'news', 'program'));
    }

    public function update(Request $request, $id)
    {
        $news = NewsProgramKegiatan::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'content' => 'required|string',
            'program_kegiatan_id' => 'required|exists:program_kegiatan,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $news->title = $request->title;
        $news->slug = Str::slug($request->title);
        $news->desc = $request->desc;
        $news->content = $request->content;
        $news->program_kegiatan_id = $request->program_kegiatan_id;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($news->image && Storage::disk('public')->exists(str_replace('storage/', '', $news->image))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $news->image));
            }

            $imagePath = $request->file('image')->store('/assets/images/news_program_kegiatan', 'public');
            $news->image = 'storage/' . $imagePath;
        }

        $news->save();

        return redirect()->route('admin-kegiatan')->with('success', 'Berita kegiatan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $news = NewsProgramKegiatan::findOrFail($id);

        // Delete image if exists
        if ($news->image && Storage::disk('public')->exists(str_replace('storage/', '', $news->image))) {
            Storage::disk('public')->delete(str_replace('storage/', '', $news->image));
        }

        $news->delete();

        return redirect()->route('admin-kegiatan')->with('success', 'Berita kegiatan berhasil dihapus.');
    }
}
