<?php

namespace App\Services;

use App\Models\Santri;

class SantriService
{
    //Hitug total pemasukan PSB
    public function nominalTransferValid($tahunPsb) {
        return Santri::queryPendaftaran($tahunPsb)
        ->where('status_transfer', \App\Providers\StatusProvider::TRANSFER_VALID)
        ->sum('nominal_transfer');
    }

    //Hitung bukti transfer yg belum diverifikasi
    public function verifikasiTransfer($tahunPsb) {
        return Santri::queryPendaftaran($tahunPsb)
        ->where('status_transfer', \App\Providers\StatusProvider::TRANSFER_PROSES)
        ->count();
    }
}
