<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TCD Store</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ Request::path() === 'admin' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span class="menu-title">Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.pelanggan') }}">
            <i class="fas fa-fw fa-user"></i>
            <span class="menu-title">Pelanggan</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Master:</h6>
                <a class="collapse-item" href="{{ route('admin.product') }}">Product</a>
                <a class="collapse-item" href="{{ route('admin.categories') }}">Kategori</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#transaksi"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-file-invoice-dollar"></i>
            <span>Transaksi</span>
        </a>
        <div id="transaksi" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Master:</h6>
                <a class="collapse-item" href="{{ route('admin.transaksi') }}">Pesanan Baru</a>
                <a class="collapse-item" href="{{ route('admin.transaksi.perludicek') }}">Perlu Di Cek</a>
                <a class="collapse-item" href="{{ route('admin.transaksi.perludikirim') }}">Perlu Di Kirim</a>
                <a class="collapse-item" href="{{ route('admin.transaksi.dikirim') }}">Barang Di Kirim</a>
                <a class="collapse-item" href="{{ route('admin.transaksi.selesai') }}">Selesai</a>
                <a class="collapse-item" href="{{ route('admin.transaksi.dibatalkan') }}">Dibatalkan</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengaturan"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Pengaturan</span>
        </a>
        <div id="pengaturan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Master:</h6>
                <a class="collapse-item" href="{{ route('admin.pengaturan.alamat') }}">Alamat</a>
                <a class="collapse-item" href="{{ route('admin.rekening') }}">No Rekening</a>
            </div>
        </div>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
