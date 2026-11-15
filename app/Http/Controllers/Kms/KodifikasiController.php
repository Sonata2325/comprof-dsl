<?php

namespace App\Http\Controllers\Kms;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Modul KMS Strategi Kodifikasi (Repositori SOP, Artikel Pengetahuan, Glosarium).
 * Saat ini hanya placeholder — lihat CLAUDE.md untuk rencana pengembangan.
 */
class KodifikasiController extends Controller
{
    public function index(): View
    {
        return view('kms.kodifikasi.index');
    }
}
