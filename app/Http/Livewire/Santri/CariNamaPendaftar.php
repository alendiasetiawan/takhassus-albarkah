<?php

namespace App\Http\Livewire\Santri;

use App\Models\Santri;
use Livewire\Component;
use App\Services\InfoPsbService;

class CariNamaPendaftar extends Component
{
    public $search;
    protected $updateQueryString = ['search'];
    protected $InfoPsbService;

    public function boot(InfoPsbService $info) {
        $this->InfoPsbService = $info;
    }

    public function render()
    {
        $dataSearch = $this->search;
        $tahunPsb = $this->InfoPsbService->tahunPsb();

        if ($dataSearch != NULL) {
            $data = [
                'santri' => Santri::cariNama($tahunPsb, $dataSearch),
            ];
        } else {
            $data = [
                'santri' => Santri::cariNamaSemua($tahunPsb),
            ];
        }

        return view('livewire.santri.cari-nama-pendaftar', $data);
    }
}
