<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\NewsletterSubcribes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validasi email
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subcribes,email',
        ]);

        // Simpan email ke database
        NewsletterSubcribes::create($validated);

        // Redirect ke halaman sebelumnya dengan pesan sukses
        return back()->with('success', 'Terima kasih telah berlangganan!');
    }

    public function submitContact(Request $request)
    { 
        // Validasi input dari form kontak
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'website' => 'nullable|string|max:255',
            'message' => 'nullable|string'
        ]);

        try {
            // Mengirim email dengan data yang diberikan
            Mail::to('farhanlubis.x@gmail.com')->send(new SendMail($validated)); 
            return back()->with('success', 'Terima kasih, pesan Anda telah kami terima. Kami akan segera menghubungi Anda.');
        } catch (\Exception $e) { 
            return back()->with('error', 'Gagal mengirim email: ' . $e->getMessage());
        }
    }
}
