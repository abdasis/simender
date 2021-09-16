<div>
    <aside class="main-sidebar sidebar-light-blue elevation-1">
        <!-- Brand Logo -->
        <a href="{{route('dashboard')}}" class="brand-link">
            <img src="{{ asset('icons/logo.png') ?? asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">{{\App\Models\Setting::first()->nama_aplikasi ?? 'Nama Aplikasi'}}</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('dist/img/user8-128x128.jpg')}}" class="img-circle " alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
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
                        <a href="{{route('dashboard')}}" class="nav-link {{request()->is('dashboard') ? 'active' : ''}}">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>

                    <li class="nav-item {{request()->is('admin/pengguna/*') ? 'menu-open active' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-id-card-alt"></i>
                            <p>
                                Data SIM
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{route('pengguna.tambah')}}" class="nav-link {{request()->is('admin/pengguna/tambah') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pengguna.semua')}}" class="nav-link {{request()->is('admin/pengguna/data-sim') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Semua Data</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item {{request()->is('admin/stnk/*') ? 'menu-open active' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-address-card"></i>
                            <p>
                                Data STNK
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{route('stnk.tambah')}}" class="nav-link {{request()->is('admin/stnk/tambah') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('stnk.semua')}}" class="nav-link {{request()->is('admin/stnk/data-sim') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Semua Data</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {{request()->is('admin/tilang/*') ? 'menu-open active' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-credit-card"></i>
                            <p>
                                Tilang
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{route('tilang.tambah')}}" class="nav-link {{request()->is('admin/pengguna/tambah') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tambah</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('tilang.semua')}}" class="nav-link {{request()->is('admin/pengguna/data-sim') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Semua Data</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item {{request()->is('admin/setting/*') ? 'menu-open active' : ''}}">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tools"></i>
                            <p>
                                Pengaturan
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('setting.sistem')}}" class="nav-link {{request()->is('admin/setting/sistem') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>System</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('setting.whatsapp')}}" class="nav-link {{request()->is('admin/setting/whatsapp') ? 'active' : ''}}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>WhatsApps</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('laporan')}}" class="nav-link">
                            <i class="nav-icon fas fa-paper-plane"></i>
                            <p>
                                Histori Pengingat
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
</div>
