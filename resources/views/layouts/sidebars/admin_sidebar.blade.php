<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    @include('layouts.sidebars.brand')
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation" style="font-family: Poppins, serif">
            <li class="nav-item {{ Route::is('admin::dashboard') ? 'active' : '' }}">
                <a class="d-flex align-items-center" href="{{ route('admin::dashboard') }}"><i data-feather="home"></i>
                    <span class="menu-title text-truncate">Dashboard</span>
                </a>
            </li>
            <!--MANAJEMEN JURNAL PEMBELAJARAN-->
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Data Induk</span><i data-feather="more-horizontal"></i>
            </li>
            <li class="nav-item">
                <a class="d-flex align-items-center" href="#"><i data-feather="book-open"></i>
                    <span class="menu-title text-truncate">Pendaftaran</span>
                </a>
                <ul class="menu-content">
                    <li class="">
                        <a class="d-flex align-items-center" wire:navigate href=""><i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Data Santri</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="d-flex align-items-center" wire:navigate href=""><i data-feather="circle"></i>
                            <span class="menu-item text-truncate">Projek Santri</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
