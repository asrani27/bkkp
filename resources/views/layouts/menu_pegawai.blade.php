
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
    <a href="/home/pegawai" class="nav-link {{ Request::is('home/pegawai') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>
        Beranda
        </p>
    </a>
    </li>

    <li class="nav-item">
    <a href="/pegawai/skp" class="nav-link {{ Request::is('pegawai/skp') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Target SKP Pegawai
        </p>
    </a>
    </li>

    <li class="nav-item">
    <a href="/pegawai/realisasi" class="nav-link {{ Request::is('pegawai/realisasi') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Realisasi SKP Pegawai
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/pegawai/pejabat_penilai" class="nav-link {{ Request::is('pegawai/pejabat_penilai') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Pejabat Penilai
        </p>
    </a>
    </li>
    
    <li class="nav-item">
    <a href="/pegawai/nilai" class="nav-link {{ Request::is('pegawai/nilai') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
        Nilai Kinerja Bawahan
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/pegawai/laporan" class="nav-link {{ Request::is('pegawai/laporan') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file"></i>
        <p>
            Laporan Penilaian
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/logout" class="nav-link">
        <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
        Logout
        </p>
    </a>
    </li>
</ul>
</nav>