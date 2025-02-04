<?php

namespace App\Http\Controllers;

use App\Models\ExpertScope;
use App\Models\Member;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    function akunMember(): View
    {
        $user = Auth::user();
        $akun_member = User::where('role', 'member')->get(); 
        return view('pages.admin.member.akun.index', compact('user', 'akun_member'));
    }
    function akunMemberCreate(): View
    {
        $user = Auth::user();
        $id = User::whereIn('role', ['member'])->pluck('members_id');
        $members = Member::whereNotIn('id', $id)->where('email', '!=', null)->get();
        return view('pages.admin.member.akun.create', compact('user', 'members'));
    }
    public function akunMemberStore(Request $request)
    {
        $request->validate(
            [
                'pengurus_id' => 'required|exists:members,id',
                'password' => 'required|confirmed|min:6',
            ],
            [
                'password.confirmed' => 'Kata sandi dan konfirmasi kata sandi harus sama.',
                'password.min' => 'Kata sandi harus minimal 6 karakter.',
            ],
        );
        $member = Member::findOrFail($request->pengurus_id);
        $user = new User();
        $user->email = $member->email != null ? $member->email : date('dmyhis') . '@acexi.org';
        $user->members_id = $request->pengurus_id;
        $user->password = Hash::make($request->password);
        $user->role = 'member';
        $user->save();

        return redirect()->route('admin-akun-member')->with('success', 'Akun member berhasil ditambahkan.');
    }
    function akunMemberEdit($id): View
    {
        $user = Auth::user();
        $pengurus = User::findOrFail($id);
        $id = User::where('role', 'member')->pluck('members_id');
        $allPengurus = Member::whereNotIn('id', $id)->get();
        return view('pages.admin.member.akun.edit', compact('user', 'pengurus', 'allPengurus'));
    }
    public function akunMemberUpdate(Request $request, $id)
    {
        $request->validate(
            [
                'pengurus_id' => 'required|exists:members,id',
                'password' => 'nullable|confirmed|min:6',
            ],
            [
                'password.confirmed' => 'Kata sandi dan konfirmasi kata sandi harus sama.',
                'password.min' => 'Kata sandi harus minimal 6 karakter.',
            ],
        );

        $user = User::findOrFail($id);

        // Update pengurus_id jika ada perubahan
        $user->members_id = $request->pengurus_id;

        // Update password jika ada input baru
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('admin-akun-member')->with('success', 'Akun member berhasil diperbarui.');
    }
    public function akunMemberDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin-akun-member')->with('success', 'Akun member berhasil dihapus.');
    }

    // data pengurus
    function dataMember(): View
    {
        $user = Auth::user();
        $members = Member::orderBy('nama_lengkap')->get();

        return view('pages.admin.member.data.index', compact('user', 'members'));
    }
    public function dataMemberCreate(): View
    {
        $user = Auth::user();
        return view('pages.admin.member.data.create', compact('user'));
    }

    public function dataMemberStore(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'id_member' => 'required|string|max:255|unique:members,id_member',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:members,email',
            'whatsapp' => 'required|string|max:20',
            'linkedin' => 'nullable|url',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string',
            'negara' => 'required|string',
            'nama_perusahaan' => 'required|string',
            'posisi_jabatan' => 'required|string',
            'bidang_usaha' => 'required|string',
            'email_perusahaan' => 'required|email',
            'website_perusahaan' => 'nullable|url',
            'aktif_asosiasi_lain' => 'required|in:yes,no',
            'nama_asosiasi' => 'required_if:aktif_asosiasi_lain,yes|nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $member = new Member();
        $member->nama_lengkap = $request->nama_lengkap;
        $member->id_member = $request->id_member;
        $member->tanggal_lahir = $request->tanggal_lahir;
        $member->email = $request->email;
        $member->whatsapp = $request->whatsapp;
        $member->linkedin = $request->linkedin;
        $member->alamat = $request->alamat;
        $member->kota = $request->kota;
        $member->provinsi = $request->provinsi;
        $member->kode_pos = $request->kode_pos;
        $member->negara = $request->negara;
        $member->nama_perusahaan = $request->nama_perusahaan;
        $member->posisi_jabatan = $request->posisi_jabatan;
        $member->bidang_usaha = $request->bidang_usaha;
        $member->email_perusahaan = $request->email_perusahaan;
        $member->website_perusahaan = $request->website_perusahaan;
        $member->aktif_asosiasi_lain = $request->aktif_asosiasi_lain;
        $member->nama_asosiasi = $request->nama_asosiasi;

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('/assets/images/profile_images', 'public');
            $member->image = 'storage/' . $imagePath;
        }

        $member->save();

        return redirect()->route('admin-data-member')->with('success', 'Data Member berhasil ditambahkan.');
    }
    public function dataMemberEdit($id): View
    {
        $user = Auth::user();
        $member = Member::findOrFail($id);
        return view('pages.admin.member.data.edit', compact('user', 'member'));
    }

    public function dataMemberUpdate(Request $request, $id)
    {
        $member = Member::findOrFail($id);

        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'id_member' => 'required|string|max:255|unique:members,id_member,' . $id,
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:members,email,' . $id,
            'whatsapp' => 'required|string|max:20',
            'linkedin' => 'nullable|url',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|string',
            'negara' => 'required|string',
            'nama_perusahaan' => 'required|string',
            'posisi_jabatan' => 'required|string',
            'bidang_usaha' => 'required|string',
            'email_perusahaan' => 'required|email',
            'website_perusahaan' => 'nullable|url',
            'aktif_asosiasi_lain' => 'required|in:yes,no',
            'nama_asosiasi' => 'required_if:aktif_asosiasi_lain,yes|nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $member->nama_lengkap = $request->nama_lengkap;
        $member->id_member = $request->id_member;
        $member->tanggal_lahir = $request->tanggal_lahir;
        $member->email = $request->email;
        $member->whatsapp = $request->whatsapp;
        $member->linkedin = $request->linkedin;
        $member->alamat = $request->alamat;
        $member->kota = $request->kota;
        $member->provinsi = $request->provinsi;
        $member->kode_pos = $request->kode_pos;
        $member->negara = $request->negara;
        $member->nama_perusahaan = $request->nama_perusahaan;
        $member->posisi_jabatan = $request->posisi_jabatan;
        $member->bidang_usaha = $request->bidang_usaha;
        $member->email_perusahaan = $request->email_perusahaan;
        $member->website_perusahaan = $request->website_perusahaan;
        $member->aktif_asosiasi_lain = $request->aktif_asosiasi_lain;
        $member->nama_asosiasi = $request->nama_asosiasi;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($member->image && Storage::disk('public')->exists(str_replace('storage/', '', $member->image))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $member->image));
            }

            $imagePath = $request->file('image')->store('/assets/images/profile_images', 'public');
            $member->image = 'storage/' . $imagePath;
        }

        $member->save();

        return redirect()->route('admin-data-member')->with('success', 'Data Member berhasil diperbarui.');
    }
    function dataMemberDestroy($id)
    {
        try {
            $member = Member::findOrFail($id);

            // Delete associated image if exists
            if ($member->image && Storage::disk('public')->exists($member->image)) {
                Storage::disk('public')->delete($member->image);
            }
            $user = User::where('members_id', '=', $member->id)->first();
            if ($user) {
                $user->delete();
            }

            $member->delete();

            return redirect()->route('admin-data-member')->with('success', 'Data Member berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Member tidak ditemukan/sudah terhapus');
        }
    }
}
