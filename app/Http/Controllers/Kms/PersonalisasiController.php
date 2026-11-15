<?php

namespace App\Http\Controllers\Kms;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

/**
 * Modul KMS Strategi Personalisasi (Penugasan Kerja, Kanban Progres, Diskusi Tugas).
 * Saat ini hanya placeholder — lihat CLAUDE.md untuk rencana pengembangan.
 */
class PersonalisasiController extends Controller
{
    public function index(): View
    {
        return view('kms.personalisasi.index');
    }
}
