@extends('layouts.registrasi.main')

@push('pageCss')
<link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/css/pages/page-help-center.css') }}" />
@endpush

@section('content')
<!--Search Box-->
<livewire:santri.cari-nama-pendaftar />

<!--Daftar Program-->
<div class="row">
    <div class="col-12">
        <h4 class="fw-semibold mb-3 mt-3">Pilih Program</h4>
    </div>

    @if ($psb->status_psb == 'Tutup')
    <div class="col-12 mb-2">
        <div class="alert alert-danger" role="alert">
            Mohon maaf, pendaftaran program Takhassus Al Barkah sudah TUTUP! Silahkan tunggu tahun depan, <em>Baarakallahu fiikum</em>
        </div>
    </div>
    @else
        <!--Tajwid-->
        <div class="col-lg-4 col-md-6 col-12 mb-2">
            <button
                class="btn btn-primary btn-sm me-1"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseExample"
                aria-expanded="false"
                aria-controls="collapseExample"
            >
                Tajwid Al Qur'an
            </button>

            <div class="collapse" id="collapseExample">
                @foreach ($tajwid as $item)
                <div class="card mt-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="fw-normal mb-2">Pendaftar :
                                @if ($item->santri->count() == 0)
                                    Tidak Ada
                                @else
                                    {{ $item->santri->count() }} Orang
                                @endif
                            </h6>
                        </div>
                        <div class="d-flex justify-content-between align-items-end mt-1">
                            <div class="role-heading">
                            <h4 class="mb-1">{{ $item->nama_program }}</h4>
                            Hari : {{ $item->hari_belajar }}<br>
                            Waktu : {{ $item->waktu_belajar }}<br>
                            Tempat : {{ $item->tempat_belajar }}
                            </div>
                            <a href="/isi-form/{{ $item->id }}" class="text-muted">
                                <button class="btn btn-success btn-sm">Daftar</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!--Bahasa Arab-->
        <div class="col-lg-4 col-md-6 col-12 mb-2">
            <button
                class="btn btn-primary btn-sm me-1"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#bahasa"
                aria-expanded="false"
                aria-controls="bahasa"
            >
                Bahasa Arab
            </button>

            <div class="collapse" id="bahasa">
                @foreach ($bahasaArab as $item)
                <div class="card mt-2">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-normal mb-2">Pendaftar :
                            @if ($item->santri->count() == 0)
                                Tidak Ada
                            @else
                                {{ $item->santri->count() }} Orang
                            @endif
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between align-items-end mt-1">
                        <div class="role-heading">
                        <h4 class="mb-1">{{ $item->nama_program }}</h4>
                        Hari : {{ $item->hari_belajar }}<br>
                        Waktu : {{ $item->waktu_belajar }}<br>
                        Tempat : {{ $item->tempat_belajar }}
                        </div>
                        <a href="/isi-form/{{ $item->id }}" class="text-muted">
                            <button class="btn btn-success btn-sm">Daftar</button>
                        </a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!--Takmili-->
        <div class="col-lg-4 col-md-6 col-12 mb-2">
            <button
                class="btn btn-primary btn-sm me-1"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#programTakmili"
                aria-expanded="false"
                aria-controls="programTakmili"
            >
                Takmili
            </button>

            <div class="collapse" id="programTakmili">
                @foreach ($takmili as $item)
                <div class="card mt-2">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-normal mb-2">Pendaftar :
                            @if ($item->santri->count() == 0)
                                Tidak Ada
                            @else
                                {{ $item->santri->count() }} Orang
                            @endif
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between align-items-end mt-1">
                        <div class="role-heading">
                        <h4 class="mb-1">{{ $item->nama_program }}</h4>
                        Hari : {{ $item->hari_belajar }}<br>
                        Waktu : {{ $item->waktu_belajar }}<br>
                        Tempat : {{ $item->tempat_belajar }}
                        </div>
                        <a href="/isi-form/{{ $item->id }}" class="text-muted">
                            <button class="btn btn-success btn-sm">Daftar</button>
                        </a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!--Syariah-->
        <div class="col-lg-4 col-md-6 col-12 mb-2">
            <button
                class="btn btn-primary btn-sm me-1"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#programSyariah"
                aria-expanded="false"
                aria-controls="programSyariah"
            >
                Ulum Asy-Syariah
            </button>

            <div class="collapse" id="programSyariah">
                @foreach ($syariah as $item)
                <div class="card mt-2">
                    <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h6 class="fw-normal mb-2">Pendaftar :
                            @if ($item->santri->count() == 0)
                                Tidak Ada
                            @else
                                {{ $item->santri->count() }} Orang
                            @endif
                        </h6>
                    </div>
                    <div class="d-flex justify-content-between align-items-end mt-1">
                        <div class="role-heading">
                        <h4 class="mb-1">{{ $item->nama_program }}</h4>
                        Hari : {{ $item->hari_belajar }}<br>
                        Waktu : {{ $item->waktu_belajar }}<br>
                        Tempat : {{ $item->tempat_belajar }}
                        </div>
                        <a href="/isi-form/{{ $item->id }}" class="text-muted">
                            <button class="btn btn-success btn-sm">Daftar</button>
                        </a>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @endif

</div>
@endsection
