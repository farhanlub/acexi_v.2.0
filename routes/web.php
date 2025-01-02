<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebPublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;

Route::get('/', [WebPublicController::class, 'beranda'])->name('beranda');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

Route::get('/program-kegiatan', [WebPublicController::class, 'programsActivities'])->name('program-kegiatan');
Route::get('/program-kegiatan/show/{slug}', [WebPublicController::class, 'programsActivitiesDetail'])->name('program-kegiatan.detail');
Route::get('/program-kegiatan/{category}', [WebPublicController::class, 'programsActivitiesCategory'])->name('program-kegiatan-kategori');


Route::get('/hubungi-kami', [WebPublicController::class, 'contactUs'])->name('hubungi-kami');
Route::get('/berita', [WebPublicController::class, 'news'])->name('berita');

// About Us sub-menu
Route::get('/tentang-kami/profil', [WebPublicController::class, 'profile'])->name('tentang-kami.profil');
Route::get('/tentang-kami/visi-misi', [WebPublicController::class, 'visionMission'])->name('tentang-kami.visi-misi'); 

Route::get('/tentang-kami/dewan-kehormatan', [WebPublicController::class, 'dewanKehormatan'])->name('tentang-kami.dewan-kehormatan');
Route::get('/tentang-kami/dewan-pembina', [WebPublicController::class, 'dewanPembina'])->name('tentang-kami.dewan-pembina');
Route::get('/tentang-kami/dewan-pendiri', [WebPublicController::class, 'dewanPendiri'])->name('tentang-kami.dewan-pendiri');
Route::get('/tentang-kami/dewan-penasehat', [WebPublicController::class, 'dewanPenasehat'])->name('tentang-kami.dewan-penasehat');
Route::get('/tentang-kami/dewan-pakar', [WebPublicController::class, 'dewanPakar'])->name('tentang-kami.dewan-pakar');
Route::get('/tentang-kami/pengurus-pusat', [WebPublicController::class, 'pengurusPusat'])->name('tentang-kami.pengurus-pusat');
Route::get('/tentang-kami/bidang/{slug}', [WebPublicController::class, 'pengurusBidang'])->name('tentang-kami.bidang');


Route::get('/tentang-kami/profil-pengurus/{slug}', [WebPublicController::class, 'profilPengurus'])->name('tentang-kami.profil-pengurus');
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
Route::get('/kalkulator-karbon', [WebPublicController::class, 'kalkulatorKarbon'])->name('kalkulator-karbon');
Route::get('/keberlanjutan-dan-pendampingan', [WebPublicController::class, 'keberlanjutanPendampingan'])->name('keberlanjutan-pendampingan');
Route::get('/climate-change-101/indonesia', [WebPublicController::class, 'ccIndonesia'])->name('climate-change-indonesia');
Route::get('/climate-change-101/global', [WebPublicController::class, 'ccGlobal'])->name('climate-change-global');
Route::get('/climate-change-101/peraturan', [WebPublicController::class, 'ccPeraturan'])->name('climate-change-peraturan');


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
