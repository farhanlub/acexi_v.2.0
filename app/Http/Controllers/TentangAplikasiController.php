<?php

namespace App\Http\Controllers;

use App\Models\AppInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;  

class TentangAplikasiController extends Controller
{
    function index(): View
    {
        $user = Auth::user();
        $data = AppInformation::first(); // Asumsi hanya ada satu baris data
        return view('pages.admin.appInformation', compact('user', 'data'));
    }

    public function update(Request $request)
    {   
        $data = AppInformation::first(); // Asumsi hanya ada satu baris data
        $input = $request->only(['name', 'facebook', 'x', 'whatsapp', 'linkedin', 'instagram', 'email', 'address', 'tel']);
        $data->update($input);

        return redirect()->back()->with('success', 'Informasi aplikasi berhasil diperbarui.');
    }
}
