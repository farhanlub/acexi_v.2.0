<?php
namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\ExpertScope;
use App\Models\KategoriPengurus;
use App\Models\Mitra;
use App\Models\NewsKategori;
use App\Models\NewsProgramKegiatan;
use App\Models\Pakar;
use App\Models\ProgramKegiatan;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;

class WebPublicController extends Controller
{
    // Home Page
    public function beranda()
    {
        $title = 'Association Of Carbon Emission Experts Indonesia';
        $nav_active = ['unix-beranda']; // Kelas untuk menu yang aktif
        $testimonials = Testimonial::limit(3)->get();
        $pakars = Team::where('pakar', 'y')->where('display_in_home', 'y')->get();
        $programKegiatan = ProgramKegiatan::all();
        $expertScopes = ExpertScope::all();
        $mitras = Mitra::all();
        $newsPK = NewsProgramKegiatan::orderBy('created_at', 'desc')->limit(3)->get();
        return view('pages.guest.index', compact('title', 'nav_active', 'testimonials', 'pakars', 'programKegiatan', 'expertScopes', 'mitras','newsPK'));
    }

    // Programs & Activities Page
    public function programsActivities()
    {
        $title = 'Programs & Activities';
        $nav_active = ['unix-program-kegiatan']; // Kelas untuk menu yang aktif
        return view('pages.guest.programs-activities', compact('title', 'nav_active'));
    }
    public function programsActivitiesCategory($category)
    {
        $data = ProgramKegiatan::where('slug', $category)->first();
        if (!$data) {
            abort(404);
        }
        $title = 'Programs & Activities ACEXI ' . $data->title; 
        $newsPK = NewsProgramKegiatan::orderBy('created_at', 'desc')->get();
        $nav_active = ['']; // Kelas untuk menu yang aktif
        return view('pages.guest.programs-activities-category', compact('title', 'nav_active', 'data', 'newsPK'));
    }
    public function programsActivitiesDetail($slug)
    {
        $data = NewsProgramKegiatan::where('slug', $slug)->first();
        if (!$data) {
            abort(404);
        }
        $title = $data->title;
        $nav_active = ['']; // Kelas untuk menu yang aktif
        $category = ProgramKegiatan::all();
        $recent5 = NewsProgramKegiatan::orderBy('created_at', 'desc')->limit(5)->get();
        return view('pages.guest.programs-activities-detail', compact('title', 'nav_active', 'data','category','recent5'));
    }

    // Contact Us Page
    public function contactUs()
    {
        $title = 'Contact Us';
        $nav_active = ['unix-hubungi-kami']; // Kelas untuk menu yang aktif
        return view('pages.guest.contact-us', compact('title', 'nav_active'));
    }

