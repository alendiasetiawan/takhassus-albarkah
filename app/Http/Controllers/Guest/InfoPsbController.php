<?php

namespace App\Http\Controllers\Guest;

use App\Models\InfoPsb;
use App\Models\Lembaga;
use App\Models\Program;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TeknisDaftar;
use App\Models\TesMasuk;

class InfoPsbController extends Controller
{
    public function index() {
        $data = [
            'title' => 'Informasi Penerimaan Santri Baru',
            'lembaga' => Lembaga::find(1),
            'psb' => InfoPsb::find(1),
            'tajwid' => Program::where('jenis_program_id', 1)->where('status_psb','Buka')->get(),
            'bahasaArab' => Program::where('jenis_program_id', 2)->where('status_psb','Buka')->get(),
            'syariah' => Program::where('jenis_program_id', 3)->where('status_psb','Buka')->get(),
            'takmili' => Program::where('jenis_program_id', 4)->where('status_psb','Buka')->get(),
            'teknisDaftar' => TeknisDaftar::find(1),
            'tesMasuk' => TesMasuk::find(1),
        ];

        return view('guest.info_psb', $data);
    }

    public function download(){
        $file = public_path('files/Flyer-PSB-Takhassus-AlBarkah-2023-2024.pdf');

        return response()->download($file);
    }
}
