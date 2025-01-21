<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     * Display the user's profile form.
     */
    function index(): View
    {
        $user = Auth::user();
        return view('pages.admin.index', compact('user'));
    } 
}
