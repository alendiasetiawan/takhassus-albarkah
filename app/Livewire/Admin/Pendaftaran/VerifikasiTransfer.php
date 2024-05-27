<?php

namespace App\Livewire\Admin\Pendaftaran;

use Livewire\Component;
use Livewire\Attributes\Title;

class VerifikasiTransfer extends Component
{
    #[Title('Verifikasi Transfer Pendaftaran')]

    public function render()
    {
        return view('livewire.admin.pendaftaran.verifikasi-transfer')->layout('layouts.app');
    }
}
