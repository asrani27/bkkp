
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item">
    <a href="/home/superadmin" class="nav-link {{ Request::is('home/superadmin*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>
        Beranda
        </p>
    </a>
    </li>
    <li class="nav-item">
    <a href="/superadmin/pegawai" class="nav-link {{ Request::is('superadmin/pegawai*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-users"></i>
        <p>
            Pegawai
        </p>
    </a>
    </li>
    
    <li class="nav-item">
    <a href="/superadmin/laporan/skp" class="nav-link {{ Request::is('superadmin/laporan/skp') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file"></i>
        <p>
            Laporan SKP Pegawai
        </p>
    </a>
    </li>
    
    <li class="nav-item">
    <a href="/superadmin/laporan/pegawai" class="nav-link {{ Request::is('superadmin/laporan/pegawai') ? 'active' : '' }}">
        <i class="nav-icon fas fa-file"></i>
        <p>
            Laporan Pegawai
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