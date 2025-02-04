<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClimateChangeController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\KumpulanBeritaController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebPublicController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RegulasiKebijakanController;
use App\Http\Controllers\StudiKasusController;
use App\Http\Controllers\TrenTerbaruController;
use App\Http\Controllers\WebPrivateController;
use App\Http\Middleware\RoleMiddleware;

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
Route::get('/member', [WebPublicController::class, 'member'])->name('anggota.cari');

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

Route::get('/donasi', [WebPublicController::class, 'donasi'])->name('donasi');

Route::middleware('auth')->group(function () {
    Route::get('/tren-terbaru', [WebPrivateController::class, 'tren'])->name('tren-terbaru');
    Route::get('/tren-terbaru/search/', [WebPrivateController::class, 'trenSearch'])->name('tren-terbaru.search');
    Route::get('/tren-terbaru/{slug}', [WebPrivateController::class, 'trenDetail'])->name('tren-terbaru.detail');
    Route::get('/tren-terbaru/kategori/{category}', [WebPrivateController::class, 'trenCategory'])->name('tren-terbaru.kategori');

    Route::get('/studi-kasus', [WebPrivateController::class, 'studi'])->name('studi-kasus');
    Route::get('/studi-kasus/search/', [WebPrivateController::class, 'studiSearch'])->name('studi-kasus.search');
    Route::get('/studi-kasus/{slug}', [WebPrivateController::class, 'studiDetail'])->name('studi-kasus.detail');
    Route::get('/studi-kasus/kategori/{category}', [WebPrivateController::class, 'studiCategory'])->name('studi-kasus.kategori');

    Route::get('/regulasi-dan-kebijakan', [WebPrivateController::class, 'regulasiKebijakan'])->name('regulasi-dan-kebijakan');

    Route::get('/anggota/anggota-terdaftar', [WebPublicController::class, 'registeredMembers'])->name('anggota.anggota-terdaftar');
    Route::get('/anggota/anggota-terdaftar/{id_member}', [WebPublicController::class, 'registeredMembersDetail'])->name('anggota.anggota-terdaftar.detail');
    Route::get('/profil', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profil/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profil/edit-kata-sandi', [ProfileController::class, 'editPassword'])->name('profile.edit.kata-sandi');
    Route::put('/profil/update-kata-sandi', [ProfileController::class, 'updatePassword'])->name('profile.update.kata-sandi');
    Route::put('/profil/update', [ProfileController::class, 'update'])->name('profile.update');

    Route::prefix('admin')
        ->middleware(['auth', RoleMiddleware::class])
        ->group(function () {
            Route::get('/dashboard', [AdminController::class, 'index'])->name('admin-dashboard');
            


            Route::get('/akun-pengurus', [PengurusController::class, 'akunPengurus'])->name('admin-akun-pengurus'); 
            Route::get('/tambah-akun-pengurus', [PengurusController::class, 'akunPengurusCreate'])->name('admin-akun-pengurus-create');
            Route::post('/tambah-akun-pengurus', [PengurusController::class, 'akunPengurusStore'])->name('admin-akun-pengurus-store');
            Route::get('/edit-akun-pengurus/{id}', [PengurusController::class, 'akunPengurusEdit'])->name('admin-akun-pengurus-edit');
            Route::put('/edit-akun-pengurus/{id}', [PengurusController::class, 'akunPengurusUpdate'])->name('admin-akun-pengurus-update');
            Route::delete('/hapus-akun-pengurus/{id}', [PengurusController::class, 'akunPengurusDestroy'])->name('admin-akun-pengurus-destroy');

            Route::get('/data-pengurus', [PengurusController::class, 'dataPengurus'])->name('admin-data-pengurus');
            Route::get('/tambah-data-pengurus', [PengurusController::class, 'dataPengurusCreate'])->name('admin-data-pengurus-create');
            Route::post('/tambah-data-pengurus', [PengurusController::class, 'dataPengurusStore'])->name('admin-data-pengurus-store');
            Route::get('/edit-data-pengurus/{id}', [PengurusController::class, 'dataPengurusEdit'])->name('admin-data-pengurus-edit');
            Route::put('/edit-data-pengurus/{id}', [PengurusController::class, 'dataPengurusUpdate'])->name('admin-data-pengurus-update');
            Route::delete('/hapus-data-pengurus/{id}', [PengurusController::class, 'dataPengurusDestroy'])->name('admin-data-pengurus-destroy');
            
            Route::get('/struktur-pengurus', [PengurusController::class, 'strukturPengurus'])->name('admin-struktur-pengurus');
            Route::get('/struktur-bidang-pengurus/{slug}', [PengurusController::class, 'strukturBidangPengurus'])->name('admin-struktur-bidang-pengurus');
            Route::get('/tambah-struktur-pengurus', [PengurusController::class, 'strukturPengurusCreate'])->name('admin-struktur-pengurus-create');
            Route::post('/tambah-struktur-pengurus', [PengurusController::class, 'strukturPengurusStore'])->name('admin-struktur-pengurus-store'); 
            Route::delete('/hapus-struktur-pengurus/{id}', [PengurusController::class, 'strukturPengurusDestroy'])->name('admin-struktur-pengurus-destroy');
        
            

            Route::get('/akun-member', [MemberController::class, 'akunMember'])->name('admin-akun-member');
            Route::get('/tambah-akun-member', [MemberController::class, 'akunMemberCreate'])->name('admin-akun-member-create');
            Route::post('/tambah-akun-member', [MemberController::class, 'akunMemberStore'])->name('admin-akun-member-store');
            Route::get('/edit-akun-member/{id}', [MemberController::class, 'akunMemberEdit'])->name('admin-akun-member-edit');
            Route::put('/edit-akun-member/{id}', [MemberController::class, 'akunMemberUpdate'])->name('admin-akun-member-update');
            Route::delete('/hapus-akun-member/{id}', [MemberController::class, 'akunMemberDestroy'])->name('admin-akun-member-destroy');

            Route::get('/data-member', [MemberController::class, 'dataMember'])->name('admin-data-member');
            Route::get('/tambah-data-member', [MemberController::class, 'dataMemberCreate'])->name('admin-data-member-create');
            Route::post('/tambah-data-member', [MemberController::class, 'dataMemberStore'])->name('admin-data-member-store');
            Route::get('/edit-data-member/{id}', [MemberController::class, 'dataMemberEdit'])->name('admin-data-member-edit');
            Route::put('/edit-data-member/{id}', [MemberController::class, 'dataMemberUpdate'])->name('admin-data-member-update');
            Route::delete('/hapus-data-member/{id}', [MemberController::class, 'dataMemberDestroy'])->name('admin-data-member-destroy');



            Route::get('/akun-mitra', [MitraController::class, 'akunMitra'])->name('admin-akun-mitra');
            Route::get('/tambah-akun-mitra', [MitraController::class, 'akunMitraCreate'])->name('admin-akun-mitra-create');
            Route::post('/tambah-akun-mitra', [MitraController::class, 'akunMitraStore'])->name('admin-akun-mitra-store');
            Route::get('/edit-akun-mitra/{id}', [MitraController::class, 'akunMitraEdit'])->name('admin-akun-mitra-edit');
            Route::put('/edit-akun-mitra/{id}', [MitraController::class, 'akunMitraUpdate'])->name('admin-akun-mitra-update');
            Route::delete('/hapus-akun-mitra/{id}', [MitraController::class, 'akunMitraDestroy'])->name('admin-akun-mitra-destroy');

            Route::get('/data-mitra', [MitraController::class, 'dataMitra'])->name('admin-data-mitra');
            Route::get('/tambah-data-mitra', [MitraController::class, 'dataMitraCreate'])->name('admin-data-mitra-create');
            Route::post('/tambah-data-mitra', [MitraController::class, 'dataMitraStore'])->name('admin-data-mitra-store');
            Route::get('/edit-data-mitra/{id}', [MitraController::class, 'dataMitraEdit'])->name('admin-data-mitra-edit');
            Route::put('/edit-data-mitra/{id}', [MitraController::class, 'dataMitraUpdate'])->name('admin-data-mitra-update');
            Route::delete('/hapus-data-mitra/{id}', [MitraController::class, 'dataMitraDestroy'])->name('admin-data-mitra-destroy');



            Route::get('/program', [ProgramController::class, 'index'])->name('admin-program');
            Route::get('/program/create', [ProgramController::class, 'create'])->name('admin-program-create');
            Route::post('/program', [ProgramController::class,'store'])->name('admin-program-store');
            Route::get('/program/{id}/edit', [ProgramController::class, 'edit'])->name('admin-program-edit');
            Route::put('/program/{id}', [ProgramController::class, 'update'])->name('admin-program-update');
            Route::delete('/program/{id}', [ProgramController::class, 'destroy'])->name('admin-program-destroy');

            
            Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('admin-kegiatan');
            Route::get('/kegiatan/create', [KegiatanController::class, 'create'])->name('admin-kegiatan-create');
            Route::post('/kegiatan', [KegiatanController::class,'store'])->name('admin-kegiatan-store');
            Route::get('/kegiatan/{id}/edit', [KegiatanController::class, 'edit'])->name('admin-kegiatan-edit');
            Route::put('/kegiatan/{id}', [KegiatanController::class, 'update'])->name('admin-kegiatan-update');
            Route::delete('/kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('admin-kegiatan-destroy');


            
            Route::get('/tren-terbaru', [TrenTerbaruController::class, 'index'])->name('admin-tren-terbaru');
            Route::get('/tren-terbaru/create', [trenTerbaruController::class, 'create'])->name('admin-tren-terbaru-create');
            Route::post('/tren-terbaru', [trenTerbaruController::class,'store'])->name('admin-tren-terbaru-store');
            Route::get('/tren-terbaru/{id}/edit', [trenTerbaruController::class, 'edit'])->name('admin-tren-terbaru-edit');
            Route::put('/tren-terbaru/{id}', [trenTerbaruController::class, 'update'])->name('admin-tren-terbaru-update');
            Route::delete('/tren-terbaru/{id}', [trenTerbaruController::class, 'destroy'])->name('admin-tren-terbaru-destroy');

            Route::get('/kategori-tren-terbaru', [trenTerbaruController::class, 'indexKategori'])->name('admin-kategori-tren-terbaru');


            
            Route::get('/studi-kasus', [StudiKasusController::class, 'index'])->name('admin-studi-kasus');
            Route::get('/studi-kasus/create', [StudiKasusController::class, 'create'])->name('admin-studi-kasus-create');
            Route::post('/studi-kasus', [StudiKasusController::class,'store'])->name('admin-studi-kasus-store');
            Route::get('/studi-kasus/{id}/edit', [StudiKasusController::class, 'edit'])->name('admin-studi-kasus-edit');
            Route::put('/studi-kasus/{id}', [StudiKasusController::class, 'update'])->name('admin-studi-kasus-update');
            Route::delete('/studi-kasus/{id}', [StudiKasusController::class, 'destroy'])->name('admin-studi-kasus-destroy');

            Route::get('/kategori-studi-kasus', [StudiKasusController::class, 'indexKategori'])->name('admin-kategori-studi-kasus');



            Route::get('/kumpulan-berita', [KumpulanBeritaController::class, 'index'])->name('admin-kumpulan-berita');
            Route::get('/kumpulan-berita/create', [KumpulanBeritaController::class, 'create'])->name('admin-kumpulan-berita-create');
            Route::post('/kumpulan-berita', [KumpulanBeritaController::class,'store'])->name('admin-kumpulan-berita-store');
            Route::get('/kumpulan-berita/{id}/edit', [KumpulanBeritaController::class, 'edit'])->name('admin-kumpulan-berita-edit');
            Route::put('/kumpulan-berita/{id}', [KumpulanBeritaController::class, 'update'])->name('admin-kumpulan-berita-update');
            Route::delete('/kumpulan-berita/{id}', [KumpulanBeritaController::class, 'destroy'])->name('admin-kumpulan-berita-destroy');

            Route::get('/kategori-kumpulan-berita', [KumpulanBeritaController::class, 'indexKategori'])->name('admin-kategori-kumpulan-berita');



            Route::get('/peraturan-climate-change', [ClimateChangeController::class, 'index'])->name('admin-peraturan-climate-change');
            Route::get('/peraturan-climate-change/create', [ClimateChangeController::class, 'create'])->name('admin-peraturan-climate-change-create');
            Route::post('/peraturan-climate-change', [ClimateChangeController::class,'store'])->name('admin-peraturan-climate-change-store');
            Route::get('/peraturan-climate-change/{id}/edit', [ClimateChangeController::class, 'edit'])->name('admin-peraturan-climate-change-edit');
            Route::put('/peraturan-climate-change/{id}', [ClimateChangeController::class, 'update'])->name('admin-peraturan-climate-change-update');
            Route::delete('/peraturan-climate-change/{id}', [ClimateChangeController::class, 'destroy'])->name('admin-peraturan-climate-change-destroy');
            
            Route::get('/kategori-peraturan-climate-change', [ClimateChangeController::class, 'indexKategori'])->name('admin-kategori-peraturan-climate-change');



            Route::get('/peraturan-regulasi-kebijakan', [RegulasiKebijakanController::class, 'index'])->name('admin-peraturan-regulasi-kebijakan');
            Route::get('/peraturan-regulasi-kebijakan/create', [RegulasiKebijakanController::class, 'create'])->name('admin-peraturan-regulasi-kebijakan-create');
            Route::post('/peraturan-regulasi-kebijakan', [RegulasiKebijakanController::class,'store'])->name('admin-peraturan-regulasi-kebijakan-store');
            Route::get('/peraturan-regulasi-kebijakan/{id}/edit', [RegulasiKebijakanController::class, 'edit'])->name('admin-peraturan-regulasi-kebijakan-edit');
            Route::put('/peraturan-regulasi-kebijakan/{id}', [RegulasiKebijakanController::class, 'update'])->name('admin-peraturan-regulasi-kebijakan-update');
            Route::delete('/peraturan-regulasi-kebijakan/{id}', [RegulasiKebijakanController::class, 'destroy'])->name('admin-peraturan-regulasi-kebijakan-destroy');
            
            Route::get('/kategori-peraturan-regulasi-kebijakan', [RegulasiKebijakanController::class, 'indexKategori'])->name('admin-kategori-peraturan-regulasi-kebijakan');


 
        });
});
require __DIR__ . '/auth.php';
