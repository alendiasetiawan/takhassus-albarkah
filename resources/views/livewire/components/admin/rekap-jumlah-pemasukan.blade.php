<div>
    <div class="card card-congratulation-medal">
        <div class="card-body">
            <h5>Pemasukan PSB {{ $tahunPsb }}</h5>
            <x-items.light-badge color="danger">Menunggu Verifikasi : 2</x-items.light-badge>
            <h3 class="mb-75 mt-4">
                <a href="#">Rp {{ \App\Helpers\MataUangHelper::rupiah(10000) }}</a>
            </h3>
            <button type="button" class="btn btn-primary">View Sales</button>
            <img src="{{ asset('style/app-assets/images/illustration/badge.svg') }}" class="congratulation-medal" alt="Medal Pic" />
        </div>
    </div>
</div>
