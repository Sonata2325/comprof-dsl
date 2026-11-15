<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class CompanyProfileController extends Controller
{
    /**
     * Halaman utama Company Profile (publik).
     * Konten diambil dari config/company.php.
     */
    public function index(): View
    {
        return view('company-profile.index');
    }
}
