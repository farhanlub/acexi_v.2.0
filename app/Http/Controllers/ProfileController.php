<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    function index(): View
    {
        return view('profile.index');
    }
    public function edit(Request $request): View
    {
        $nav_active = [''];
        return view('profile.edit', [
            'user' => $request->user(),
            'nav_active' => $nav_active,
        ]);
    }

    /**
     * Update the user's profile information.
     */

    public function update(Request $request)
    {
        if (Auth::user()->role == 'pengurus' || Auth::user()->role == 'admin') {
            // Validasi data yang dikirimkan dari form
            $request->validate([
                'name' => 'required|string|max:255',
                'facebook' => 'nullable|string|max:255',
                'linkedin' => 'nullable|string|max:255',
                'twitter' => 'nullable|string|max:255',
                'instagram' => 'nullable|string|max:255',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);

            // Ambil data pengguna yang sedang login
            $user = Team::find(Auth::user()->pengurus_id);

            // Update data pengguna sesuai dengan inputan form
            $user->name = $request->input('name');
            $user->slug = Str::slug($request->input('name'));
            $user->facebook = $request->input('facebook');
            $user->linkedin = $request->input('linkedin');
            $user->twitter = $request->input('twitter');
            $user->instagram = $request->input('instagram'); 

            // Handle image upload
            if ($request->hasFile('image')) {
                // Delete old image if exists
                if ($user->image && Storage::disk('public')->exists(str_replace('storage/', '', $user->image))) {
                    Storage::disk('public')->delete(str_replace('storage/', '', $user->image));
                }

                // Store new image
                $imagePath = $request->file('image')->store('/assets/images/team', 'public');
                $user->image = 'storage/' . $imagePath;
            }

            $user->save();
        } else {
            // Validasi data yang dikirimkan dari form
            $request->validate([
                'nama_lengkap' => 'required|string|max:255',
                'whatsapp' => 'nullable|string|max:20',
                'linkedin' => 'nullable|string|max:255',
                'alamat' => 'nullable|string|max:255',
                'kota' => 'nullable|string|max:255',
                'provinsi' => 'nullable|string|max:255',
                'kode_pos' => 'nullable|string|max:10',
                'negara' => 'nullable|string|max:255',
                'nama_perusahaan' => 'nullable|string|max:255',
                'posisi_jabatan' => 'nullable|string|max:255',
                'bidang_usaha' => 'nullable|string|max:255',
                'email_perusahaan' => 'nullable|email|max:255',
                'website_perusahaan' => 'nullable|url|max:255',
                'nama_asosiasi' => 'nullable|string|max:255',
                'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            ]);

            // Ambil data pengguna yang sedang login
            $user = Auth::user()->member;

            // Update data pengguna sesuai dengan inputan form
            $user->nama_lengkap = $request->input('nama_lengkap');
            $user->whatsapp = $request->input('whatsapp');
            $user->linkedin = $request->input('linkedin');
            $user->alamat = $request->input('alamat');
            $user->kota = $request->input('kota');
            $user->provinsi = $request->input('provinsi');
            $user->kode_pos = $request->input('kode_pos');
            $user->negara = $request->input('negara');
            $user->nama_perusahaan = $request->input('nama_perusahaan');
            $user->posisi_jabatan = $request->input('posisi_jabatan');
            $user->bidang_usaha = $request->input('bidang_usaha');
            $user->email_perusahaan = $request->input('email_perusahaan');
            $user->website_perusahaan = $request->input('website_perusahaan');
            $user->nama_asosiasi = $request->input('nama_asosiasi');

            // Update checkbox untuk menampilkan informasi
            $user->nama_lengkap_on = $request->has('nama_lengkap_on') ? 'Y' : 'N';
            $user->email_on = $request->has('email_on') ? 'Y' : 'N';
            $user->whatsapp_on = $request->has('whatsapp_on') ? 'Y' : 'N';
            $user->linkedin_on = $request->has('linkedin_on') ? 'Y' : 'N';
            $user->alamat_on = $request->has('alamat_on') ? 'Y' : 'N';
            $user->kota_on = $request->has('kota_on') ? 'Y' : 'N';
            $user->provinsi_on = $request->has('provinsi_on') ? 'Y' : 'N';
            $user->kode_pos_on = $request->has('kode_pos_on') ? 'Y' : 'N';
            $user->negara_on = $request->has('negara_on') ? 'Y' : 'N';
            $user->nama_perusahaan_on = $request->has('nama_perusahaan_on') ? 'Y' : 'N';
            $user->posisi_jabatan_on = $request->has('posisi_jabatan_on') ? 'Y' : 'N';
            $user->bidang_usaha_on = $request->has('bidang_usaha_on') ? 'Y' : 'N';
            $user->email_perusahaan_on = $request->has('email_perusahaan_on') ? 'Y' : 'N';
            $user->website_perusahaan_on = $request->has('website_perusahaan_on') ? 'Y' : 'N';
            $user->nama_asosiasi_on = $request->has('nama_asosiasi_on') ? 'Y' : 'N';

            if ($request->hasFile('image')) {
                if ($user->image && Storage::disk('public')->exists(str_replace('storage/', '', $user->image))) {
                    Storage::disk('public')->delete(str_replace('storage/', '', $user->image));
                }
                $imagePath = $request->file('image')->store('/assets/images/profile_images', 'public');
                $user->image = 'storage/' . $imagePath;
            }

            $user->save();
        }

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    function editPassword()
    {
        return view('profile.edit-password');
    }
    public function updatePassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
            'new_password_confirmation' => 'required|string|min:8',
        ]);

        // Cek apakah kata sandi lama benar
        if (!Hash::check($request->current_password, Auth::user()->password)) {
            return Redirect::back()->withErrors(['current_password' => 'Kata sandi lama yang Anda masukkan salah.']);
        }

        // Perbarui kata sandi
        $user = User::findOrFail(Auth::id());
        $user->password = Hash::make($request->new_password);
        $user->save();

        // Redirect dengan pesan sukses
        return Redirect::route('profile')->with('status', 'Kata sandi berhasil diperbarui!');
    }
}
