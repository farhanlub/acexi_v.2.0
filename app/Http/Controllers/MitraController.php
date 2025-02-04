<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class MitraController extends Controller
{
    function akunMitra(): View
    {
        $user = Auth::user();
        $akun_member = User::where('role', 'mitra')->get();
        return view('pages.admin.mitra.akun.index', compact('user', 'akun_member'));
    }
    function akunMitraCreate(): View
    {
        $user = Auth::user();
        $id = User::whereIn('role', ['mitra'])->pluck('mitra_id');
        $members = Mitra::whereNotIn('id', $id)->where('email', '!=', null)->get();
        return view('pages.admin.mitra.akun.create', compact('user', 'members'));
    }
    public function akunMitraStore(Request $request)
    {
        $request->validate(
            [
                'pengurus_id' => 'required|exists:mitra,id',
                'password' => 'required|confirmed|min:6',
            ],
            [
                'password.confirmed' => 'Kata sandi dan konfirmasi kata sandi harus sama.',
                'password.min' => 'Kata sandi harus minimal 6 karakter.',
            ],
        );
        $mitra = Mitra::findOrFail($request->pengurus_id);
        $user = new User();
        $user->email = $mitra->email != null ? $mitra->email : date('dmyhis') . '@acexi.org';
        $user->mitra_id = $request->pengurus_id;
        $user->password = Hash::make($request->password);
        $user->role = 'mitra';
        $user->save();

        return redirect()->route('admin-akun-mitra')->with('success', 'Akun mitra berhasil ditambahkan.');
    }
    function akunMitraEdit($id): View
    {
        $user = Auth::user();
        $pengurus = User::findOrFail($id);
        $id = User::where('role', 'mitra')->pluck('mitra_id');
        $allPengurus = Mitra::whereNotIn('id', $id)->get();
        return view('pages.admin.mitra.akun.edit', compact('user', 'pengurus', 'allPengurus'));
    }
    public function akunMitraUpdate(Request $request, $id)
    {
        $request->validate(
            [
                'pengurus_id' => 'required|exists:mitra,id',
                'password' => 'nullable|confirmed|min:6',
            ],
            [
                'password.confirmed' => 'Kata sandi dan konfirmasi kata sandi harus sama.',
                'password.min' => 'Kata sandi harus minimal 6 karakter.',
            ],
        );

        $user = User::findOrFail($id);

        // Update pengurus_id jika ada perubahan
        $user->mitra_id = $request->pengurus_id;

        // Update password jika ada input baru
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->route('admin-akun-mitra')->with('success', 'Akun mitra berhasil diperbarui.');
    }
    public function akunMitraDestroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin-akun-mitra')->with('success', 'Akun mitra berhasil dihapus.');
    }

    // data pengurus
    function dataMitra(): View
    {
        $user = Auth::user();
        $members = Mitra::orderBy('name')->get();
        return view('pages.admin.mitra.data.index', compact('user', 'members'));
    }
    public function dataMitraCreate(): View
    {
        $user = Auth::user();
        return view('pages.admin.mitra.data.create', compact('user'));
    }

    public function dataMitraStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'email' => 'required|string|unique:mitra,email',
            'website_url' => 'nullable|url',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mitra = new Mitra();
        $mitra->name = $request->name;
        $mitra->email = $request->email;
        $mitra->description = $request->description;
        $mitra->website_url = $request->website_url;

        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('/assets/images/mitra', 'public');
            $mitra->image_url = 'storage/' . $imagePath;
        }

        $mitra->save();

        return redirect()->route('admin-data-mitra')->with('success', 'Data Mitra berhasil ditambahkan.');
    }
    public function dataMitraEdit($id): View
    {
        $user = Auth::user();
        $mitra = Mitra::findOrFail($id);
        return view('pages.admin.mitra.data.edit', compact('mitra', 'user'));
    }

    public function dataMitraUpdate(Request $request, $id)
    {
        $mitra = Mitra::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'email' => ['required','string', 'unique:mitra,email,'. $id],
            'website_url' => 'nullable|url',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mitra->name = $request->name;
        $mitra->email = $request->email;
        $mitra->description = $request->description;
        $mitra->website_url = $request->website_url;

        if ($request->hasFile('image_url')) {
            // Delete old image if exists
            if ($mitra->image_url && Storage::disk('public')->exists(str_replace('storage/', '', $mitra->image_url))) {
                Storage::disk('public')->delete(str_replace('storage/', '', $mitra->image_url));
            }

            $imagePath = $request->file('image_url')->store('/assets/images/mitra', 'public');
            $mitra->image_url = 'storage/' . $imagePath;
        }

        $mitra->save();

        return redirect()->route('admin-data-mitra')->with('success', 'Data Mitra berhasil diperbarui.');
    }
    function dataMitraDestroy($id)
    {
        try {
            $mitra = Mitra::findOrFail($id);

            // Delete associated image if exists
            if ($mitra->image && Storage::disk('public')->exists($mitra->image)) {
                Storage::disk('public')->delete($mitra->image);
            }
            $user = User::where('mitra_id', '=', $mitra->id)->first();
            if ($user) {
                $user->delete();
            }

            $mitra->delete();

            return redirect()->route('admin-data-mitra')->with('success', 'Data Mitra berhasil dihapus.');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Mitra tidak ditemukan/sudah terhapus');
        }
    }
}
