<?php
namespace App\Http\Controllers;

use App\Models\ExpertScope;
use App\Models\KategoriPengurus;
use App\Models\Mitra;
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
        return view('pages.guest.index', compact('title', 'nav_active', 'testimonials', 'pakars', 'programKegiatan', 'expertScopes', 'mitras'));
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
        $nav_active = ['']; // Kelas untuk menu yang aktif
        return view('pages.guest.programs-activities-category', compact('title', 'nav_active', 'data'));
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
    public function managementStructure()
    {
        $title = 'Management Structure';
        $data = Team::where('type', '!=', 'dewan')->get();
        $nav_active = ['unix-pengurus-pusat', 'unix-struktur-pengurus', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.about-us.management-structure', compact('title', 'nav_active', 'data'));
    }
    public function dewanStructure()
    {
        $title = 'Dewan Structure';
        $data = KategoriPengurus::whereIn('name', ['Dewan Kehormatan', 'Dewan Pembina', 'Dewan Pendiri', 'Dewan Penasehat', 'Dewan Pakar'])->get();
        $nav_active = ['unix-dewan-kehormatan', 'unix-struktur-pengurus', 'unix-tentang-kami'];
        return view('pages.guest.about-us.dewan-structure', compact('title', 'nav_active', 'data'));
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
        $title = 'Area of Expertise';
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
        $title = 'Area of Expertise ' . $data->title;
        $nav_active = ['']; // Kelas untuk menu yang aktif
        return view('pages.guest.about-us.area-of-expertise-detail', compact('title', 'nav_active', 'data'));
    }

    // About Us - Gallery Page
    public function gallery()
    {
        $title = 'Gallery';
        $nav_active = ['unix-galeri', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.about-us.gallery', compact('title', 'nav_active'));
    }

    // Member - Benefits Page
    public function memberBenefits()
    {
        $title = 'Member Benefits';
        $nav_active = ['unix-manfaat-anggota', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.benefits', compact('title', 'nav_active'));
    }

    // Member - How to Join Page
    public function howToJoin()
    {
        $title = 'How to Join';
        $nav_active = ['unix-cara-anggota', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.how-to-join', compact('title', 'nav_active'));
    }

    // Member - Registered Members Page
    public function registeredMembers()
    {
        $title = 'Registered Members';
        $nav_active = ['unix-anggota-terdaftar', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.registered-members', compact('title', 'nav_active'));
    }
    // Member - Partner Benefits Page
    public function partnerBenefits()
    {
        $title = 'Partner Benefits';
        $nav_active = ['unix-manfaat-mitra', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.partner-benefits', compact('title', 'nav_active'));
    }

    // Member - How to Become Partner Page
    public function howToJoinMitra()
    {
        $title = 'How to Become a Partner';
        $nav_active = ['unix-cara-mitra', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.how-to-become-partner', compact('title', 'nav_active'));
    }

    // Member - Registered Partners Page
    public function registeredPartnersMitra()
    {
        $title = 'Registered Partners';
        $nav_active = ['unix-mitra-terdaftar', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.registered-partners', compact('title', 'nav_active'));
    } 

    // Emission & Climate - Emission Calculator Page
    public function emissionCalculator()
    {
        $title = 'Emission Calculator';
        $nav_active = ['unix-kalkulator-emisi', 'unix-emisi-iklim']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.emission-climate.emission-calculator', compact('title', 'nav_active'));
    }

    // Emission & Climate - Climate Change 101 Page
    public function climateChange101()
    {
        $title = 'Climate Change 101';
        $nav_active = ['unix-climate-change-101', 'unix-emisi-iklim']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.emission-climate.climate-change-101', compact('title', 'nav_active'));
    }

    // News Page
    public function news()
    {
        $title = 'Kumpulan Berita';
        $nav_active = ['berita']; // Kelas untuk menu yang aktif
        return view('pages.guest.news.index', compact('title', 'nav_active'));
    }
}
