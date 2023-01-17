<nav class="navbar navbar-expand-lg navbarcolor">
    <div class="container">
        <a class="navbar-brand text-light" href="/">Faris Laundry</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">

                {{-- navbar admin --}}
                @auth
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/rekapData">Rekapitulasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/dashboard/create">Tambah Transaksi</a>
                </li>
                <li class="nav-item">
                    <form action="/logout">
                        @csrf
                        <button type="submit" class="nav-link btn text-light" href="#"><i
                                class="bi bi-box-arrow-left"></i>
                            Logout</button>
                    </form>
                </li>

                {{-- navbar guest --}}
                @else
                <li class="nav-item">
                    <a class="nav-link text-light" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/statusCucian">Status Cucian</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/daftarHarga">Daftar Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/lokasi">Lokasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="/login"><i class="bi bi-box-arrow-right"></i> Login</a>
                </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>