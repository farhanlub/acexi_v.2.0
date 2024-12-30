<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubcribes;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validasi email
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subcribes,email',
        ]);

        // Simpan email ke database
        NewsletterSubcribes::create([
            'email' => $request->email,
        ]);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Terima kasih telah berlangganan!');
    }
}
