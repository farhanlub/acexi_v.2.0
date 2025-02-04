<?php

namespace App\Http\Controllers;

use App\Models\Bidang;
use App\Models\ExpertScope;
use App\Models\KategoriPengurus;
use App\Models\Member;
use App\Models\Mitra;
use App\Models\Pengurus;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    /**
     * Display the user's profile form.
     */
    function index(): View
    {
        $user = Auth::user();
        $pengurus = Pengurus::count();
        $member = Member::count();
        $mitra = Mitra::count();
        return view('pages.admin.index', compact('user', 'pengurus', 'member', 'mitra'));
    }

    // akun pengurus
    function akunPengurus(): View
    {
        $user = Auth::user();
        $akun_pengurus = User::where('role', 'pengurus')->get();
        return view('pages.admin.pengurus.akun.index', compact('user', 'akun_pengurus'));
    }
    function akunPengurusCreate(): View
    {
        $user = Auth::user();
        $id = User::whereIn('role', ['pengurus','admin'])->pluck('pengurus_id');
        $pengurus = Team::whereNotIn('id', $id)->where('email','!=',null)->get();
        return view('pages.admin.pengurus.akun.create', compact('user', 'pengurus'));
    }
    public function akunPengurusStore(Request $request)
    {
        $request->validate(
            [
                'pengurus_id' => 'required|exists:teams,id',
                'password' => 'required|confirmed|min:6',
            ],
            [
                'password.confirmed' => 'Kata sandi dan konfirmasi kata sandi harus sama.',
                'password.min' => 'Kata sandi harus minimal 6 karakter.',
            ],
        );
        $pengurus = Team::findOrFail($request->pengurus_id);
        $user = new User();
        $user->email = $pengurus->email != null ? $pengurus->email : date('dmyhis') . '@acexi.org';
        $user->pengurus_id = $request->pengurus_id;
        $user->password = Hash::make($request->password);
        $user->role = 'pengurus';
        $user->save();

        return redirect()->route('admin-akun-pengurus')->with('success', 'Akun pengurus berhasil ditambahkan.');
    }
    function akunPengurusEdit($id): View
    {
        $user = Auth::user();
        $pengurus = User::findOrFail($id);
        $id = User::where('role', 'pengurus')->pluck('pengurus_id');
        $allPengurus = Team::whereNotIn('id', $id)->get();
        return view('pages.admin.pengurus.akun.edit', compact('user', 'pengurus', 'allPengurus'));
    }
    public function akunPengurusUpdate(Request $request, $id)
    {
        $request->validate(
            [
                'pengurus_id' => 'required|exists:teams,id',
                'password' => 'nullable|confirmed|min:6',
            ],
            [
                'password.confirmed' => 'Kata sandi dan konfirmasi kata sandi harus sama.',
                'password.min' => 'Kata sandi harus minimal 6 karakter.',
            ],
        );

        $user = User::findOrFail($id);

        // Update pengurus_id jika ada perubahan
        $user->pengurus_id = $request->pengurus_id;

        // Update password jika ada input baru
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('admin-akun-pengurus')->with('success', 'Akun pengurus berhasil diperbarui.');
    }
    public function akunPengurusDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin-akun-pengurus')->with('success', 'Akun pengurus berhasil dihapus.');
    }

    // data pengurus
    function dataPengurus(): View
    {
        $user = Auth::user();
        $kategori_pengurus = KategoriPengurus::all(); // Memuat relasi pengurus beserta tim

        return view('pages.admin.pengurus.data.index', compact('user', 'kategori_pengurus'));
    }

    function dataPengurusCreate(): View
    {
        $user = Auth::user(); 
        $expertScopes = ExpertScope::all(); 
        return view('pages.admin.pengurus.data.create', compact('user','expertScopes'));
    }

    function dataPengurusStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:teams,email',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'pakar' => 'nullable|boolean',
            'display_in_home' => 'nullable|boolean',
            'expert_scope_id' => 'nullable|exists:expert_scopes,id',
        ]);

        $team = new Team();
        $team->name = $request->name;
        $team->email = $request->email;
        $team->facebook = $request->facebook;
        $team->linkedin = $request->linkedin;
        $team->twitter = $request->twitter;
        $team->instagram = $request->instagram;
        $team->pakar = $request->has('pakar') ? 'y' : 'n';
        $team->display_in_home = $request->has('display_in_home') ? 'y' : 'n';
        $team->expert_scope_id = $request->expert_scope_id;
        $team->slug = Str::slug($request->name, '-');

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('/assets/images/team', 'public');
            $team->image = 'storage/' . $imagePath;
        }

        $team->save();

        return redirect()->route('admin-data-pengurus')->with('success', 'Data Pengurus berhasil ditambahkan.');
    }
}
