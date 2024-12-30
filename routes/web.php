<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebPublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

Route::get('/', [WebPublicController::class, 'beranda'])->name('beranda');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

Route::get('/program-kegiatan', [WebPublicController::class, 'programsActivities'])->name('program-kegiatan');
Route::get('/program-kegiatan/{category}', [WebPublicController::class, 'programsActivitiesCategory'])->name('program-kegiatan-kategori');


Route::get('/hubungi-kami', [WebPublicController::class, 'contactUs'])->name('hubungi-kami');
Route::get('/berita', [WebPublicController::class, 'news'])->name('berita');

// About Us sub-menu
Route::get('/tentang-kami/profil', [WebPublicController::class, 'profile'])->name('tentang-kami.profil');
Route::get('/tentang-kami/visi-misi', [WebPublicController::class, 'visionMission'])->name('tentang-kami.visi-misi');
Route::get('/tentang-kami/struktur-dewan', [WebPublicController::class, 'dewanStructure'])->name('tentang-kami.struktur-dewan');
Route::get('/tentang-kami/profil-pengurus/{slug}', [WebPublicController::class, 'profilPengurus'])->name('tentang-kami.profil-pengurus');
Route::get('/tentang-kami/struktur-pengurus', [WebPublicController::class, 'managementStructure'])->name('tentang-kami.struktur-pengurus');
Route::get('/tentang-kami/lingkup-kepakaran', [WebPublicController::class, 'areaOfExpertise'])->name('tentang-kami.lingkup-kepakaran');
Route::get('/tentang-kami/lingkup-kepakaran/{slug}', [WebPublicController::class, 'areaOfExpertiseDetail'])->name('tentang-kami.lingkup-kepakaran.detai');
Route::get('/tentang-kami/galeri', [WebPublicController::class, 'gallery'])->name('tentang-kami.galeri');

// Member sub-menu
Route::get('/anggota/manfaat', [WebPublicController::class, 'memberBenefits'])->name('anggota.manfaat');
Route::get('/anggota/cara', [WebPublicController::class, 'howToJoin'])->name('anggota.cara');
Route::get('/anggota/anggota-terdaftar', [WebPublicController::class, 'registeredMembers'])->name('anggota.anggota-terdaftar');

Route::get('/mitra/manfaat', [WebPublicController::class, 'partnerBenefits'])->name('mitra.manfaat');
Route::get('/mitra/cara', [WebPublicController::class, 'howToJoinMitra'])->name('mitra.cara');
Route::get('/mitra/mitra-terdaftar', [WebPublicController::class, 'registeredPartners'])->name('mitra.mitra-terdaftar');

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
