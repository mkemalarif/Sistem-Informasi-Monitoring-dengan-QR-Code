<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/create') ? 'active' : '' }}" href="/dashboard/create">
                    <span data-feather="file-plus" class="align-text-bottom"></span>
                    Tambah Transaksi
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('rekapData') ? 'active' : '' }}" href="/rekapData">
                    <span data-feather="filter" class="align-text-bottom"></span>
                    Rekapitulasi
                </a>
            </li>
        </ul>

        @can("isAdmin")
        <h6 class="sidebar-heading d-flex align-items-center px-3 mt-4 mb-1 text-muted">
            <span>ADMINISTRATOR</span>
        </h6>

        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/admin') ? 'active' : '' }}" href="/dashboard/admin">
                    <span data-feather="home" class="align-text-bottom"></span>Halaman Owner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/admin/create*') ? 'active' : '' }}"
                    href="/dashboard/admin/create">
                    <span data-feather="file-plus" class="align-text-bottom"></span>
                    Tambah Admin</a>
            </li>
        </ul>
        @endcan
    </div>
</nav>