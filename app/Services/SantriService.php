<?php

namespace App\Services;

use App\Models\Santri;
use App\Providers\StatusProvider;

class SantriService
{
    //Hitug total pemasukan PSB
    public function nominalTransferValid($tahunPsb) {
        return Santri::queryPendaftaran($tahunPsb)
        ->where('status_transfer', StatusProvider::TRANSFER_VALID)
        ->sum('nominal_transfer');
    }

    //Hitung bukti transfer yg belum diverifikasi
    public function verifikasiTransfer($tahunPsb) {
        return Santri::queryPendaftaran($tahunPsb)
        ->where('status_transfer', StatusProvider::TRANSFER_PROSES)
        ->count();
    }

    //Hitung total santri transfer valid
    public function totalTransferValid($tahunPsb) {
        return Santri::queryPendaftaran($tahunPsb)
        ->where('status_transfer', StatusProvider::TRANSFER_VALID)
        ->count();
    }

    //Hitung total santri transfer valid
    public function totalTransferInvalid($tahunPsb) {
        return Santri::queryPendaftaran($tahunPsb)
        ->where('status_transfer', StatusProvider::TRANSFER_INVALID)
        ->count();
    }

    //Tampilkan semua status transfer pendaftar
    public function paginateVerifikasiTransfer($tahunPsb, $limitData, $filterData = null) {
        return Santri::queryPendaftaran($tahunPsb, $filterData)
        ->paginate($limitData);
    }

}
