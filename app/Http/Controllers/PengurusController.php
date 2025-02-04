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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

class PengurusController extends Controller
{
    function akunPengurus(): View
    {
        $user = Auth::user();
        $akun_pengurus = User::where('role', 'pengurus')->get();
        return view('pages.admin.pengurus.akun.index', compact('user', 'akun_pengurus'));
    }
    function akunPengurusCreate(): View
    {
        $user = Auth::user();
        $id = User::whereIn('role', ['pengurus', 'admin'])->pluck('pengurus_id');
        $pengurus = Team::whereNotIn('id', $id)->where('email', '!=', null)->get();
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
        $pengurus = Team::orderBy('name')->get();

        return view('pages.admin.pengurus.data.index', compact('user', 'pengurus'));
    }

    function dataPengurusCreate(): View
    {
        $user = Auth::user();
        $expertScopes = ExpertScope::all();
        return view('pages.admin.pengurus.data.create', compact('user', 'expertScopes'));
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
            'pakar' => 'nullable',
            'display_in_home' => 'nullable',
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
        $team->expert_scope_id = $request->expert_scope_id ?? null;
        $team->slug = Str::slug($request->name, '-');

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('/assets/images/team', 'public');
            $team->image = 'storage/' . $imagePath;
        }

        $team->save();

        return redirect()->route('admin-data-pengurus')->with('success', 'Data Pengurus berhasil ditambahkan.');
    }
    public function dataPengurusEdit($id)
    {
        $user = Auth::user();
        $team = Team::findOrFail($id);
        $expertScopes = ExpertScope::all(); // Pastikan Anda memiliki model dan tabel yang sesuai untuk ExpertScope

        return view('pages.admin.pengurus.data.edit', compact('team', 'expertScopes', 'user'));
    }

    public function dataPengurusUpdate(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:teams,email,' . $id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
        ]);

        $team->name = $request->name;
        $team->email = $request->email;
        $team->facebook = $request->facebook;
        $team->linkedin = $request->linkedin;
        $team->twitter = $request->twitter;
        $team->instagram = $request->instagram;
        $team->pakar = $request->has('pakar') ? 'y' : 'n';
        $team->display_in_home = $request->has('display_in_home') ? 'y' : 'n';

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($team->image && Storage::disk('public')->exists($team->image)) {
                Storage::disk('public')->delete($team->image);
            }

            // Store new image
            $imagePath = $request->file('image')->store('/assets/images/team', 'public');
            $team->image = 'storage/' . $imagePath;
        }

        $team->save();

        return redirect()->route('admin-data-pengurus')->with('success', 'Data Pengurus berhasil diperbarui.');
    }
    function dataPengurusDestroy($id)
    {
        $pengurus = Team::findOrFail($id);

        // Delete associated image if exists
        if ($pengurus->image && Storage::disk('public')->exists($pengurus->image)) {
            Storage::disk('public')->delete($pengurus->image);
        }

        $pengurus->delete();

        return redirect()->route('admin-data-pengurus')->with('success', 'Data Pengurus berhasil dihapus.');
    }

    // struktur
    function strukturPengurus()
    {
        $user = Auth::user();
        $kategori_pengurus = KategoriPengurus::all(); // Memuat relasi pengurus beserta tim

        return view('pages.admin.pengurus.struktur.index', compact('user', 'kategori_pengurus'));
    }
    function strukturBidangPengurus($slug)
    {
        $bidang = Bidang::where('slug',$slug)->firstOrFail(); 
        $user = Auth::user();
        $bidangs = Bidang::all();

        return view('pages.admin.pengurus.struktur.bidang', compact('user','bidang','bidangs'));
    }
    function strukturPengurusCreate(): View
    {
        $user = Auth::user();
        $teams = Team::all();
        $boards = KategoriPengurus::all();
        $divisions = Bidang::all();
        return view('pages.admin.pengurus.struktur.create', compact('user', 'teams', 'boards', 'divisions'));
    }
    public function strukturPengurusStore(Request $request)
    {
        // Validate the request data
        $validated = $request->validate(
            [
                'division_id' => 'required_without:board_id|exists:bidang,id|nullable',
                'board_id' => 'required_without:division_id|exists:kategori_pengurus,id|nullable',
                'position' => 'required_without:board_position|string|nullable',
                'board_position' => 'required_without:position|string|nullable',
                'team_id' => 'required|exists:teams,id',
            ],
            [
                'division_id.required_without' => 'Bidang harus dipilih jika Dewan kosong',
                'board_id.required_without' => 'Dewan harus dipilih jika Bidang kosong',
                'position.required_without' => 'Posisi Bidang harus dipilih jika Posisi Dewan kosong',
                'board_position.required_without' => 'Posisi Dewan harus dipilih jika Posisi Bidang kosong',
                'team_id.required' => 'Pengurus harus dipilih',
            ],
        );

        try {
            // Create new struktur pengurus
            $strukturPengurus = new Pengurus();
            $strukturPengurus->team_id = $validated['team_id'];

            // Set division or board based on which tab was used
            if ($request->has('division_id')) {
                $strukturPengurus->bidang_id = $validated['division_id'];
                $strukturPengurus->role = $validated['position'];
                switch ($request->position) {
                    case 'Ketua':
                        $strukturPengurus->sort = 1;
                        break;
                    case 'Wakil Ketua':
                        $strukturPengurus->sort = 2;
                        break;

                    default:
                        $strukturPengurus->sort = 3;
                        break;
                }
            } else {
                $strukturPengurus->kategori_pengurus_id = $validated['board_id'];
                $strukturPengurus->role = $validated['board_position'];
                switch ($request->board_position) {
                    case 'Ketua':
                        $strukturPengurus->sort = 1;
                        break;
                    case 'Wakil Ketua':
                        $strukturPengurus->sort = 2;
                        break;
                    case 'Sekretaris Jendral':
                        $strukturPengurus->sort = 1;
                        break;
                    case 'Wakil Sekretaris Jendral':
                        $strukturPengurus->sort = 2;
                        break;
                    case 'Bendahara':
                        $strukturPengurus->sort = 1;
                        break;
                    case 'Wakil Bendahara':
                        $strukturPengurus->sort = 2;
                        break;
                    default:
                        $strukturPengurus->sort = 3;
                        break;
                }
            }
            $strukturPengurus->save();
            // Commit transaction

            return redirect()->route('admin-struktur-pengurus')->with('success', 'Data pengurus berhasil ditambahkan');
        } catch (\Exception $e) {
            // Rollback transaction if any error occurs
            DB::rollBack();
            dd($e->getMessage());

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    function strukturPengurusDestroy($id)
    {
        $pengurus = Pengurus::findOrFail($id); 
        $pengurus->delete(); 
        return redirect()->back()->with('success', 'Struktur Pengurus berhasil dihapus.');
    }

}
