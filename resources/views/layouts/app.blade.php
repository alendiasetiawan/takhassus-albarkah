<!DOCTYPE html>
<html lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Aplikasi sistem informasi manajemen pondok online terintegrasi">
    <meta name="keywords" content="siakad pondok, sistem tahfizh, sistem informasi pondok">
    <meta name="author" content="SIMPONI">
    <title>{{ $title ?? 'Home' }} - Takhassus Al Barkah | Sistem Informasi Penerimaan Santri Baru</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('style/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/app-assets/vendors/css/vendors.main.css') }}">
    @stack('vendorCss')
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style/app-assets/css/themes/semi-dark-layout.css') }}">
    <!-- BEGIN: Page CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('style/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    @stack('pageCss')
    <!-- END: Page CSS-->

    <link rel="stylesheet" type="text/css" href="{{ asset('style/assets/css/style.css') }}">
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern navbar-floating footer-static menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="">
    {{-- @php
        $user = DB::table('users')
        ->join('role', 'users.role_id','role.id')
        ->where('users.email', Auth::user()->email)
        ->first();
        $fullname = $user->nama_lengkap;
        $nama = explode(' ', $fullname);
        $nama_depan = $nama[0];
        if(isset($nama[1])) {
            $nama_belakang = $nama[1];
        }
        else {
            $nama_belakang = "";
        }

        $level = $user->nama_role;
        $jenisKelamin = $user->jk;
    @endphp --}}

    {{-- Begin: Header --}}
    @if (Auth::user()->role_id == 1)
        @include('template.component.header.superadmin_header')
    @elseif (Auth::user()->role_id == 2)
        @include('layouts.headers.santri_header')
    @elseif (Auth::user()->role_id == 3)
        @include('template.component.header.pengampu_header')
    @elseif (Auth::user()->role_id == 4)
        @include('template.component.header.admintahfizh_header')
    @elseif (Auth::user()->role_id == 5)
        @include('template.component.header.musyrif_header')
    @elseif (Auth::user()->role_id == 8)
        @include('layouts.headers.guru_header')
    @elseif (Auth::user()->role_id == 12)
        @include('template.component.header.kepalaasrama_header')
    @elseif (Auth::user()->role_id == 13)
        @include('template.component.header.admintalent_header')
    @else
        @include('template.component.header')
    @endif
    {{-- END: Sidebar --}}

    {{-- Begin: Sidebar --}}
    @if (Auth::user()->role_id == 3)
        @include('layouts.sidebars.pengampu_sidebar')
    @elseif (Auth::user()->role_id == 2)
        @include('layouts.sidebars.santri_sidebar')
    @elseif (Auth::user()->role_id == 13)
        @include('layouts.sidebars.admintalent_sidebar')
    @elseif (Auth::user()->role_id == 8)
        @include('layouts.sidebars.guru_sidebar')
    @elseif (Auth::user()->role_id == 12)
        @include('layouts.sidebars.kepala_asrama_sidebar')
    @else
        @include('template.component.sidebar')
    @endif
    {{-- END: Sidebar --}}

    <!-- BEGIN: Bottom Navbar -->
    @include('template.component.bottom_navbar')
    <!-- END: Bottom Navbar -->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            @isset($breadcrumb)
                {{ $breadcrumb }}
            @endisset

            {{ $slot }}
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    @include('layouts.parts.footer')

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('style/app-assets/vendors/js/vendors.min.js') }}" data-navigate-once></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    @stack('vendorScript')
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('style/app-assets/js/core/app-menu.js') }}" data-navigate-once></script>
    <script src="{{ asset('style/app-assets/js/core/app.js') }}" data-navigate-once></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    @stack('pageScript')
    <!-- END: Page JS-->

    <script>
        document.addEventListener('livewire:navigated', () => {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>

</body>
<!-- END: Body-->

</html>