    // About Us - Profile Page
    public function profile()
    {
        $title = 'Profile';
        $nav_active = ['unix-profil', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.about-us.profile', compact('title', 'nav_active'));
    }

    // About Us - Vision & Mission Page
    public function visionMission()
    {
        $title = 'Vision & Mission';
        $nav_active = ['unix-visi-misi', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.about-us.vision-mission', compact('title', 'nav_active'));
    }

    // About Us - Management Structure Page
    public function pengurusPusat()
    {
        $title = 'Pengurus Pusat'; 
        $data = KategoriPengurus::where('name', ['Pengurus Pusat'])->first();
        $komite1 = KategoriPengurus::where('name', ['Komite Teknis 1'])->first();
        $komite2 = KategoriPengurus::where('name', ['Komite Teknis 2'])->first();
        $komite3 = KategoriPengurus::where('name', ['Komite Teknis 3'])->first();
        $nav_active = ['unix-pengurus-pusat', 'unix-struktur-pengurus', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.struktur.pengurus-pusat', compact('title', 'nav_active', 'data','komite1','komite2','komite3'));
    }
    public function pengurusBidang($slug)
    {
        $data = Bidang::where('slug', $slug)->first();
        if (!$data) {
            abort(404);
        }  
        $title = 'Bidang ' . $data->name; 
        $komite1 = KategoriPengurus::where('name', ['Komite Teknis 1'])->first();
        $komite2 = KategoriPengurus::where('name', ['Komite Teknis 2'])->first();
        $komite3 = KategoriPengurus::where('name', ['Komite Teknis 3'])->first();
        $nav_active = ['']; // Kelas untuk menu yang aktif
        return view('pages.guest.struktur.bidang', compact('title', 'nav_active', 'data','komite1','komite2','komite3'));
    }

    // About Us - Team Structure
    public function dewanKehormatan()
    {
        $title = 'Dewan Kehormatan';
        $data = KategoriPengurus::where('name', ['Dewan Kehormatan'])->first();
        $nav_active = ['unix-dewan-kehormatan', 'unix-struktur-pengurus', 'unix-tentang-kami'];
        return view('pages.guest.struktur.dewan-kehormatan', compact('title', 'nav_active', 'data'));
    }
    public function dewanPembina()
    {
        $title = 'Dewan Pembina';
        $data = KategoriPengurus::where('name', ['Dewan Pembina'])->first();
        $nav_active = ['unix-dewan-pembina', 'unix-struktur-pengurus', 'unix-tentang-kami'];
        return view('pages.guest.struktur.dewan-pembina', compact('title', 'nav_active', 'data'));
    } 
    public function dewanPendiri()
    {
        $title = 'Dewan Pendiri';
        $data = KategoriPengurus::where('name', ['Dewan Pendiri'])->first();
        $nav_active = ['unix-dewan-pendiri', 'unix-struktur-pengurus', 'unix-tentang-kami'];
        return view('pages.guest.struktur.dewan-pendiri', compact('title', 'nav_active', 'data'));
    }
    public function dewanPenasehat()
    {
        $title = 'Dewan Penasehat';
        $data = KategoriPengurus::where('name', ['Dewan Penasehat'])->first();
        $nav_active = ['unix-dewan-penasehat', 'unix-struktur-pengurus', 'unix-tentang-kami'];
        return view('pages.guest.struktur.dewan-penasehat', compact('title', 'nav_active', 'data'));
    }
    public function dewanPakar()
    {
        $title = 'Dewan Pakar';
        $data = KategoriPengurus::where('name', ['Dewan Pakar'])->first();
        $nav_active = ['unix-dewan-pakar', 'unix-struktur-pengurus', 'unix-tentang-kami'];
        return view('pages.guest.struktur.dewan-pakar', compact('title', 'nav_active', 'data'));
    }
    // About Us - Team Profile Page
    public function profilPengurus($slug)
    {
        $title = 'Team Profile';
        $data = Team::where('slug', $slug)->first();
        $nav_active = ['unix-profil-pengurus', 'unix-tentang-kami'];
        return view('pages.guest.about-us.team-profile', compact('title', 'nav_active', 'data'));
    }

    // About Us - Area of Expertise Page
    public function areaOfExpertise()
    {
        $title = 'Lingkup Kepakaran';
        $nav_active = ['unix-lingkup-kepakaran', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        $expertScopes = ExpertScope::all();

        return view('pages.guest.about-us.area-of-expertise', compact('title', 'nav_active', 'expertScopes'));
    }
    public function areaOfExpertiseDetail($slug)
    {
        $data = ExpertScope::where('slug', $slug)->first();
        if (!$data) {
            abort(404);
        }
        $title = 'Lingkup Kepakaran ' . $data->title;
        $nav_active = ['']; // Kelas untuk menu yang aktif
        return view('pages.guest.about-us.area-of-expertise-detail', compact('title', 'nav_active', 'data'));
    }

    // About Us - Gallery Page
    public function gallery()
    {
        $title = 'Galeri';
        $nav_active = ['unix-galeri', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.about-us.gallery', compact('title', 'nav_active'));
    }

    // Member - Benefits Page
    public function memberBenefits()
    {
        $title = 'Manfaat menjadi anggota ACEXI';
        $nav_active = ['unix-manfaat-anggota', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.benefits', compact('title', 'nav_active'));
    }

    // Member - How to Join Page
    public function howToJoin()
    {
        $title = 'Cara menjadi anggota ACEXI';
        $nav_active = ['unix-cara-anggota', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.how-to-join', compact('title', 'nav_active'));
    }

    // Member - Registered Members Page
    public function registeredMembers()
    {
        $title = 'Anggota Terdaftar';
        $nav_active = ['unix-anggota-terdaftar', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.registered-members', compact('title', 'nav_active'));
    }
    // Member - Partner Benefits Page
    public function partnerBenefits()
    {
        $title = 'Manfaat menjadi Mitra ACEXI';
        $nav_active = ['unix-manfaat-mitra', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.partner-benefits', compact('title', 'nav_active'));
    }

    // Member - How to Become Partner Page
    public function howToJoinMitra()
    {
        $title = 'Cara menjadi Mitra ACEXI';
        $nav_active = ['unix-cara-mitra', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.how-to-become-partner', compact('title', 'nav_active'));
    }

    // Member - Registered Partners Page
    public function registeredPartners()
    {
        $title = 'Mitra terdaftar';
        $nav_active = ['unix-mitra-terdaftar', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        $mitra = Mitra::all();
        return view('pages.guest.member.registered-partners', compact('title', 'nav_active','mitra'));
    }

    // Emission & Climate - Carbon Calculator Page
    public function kalkulatorKarbon()
    {
        $title = 'Kalkulator Karbon';
        $nav_active = ['unix-kalkulator-karbon', 'unix-emisi-iklim']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.carbon-calculator', compact('title', 'nav_active'));
    }

    // Emission & Climate - Sustainability & Assistance Page
    public function keberlanjutanPendampingan()
    {
        $title = 'Keberlanjutan & Pendampingan';
        $nav_active = ['unix-keberlanjutan-pendampingan', 'unix-emisi-iklim']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.sustainability-assistance', compact('title', 'nav_active'));
    }

    // Emission & Climate - Climate Change Indonesia Page
    public function ccIndonesia()
    {
        $title = 'Climate Change 101 Indonesia';
        $nav_active = ['unix-climate-change-indonesia', 'unix-emisi-iklim']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.cc-indonesia', compact('title', 'nav_active'));
    }

    // Emission & Climate - Climate Change Global Page
    public function ccGlobal()
    {
        $title = 'Climate Change 101 Global';
        $nav_active = ['unix-climate-change-global', 'unix-emisi-iklim']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.cc-global', compact('title', 'nav_active'));
    }

    // Emission & Climate - Climate Change Regulations Page
    public function ccPeraturan()
    {
        $title = 'Climate Change Regulations';
        $nav_active = ['unix-climate-change-regulations', 'unix-emisi-iklim']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.cc-regulations', compact('title', 'nav_active'));
    }

    // News Page
    public function news()
    {
        $title = 'Kumpulan Berita';
        $nav_active = ['berita']; // Kelas untuk menu yang aktif
        $kategori = NewsKategori::all();
        return view('pages.guest.news.index', compact('title', 'nav_active','kategori'));
    }
    
}
