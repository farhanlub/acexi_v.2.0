<?php 
namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Support\Facades\Auth;

class WebPublicController extends Controller
{
    // Home Page
    public function beranda() 
    {  
        $title = 'Association Of Carbon Emission Experts Indonesia'; 
        $nav_active = ['unix-beranda']; // Kelas untuk menu yang aktif
        $testimonials = Testimonial::all();
        return view('pages.guest.index', compact('title', 'nav_active', 'testimonials')); 
    }

    // Programs & Activities Page
    public function programsActivities() 
    { 
        $title = 'Programs & Activities'; 
        $nav_active = ['unix-program-kegiatan']; // Kelas untuk menu yang aktif
        return view('pages.guest.programs-activities', compact('title', 'nav_active')); 
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
        $nav_active = ['unix-pengurus-pusat','unix-struktur-pengurus', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.about-us.management-structure', compact('title', 'nav_active')); 
    }
    public function dewanStructure() 
    { 
        $title = 'dewan Structure'; 
        $nav_active = ['unix-dewan-kehormatan','unix-struktur-pengurus', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.about-us.dewan-structure', compact('title', 'nav_active')); 
    }

    // About Us - Area of Expertise Page
    public function areaOfExpertise() 
    { 
        $title = 'Area of Expertise'; 
        $nav_active = ['unix-lingkup-kepakaran', 'unix-tentang-kami']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.about-us.area-of-expertise', compact('title', 'nav_active')); 
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

    // Member - Partner Benefits Page
    public function partnerBenefits() 
    { 
        $title = 'Partner Benefits'; 
        $nav_active = ['unix-manfaat-mitra', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.partner-benefits', compact('title', 'nav_active')); 
    }

    // Member - How to Become Partner Page
    public function howToBecomeMitra() 
    { 
        $title = 'How to Become a Partner'; 
        $nav_active = ['unix-cara-mitra', 'unix-anggota']; // Kelas untuk menu yang aktif (termasuk parent)
        return view('pages.guest.member.how-to-become-partner', compact('title', 'nav_active')); 
    }

    // Member - Registered Partners Page
    public function registeredPartners() 
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
}
