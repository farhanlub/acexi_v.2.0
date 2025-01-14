<?php
namespace App\Http\Controllers;

use App\Models\Tren;
use App\Models\TrenCategory;
use Illuminate\Http\Request;

class WebPrivateController extends Controller
{
    // News Page
    public function tren()
    {
        $title = 'Tren Terbaru';
        $nav_active = ['berita'];
        $kategori = TrenCategory::all();
        $data = Tren::orderBy('created_at', 'desc')->paginate(4);
        $recent5 = Tren::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.member.tren.index', compact('title', 'nav_active', 'kategori', 'data', 'recent5'));
    }

    public function trenDetail($slug)
    {
        $data = Tren::where('slug', $slug)->first();
        if (!$data) {
            abort(404);
        }
        $data->views = $data->views + 1;
        $data->save();
        $title = $data->title;
        $nav_active = ['berita'];
        $kategori = TrenCategory::all();
        $recent5 = Tren::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.member.tren.detail', compact('title', 'nav_active', 'data', 'kategori', 'recent5'));
    }

    public function trenSearch(Request $request)
    {
        $request->validate([
            'search' => [
                'required',
                'string', // Pastikan input berupa string
                'max:255', // Batasi panjang input untuk mencegah overflow
                'regex:/^[a-zA-Z0-9\s]+$/', // Izinkan hanya alfanumerik dan spasi. Sesuaikan regex ini sesuai kebutuhan.
            ],
        ]);

        $text = $request->search;
        $nav_active = ['tren'];
        $data = Tren::where('title', 'like', '%' . $text . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(4);
        $kategori = TrenCategory::all();
        $recent5 = Tren::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.member.tren.search', compact('text', 'nav_active', 'data', 'kategori', 'recent5'));
    }

    public function trenCategory($category)
    {
        $category = TrenCategory::where('slug', $category)->first();
        if (!$category) {
            abort(404);
        }
        $title = 'Tren Terbaru - ' . $category->name;
        $kategori = TrenCategory::all();
        $data = Tren::where('tren_category_id', $category->id)
            ->orderBy('created_at', 'desc')
            ->paginate(4);
        $recent5 = Tren::orderBy('created_at', 'desc')->limit(5)->get();
        $nav_active = ['berita'];
        return view('pages.member.tren.category', compact('title', 'nav_active', 'kategori', 'data', 'recent5', 'category'));
    }
}
