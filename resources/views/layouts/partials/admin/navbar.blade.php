<!-- BEGIN: Header-->
<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex justify-content-between">
        <!--Desktop Screen-->
        <ul class="nav navbar-nav align-items-center ms-auto d-none d-lg-block d-xl-block">
            <!--Avatar-->
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">{{ $nama_depan }} {{ $nama_belakang }}</span>
                        <span class="user-status">{{ $level }}</span>
                    </div>
                    <span class="avatar">
                        <img class="round"
                        @if ($jenisKelamin == 'Laki-Laki')
                            src="{{ asset('style/app-assets/images/avatars/user-ikhwan.png') }}"
                        @else
                            src="{{ asset('style/app-assets/images/avatars/user-akhwat.png') }}"
                        @endif
                        alt="avatar" height="40" width="40">
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="#"><i class="me-50" data-feather="settings"></i>Pengaturan</a>
                    <a class="dropdown-item" href="/logout"><i class="me-50" data-feather="power"></i>Keluar</a>
                </div>
            </li>
        </ul>
        <!--#Desktop Screen-->

        <!--Mobile Screen-->
        <ul class="nav navbar-nav align-items-center d-lg-none d-xl-none">
            @if ($title != "Dashboard Pengampu" && $title != "Dashboard Admin Tahfizh")
                <li class="nav-item nav-search">
                    @if ($title == 'Statistik Ziyadah Pekanan Santri')
                    <a href="/santri/statistik-hafalan">
                        <i class="ficon d-md-none d-lg-none d-xl-none" data-feather="arrow-left"></i>
                    </a>
                    @endif

                    @if ($title == 'Pilih Statistik Hafalan Santri' || $title == 'Adab dan Ibadah Santri'
                    || $title == 'Statistik Adab dan Ibadah Pekanan' || $title == 'Ujian Sketsa Murojaah' || $title == 'Landing Absensi Pengampu' || $title == 'Database Halaqoh'
                    || $title == 'UAS Tahfizh' || $title == 'Rekap Nilai Akhir Tahfizh' || $title == 'Cetak Rapor Tahfizh' || $title == 'Data Murojaah Santri' || $title == 'Data Ziyadah Santri'
                    || $title == 'Database Santri Tahfizh' || $title == 'Monitoring Absensi Santri Tahfizh' || $title == 'Riwayat Ziyadah' || $title == 'Riwayat Murojaah'
                    || $title == 'Cek Ujian Sketsa Ziyadah' || $title == 'Cek Ujian Sketsa Murojaah' || $title == 'Cek Ujian Robtuz Ziyadah' || $title == 'Cek Ujian Robtul Manzil'
                    || $title == 'Cek Ujian Kenaikan Juz' || $title == 'Cek Statistik Pekanan Ziyadah' || $title == 'Cek Statistik Bulanan Ziyadah' || $title == 'Data Santri Di Halaqoh'
                    || $title == 'Ganti Password Santri' || $title == 'Profil Santri' || $title == 'Detail Absensi Santri' || $title == 'Statistik Bulanan Ziyadah Santri'
                    || $title == 'Statistik Bulanan Murojaah Santri' || $title == 'Pilih Hafalan' || $title == 'Pilih Ujian Tahfizh' || $title == 'Dokumentasi Halaqoh Santri')
                    <a href="/">
                        <i class="ficon d-md-none d-lg-none d-xl-none" data-feather="arrow-left"></i>
                    </a>
                    @endif

                    <!--BACK BUTTON-->
                    @if ($title == 'Detail Riwayat Ziyadah Santri' || $title == 'Riwayat Ziyadah Santri Di Halaqoh' ||
                    $title == 'Detail Riwayat Murojaah Santri' || $title == 'Riwayat Murojaah Santri Di Halaqoh' || $title == 'Revisi Detail Ujian Sketsa Ziyadah'
                    || $title == 'Revisi Detail Ujian Sketsa Murojaah' || $title == 'Santri Lulus Ujian Robtuz Ziyadah' || $title == 'Santri Belum Ujian Robtuz Ziyadah'
                    || $title == 'Santri Tidak Lulus Ujian Robtuz Ziyadah' || $title == 'Santri Lulus Ujian Robtul Manzil' || $title == 'Santri Belum Ujian Robtul Manzil'
                    || $title == 'Santri Tidak Lulus Ujian Robtul Manzil' || $title == 'Detail Riwayat Ujian Kenaikan Juz Santri')
                    <a href="#" onclick="history.back()">
                        <i class="ficon d-md-none d-lg-none d-xl-none" data-feather="arrow-left"></i>
                    </a>
                    @endif

                    <!--Menu Log Ziyadah/Murojaah [Login Santri]-->
                    @if ($title == 'Riwayat Ziyadah Santri' || $title == 'Riwayat Murojaah Santri')
                    <a href="/santri/pilih-hafalan">
                        <i class="ficon d-md-none d-lg-none d-xl-none" data-feather="arrow-left"></i>
                    </a>
                    @endif

                    <!--Menu Hasil Ujian Tahfizh [Login Santri]-->
                    @if ($title == 'Hasil Ujian Sketsa Ziyadah Santri' || $title == 'Hasil Ujian Sketsa Murojaah Santri'
                    || $title == 'Hasil Ujian Kenaikan Juz Santri')
                    <a href="/santri/pilih-ujian-tahfizh">
                        <i class="ficon d-md-none d-lg-none d-xl-none" data-feather="arrow-left"></i>
                    </a>
                    @endif
                </li>
            @endif
        </ul>
        <ul class="nav navbar-nav align-items-center d-lg-none d-xl-none">
            <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none">
                        <span class="user-name fw-bolder">{{ $nama_depan }} {{ $nama_belakang }}</span>
                        <span class="user-status">{{ $level }}</span>
                    </div>
                    <span class="avatar">
                        <img class="round"
                        @if ($jenisKelamin == 'Laki-Laki')
                            src="{{ asset('style/app-assets/images/avatars/user-ikhwan.png') }}"
                        @else
                            src="{{ asset('style/app-assets/images/avatars/user-akhwat.png') }}"
                        @endif
                        alt="avatar" height="40" width="40">
                        <span class="avatar-status-online"></span>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="/santri/profil"><b class="text-primary">{{ $nama_depan }} {{ $nama_belakang }} ({{ $level }})</b> </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="me-50" data-feather="settings"></i>Pengaturan</a>
                    <a class="dropdown-item" href="/logout"><i class="me-50" data-feather="power"></i>Keluar</a>
                </div>
            </li>
        </ul>
        <!--#Mobile Screen-->
    </div>
</nav>
<!-- END: Header-->
