<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebPublicController;
use Illuminate\Support\Facades\Route;
Route::get('/', [WebPublicController::class, 'beranda'])->name('beranda');

Route::get('/program-kegiatan', [WebPublicController::class, 'programsActivities'])->name('program-kegiatan'); 
Route::get('/hubungi-kami', [WebPublicController::class, 'contactUs'])->name('hubungi-kami');

// About Us sub-menu
Route::get('/tentang-kami/profil', [WebPublicController::class, 'profile'])->name('tentang-kami.profil');
Route::get('/tentang-kami/visi-misi', [WebPublicController::class, 'visionMission'])->name('tentang-kami.visi-misi');
Route::get('/tentang-kami/struktur-dewan', [WebPublicController::class, 'dewanStructure'])->name('tentang-kami.struktur-dewan');
Route::get('/tentang-kami/struktur-pengurus', [WebPublicController::class, 'managementStructure'])->name('tentang-kami.struktur-pengurus');
Route::get('/tentang-kami/lingkup-kepakaran', [WebPublicController::class, 'areaOfExpertise'])->name('tentang-kami.lingkup-kepakaran');
Route::get('/tentang-kami/galeri', [WebPublicController::class, 'gallery'])->name('tentang-kami.galeri');

// Member sub-menu
Route::get('/anggota/manfaat', [WebPublicController::class, 'memberBenefits'])->name('anggota.manfaat');
Route::get('/anggota/cara', [WebPublicController::class, 'howToJoin'])->name('anggota.cara');
Route::get('/anggota/mitra', [WebPublicController::class, 'partnerBenefits'])->name('anggota.mitra');
Route::get('/anggota/cara-mitra', [WebPublicController::class, 'howToBecomeMitra'])->name('anggota.cara-mitra');
Route::get('/anggota/mitra-terdaftar', [WebPublicController::class, 'registeredPartners'])->name('anggota.mitra-terdaftar');

// Emission & Climate sub-menu
Route::get('/emisi-iklim/kalkulator', [WebPublicController::class, 'emissionCalculator'])->name('emisi-iklim.kalkulator');
Route::get('/emisi-iklim/climate-change-101', [WebPublicController::class, 'climateChange101'])->name('emisi-iklim.climate-change-101');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
