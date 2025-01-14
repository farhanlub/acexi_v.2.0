<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebPublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\WebPrivateController;

Route::get('/', [WebPublicController::class, 'beranda'])->name('beranda');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

Route::get('/program-kegiatan/search/', [WebPublicController::class, 'programsActivitiesSearch'])->name('program-kegiatan.search');
Route::get('/program-kegiatan/{slug}', [WebPublicController::class, 'programsActivitiesDetail'])->name('program-kegiatan.detail');
Route::get('/program-kegiatan/kategori/{category}', [WebPublicController::class, 'programsActivitiesCategory'])->name('program-kegiatan-kategori');

Route::get('/hubungi-kami', [WebPublicController::class, 'contactUs'])->name('hubungi-kami');
Route::get('/berita', [WebPublicController::class, 'news'])->name('berita');
Route::get('/berita/search/', [WebPublicController::class, 'newsSearch'])->name('berita.search');
Route::get('/berita/{slug}', [WebPublicController::class, 'newsDetail'])->name('berita.detail');
Route::get('/berita/kategori/{category}', [WebPublicController::class, 'newsCategory'])->name('berita.kategori');

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
Route::get('/tentang-kami/galeri/{slug}', [WebPublicController::class, 'galleryDetail'])->name('tentang-kami.galeri-detail');

// Member sub-menu
Route::get('/anggota/manfaat', [WebPublicController::class, 'memberBenefits'])->name('anggota.manfaat');
Route::get('/anggota/cara', [WebPublicController::class, 'howToJoin'])->name('anggota.cara');

Route::get('/mitra/manfaat', [WebPublicController::class, 'partnerBenefits'])->name('mitra.manfaat');
Route::get('/mitra/cara', [WebPublicController::class, 'howToJoinMitra'])->name('mitra.cara');
Route::get('/mitra/mitra-terdaftar', [WebPublicController::class, 'registeredPartners'])->name('mitra.mitra-terdaftar');

// Emission & Climate sub-menu
Route::get('/kalkulator-karbon', [WebPublicController::class, 'kalkulatorKarbon'])->name('kalkulator-karbon');
Route::get('/keberlanjutan-dan-pendampingan', [WebPublicController::class, 'keberlanjutanPendampingan'])->name('keberlanjutan-pendampingan');
Route::get('/climate-change-101/indonesia', [WebPublicController::class, 'ccIndonesia'])->name('climate-change-indonesia');
Route::get('/climate-change-101/global', [WebPublicController::class, 'ccGlobal'])->name('climate-change-global');
Route::get('/climate-change-101/peraturan', [WebPublicController::class, 'ccPeraturan'])->name('climate-change-peraturan');

Route::get('/faq', [WebPublicController::class, 'faq'])->name('faq');

Route::middleware('auth')->group(function () {

    Route::get('/tren-terbaru', [WebPrivateController::class, 'tren'])->name('tren-terbaru');
    Route::get('/tren-terbaru/search/', [WebPrivateController::class, 'trenSearch'])->name('tren-terbaru.search');
    Route::get('/tren-terbaru/{slug}', [WebPrivateController::class, 'trenDetail'])->name('tren-terbaru.detail');
    Route::get('/tren-terbaru/kategori/{category}', [WebPrivateController::class, 'trenCategory'])->name('tren-terbaru.kategori');

    Route::get('/studi-kasus', [WebPrivateController::class, 'studi'])->name('studi-kasus');
    Route::get('/studi-kasus/search/', [WebPrivateController::class, 'studiSearch'])->name('studi-kasus.search');
    Route::get('/studi-kasus/{slug}', [WebPrivateController::class, 'studiDetail'])->name('studi-kasus.detail');
    Route::get('/studi-kasus/kategori/{category}', [WebPrivateController::class, 'studiCategory'])->name('studi-kasus.kategori');

    Route::get('/anggota/anggota-terdaftar', [WebPublicController::class, 'registeredMembers'])->name('anggota.anggota-terdaftar');
    Route::get('/anggota/anggota-terdaftar/{id_member}', [WebPublicController::class, 'registeredMembersDetail'])->name('anggota.anggota-terdaftar.detail');
    Route::get('/profil', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profil/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profil/edit-kata-sandi', [ProfileController::class, 'editPassword'])->name('profile.edit.kata-sandi');
    Route::put('/profil/update-kata-sandi', [ProfileController::class, 'updatePassword'])->name('profile.update.kata-sandi');
    Route::put('/profil/update', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__ . '/auth.php';
