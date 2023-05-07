<?php

namespace App\Services;

use App\Models\InfoPsb;
use Illuminate\Support\Facades\DB;

class InfoPsbService {

    public function tahunPsb() {
        $query = InfoPsb::find(1);
        $tahunPsb = $query->tahun_ajaran;

        return $tahunPsb;
    }
}
