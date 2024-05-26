<?php

namespace App\Livewire\Components\Admin;

use App\Services\InfoPsbService;
use Livewire\Component;

class RekapJumlahPemasukan extends Component
{
    //String
    public $tahunPsb;

    public function mount(InfoPsbService $infoPsbService) {
        $this->tahunPsb = $infoPsbService->tahunPsb();
    }

    public function render()
    {
        return view('livewire.components.admin.rekap-jumlah-pemasukan');
    }
}
