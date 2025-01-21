<?php
namespace App\Http\Controllers;

use App\Models\RegulationCategory;
use App\Models\RegulationCC;
use App\Models\RegulationKebijakan;
use App\Models\RegulationKebijakanCategory;
use App\Models\Studi;
use App\Models\StudiCategory;
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
    // News Page
    public function studi()
    {
        $title = 'Studi Kasus Terbaru';
        $nav_active = ['studi-kasus'];
        $kategori = StudiCategory::all();
        $data = Studi::orderBy('created_at', 'desc')->paginate(4);
        $recent5 = Studi::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.member.studi.index', compact('title', 'nav_active', 'kategori', 'data', 'recent5'));
    }

    public function studiDetail($slug)
    {
        $data = Studi::where('slug', $slug)->first();
        if (!$data) {
            abort(404);
        }
        $data->views = $data->views + 1;
        $data->save();
        $title = $data->title;
        $nav_active = ['studi-kasus'];
        $kategori = StudiCategory::all();
        $recent5 = Studi::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.member.studi.detail', compact('title', 'nav_active', 'data', 'kategori', 'recent5'));
    }

    public function studiSearch(Request $request)
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
        $nav_active = ['studi-kasus'];
        $data = Studi::where('title', 'like', '%' . $text . '%')
            ->orderBy('created_at', 'desc')
            ->paginate(4);
        $kategori = StudiCategory::all();
        $recent5 = Studi::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.member.studi.search', compact('text', 'nav_active', 'data', 'kategori', 'recent5'));
    }

    public function studiCategory($category)
    {
        $category = StudiCategory::where('slug', $category)->first();
        if (!$category) {
            abort(404);
        }
        $title = 'Studi Kasus Terbaru - ' . $category->name;
        $kategori = StudiCategory::all();
        $data = Studi::where('studi_category_id', $category->id)
            ->orderBy('created_at', 'desc')
            ->paginate(4);
        $recent5 = Studi::orderBy('created_at', 'desc')->limit(5)->get();
        $nav_active = ['studi-kasus'];
        return view('pages.member.studi.category', compact('title', 'nav_active', 'kategori', 'data', 'recent5', 'category'));
    }
    // Emission & Climate - Climate Change Regulations Page
    public function regulasiKebijakan()
    {
        $title = 'Climate Change Regulations';
        $nav_active = ['unix-climate-change-regulations', 'unix-emisi-iklim']; // Kelas untuk menu yang aktif (termasuk parent)
        $categories = RegulationCategory::all();
        $categoryKebijakan = RegulationKebijakanCategory::all();

        $jenis = request('jenis');
        $kategori = request('kategori');
        $year = request('year');

        // Query utama untuk data RegulationKebijakan
        $query = RegulationKebijakan::query();

        // Jika parameter 'jenis' tidak kosong, tambahkan filter berdasarkan 'regulation_categories_id'
        if (!empty($jenis) && $jenis != '') {
            $query->whereHas('belongToCategory', function ($q) use ($jenis) {
                $q->where('slug', $jenis);
            });
        }

        // Jika parameter 'kategori' tidak kosong, tambahkan filter berdasarkan 'category_id'
        if (!empty($kategori) && $kategori != '') {
            $query->whereHas('belongToKebijakanCategory', function ($q) use ($kategori) {
                $q->where('slug', $kategori);
            });
        }

        // Jika parameter 'year' tidak kosong, tambahkan filter berdasarkan 'year'
        if (!empty($year) && $year != '') {
            $query->where('year', $year);
        }

        // Mengurutkan berdasarkan 'year' dan melakukan paginasi
        $data = $query->orderBy('year', 'desc')->paginate(4);

        // Mengambil data tahun yang unik (tanpa duplikat)
        $years = RegulationKebijakan::select('year')->distinct()->get();
        $yearsArray = $years->pluck('year')->toArray();

        // Mengembalikan view dengan data yang telah diproses
        return view('pages.member.regulations', compact('title', 'nav_active', 'categories', 'categoryKebijakan', 'data', 'yearsArray'));
    }
}
