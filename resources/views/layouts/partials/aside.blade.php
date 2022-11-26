<aside class="main-sidebar sidebar-dark-primary elevation-4">
<!-- Brand Logo -->
<a href="{{ route('admin.dashboard') }}" class="brand-link">
    <img src="{{ asset('backend/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Kopidik</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
        <a href="#" class="d-block">Administrator</a>
    </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group mb-2" data-widget="sidebar-select">
            <livewire:component.select-option-semester />
        </div>
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.dapodiksync') }}" class="nav-link {{ request()->is('admin/dapodiksync') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tools"></i>
                <p>
                    Web Service Dapodik
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.ambildata') }}" class="nav-link {{ request()->is('admin/ambildata') ? 'active' : '' }}">
                <i class="nav-icon fas fa-arrow-circle-down"></i>
                <p>
                    Ambil Data Dapodik
                </p>
            </a>
        </li>
        <li class="nav-item {{request()->is('admin/master*') ? 'menu-open' : ''}}">
            <a href="#" class="nav-link {{request()->is('admin/master*') ? 'active' : ''}}">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                    Master Data Dapodik
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('admin.master.sekolah')}}" class="nav-link {{request()->is('admin/master-sekolah') ? 'active' : ''}}">
                        <i class="fa fa-database nav-icon"></i>
                        <p>Data Sekolah</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.master.prasarana')}}" class="nav-link {{request()->is('admin/master-prasarana') ? 'active' : ''}}">
                        <i class="fa fa-database nav-icon"></i>
                        <p>Data Prasarana</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.master.guru')}}" class="nav-link {{request()->is('admin/master-guru') ? 'active' : ''}}">
                        <i class="fa fa-database nav-icon"></i>
                        <p>Data Guru</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin.master.pesertadidik')}}" class="nav-link {{request()->is('admin/master-peserta-didik') ? 'active' : ''}}">
                        <i class="fa fa-database nav-icon"></i>
                        <p>Data Peserta Didik</p>
                    </a>
                </li>
            <li class="nav-item">
                <a href="{{route('admin.master.kelas')}}" class="nav-link {{request()->is('admin/master-kelas') ? 'active' : ''}}">
                    <i class="fa fa-database nav-icon"></i>
                    <p>Data Kelas</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.master.mapel')}}" class="nav-link {{request()->is('admin/master-mapel') ? 'active' : ''}}">
                    <i class="fa fa-database nav-icon"></i>
                    <p>Data Mata Pelajaran</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.master.pembelajaran')}}" class="nav-link {{request()->is('admin/master-pembelajaran') ? 'active' : ''}}">
                    <i class="fa fa-database nav-icon"></i>
                    <p>Data Pembelajaran</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                <i class="fa fa-database nav-icon"></i>
                <p>Data Ekstrakulikuler</p>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-header">LAYANAN</li>
        <li class="nav-item {{request()->is('admin/kesiswaan*') ? 'menu-open' : ''}}">
            <li class="nav-item">
                <a href="{{route('admin.kesiswaan.daftarnama')}}" class="nav-link {{request()->is('admin/kesiswaan-daftar-nama') ? 'active' : ''}}">
                    <i class="fa fa-list-ul nav-icon"></i>
                    <p>Daftar Nama</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.kesiswaan.suker')}}" class="nav-link {{request()->is('admin/kesiswaan-suker*') ? 'active' : ''}}">
                    <i class="fa fa-envelope nav-icon"></i>
                    <p>Surat Keterangan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.backup-restore') }}" class="nav-link {{request()->is('admin/backup-restore*') ? 'active' : ''}}" >
                    <i class="fa fa-database nav-icon"></i>
                    <p>Backup / Restore</p>
                </a>
            </li>
        </li>
        <li class="nav-header">KELUAR</li>
        <li class="nav-item nav-logout">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();var result = confirm('Apakah anda yakin akan keluar ?'); if(result){document.getElementById('logout-form').submit();}">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
            </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
