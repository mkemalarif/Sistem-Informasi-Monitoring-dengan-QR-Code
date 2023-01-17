@extends("layout/main")

@section("container")

<div class="container mb-5">
    <h1 class="text-center tulisanBiru my-3">Daftar Harga</h1>
    <p class="text-center">Nikmati layanan laundry yang tak ada duanya. Dapatkan Jasa dengan harga terbaik</p>

    <div class="row mt-5">
        <div class="col-lg-3 col-md-5">
            <div class="card border border-2 border-dark rounded">
                <div class="card-body">
                    <h5 class="card-title text-center">Reguler</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                    <p class="card-text"><strong> Rp.8000/Kg</strong></p>
                    <p class="card-text">Per transaksi</p>
                    <p class="card-text">Tanpa minimum berat</p>
                    <p class="card-text">Tiga hari pengerjaan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5  offset-md-2 offset-lg-0 mt-md-2 mt-lg-0">
            <div class="card border border-2 border-dark rounded">
                <div class="card-body">
                    <h5 class="card-title text-center">Express</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                    <p class="card-text"><strong> Rp.10000/Kg</strong></p>
                    <p class="card-text">Per transaksi</p>
                    <p class="card-text">Tanpa minimum berat</p>
                    <p class="card-text">Satu hari pengerjaan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5">
            <div class="card border border-2 border-dark">
                <div class="card-body">
                    <h5 class="card-title text-center">Super Express</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                    <p class="card-text"><strong> Rp.15000/Kg</strong></p>
                    <p class="card-text">Per transaksi</p>
                    <p class="card-text">Tanpa minimum berat</p>
                    <p class="card-text">Delapan jam pengerjaan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-5 offset-md-2 offset-lg-0 mt-md-2 mt-lg-0">
            <div class="card border border-2 border-dark">
                <div class="card-body">
                    <h5 class="card-title text-center">Extra Express</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                    <p class="card-text"><strong> Rp.20000/Kg</strong></p>
                    <p class="card-text">Per transaksi</p>
                    <p class="card-text">Tanpa minimum berat</p>
                    <p class="card-text">Empat jam pengerjaan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 d-flex justify-content-lg-center">
        <div class="col-lg-3 col-md-4">
            <div class="card border border-2 border-dark">
                <div class="card-body">
                    <h5 class="card-title text-center">Cuci Kering</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                    <p class="card-text"><strong> Rp.4000/Kg</strong></p>
                    <p class="card-text">Per transaksi</p>
                    <p class="card-text">Minimal 5 Kg</p>
                    <p class="card-text">Tiga hari pengerjaan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-md-4">
            <div class="card border border-2 border-dark">
                <div class="card-body">
                    <h5 class="card-title text-center">Cuci Lipat</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                    <p class="card-text"><strong> Rp.6000/kg</strong></p>
                    <p class="card-text">Per transaksi</p>
                    <p class="card-text">Minimal 3 Kg</p>
                    <p class="card-text">Satu hari pengerjaan</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 offset-lg-1 col-md-4">
            <div class="card border border-2 border-dark">
                <div class="card-body">
                    <h5 class="card-title text-center">Cuci Lipat Express</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                    <p class="card-text"><strong> Rp.8000/kg</strong></p>
                    <p class="card-text">Per transaksi</p>
                    <p class="card-text">Tanpa minimum berat</p>
                    <p class="card-text">Delapan jam pengerjaan</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <h4 class="text-center">Tersedia Juga Paket Paket Cuci</h4>
        <div class="row d-flex align-content-center mb-5">
            <div class="col-4 offset-4">
                <hr style="border:solid rgb(0, 0, 0);">
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal text-center">Paket 1</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">Cuci dan Setrika</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30Kg dengan harga Rp. 220.000</li>
                        <li>atau</li>
                        <li>50Kg dengan harga Rp. 400.000</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal text-center">Paket 2</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">Cuci atau Setrika</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>35Kg dengan harga Rp. 160.000</li>
                        <li>atau</li>
                        <li>60Kg dengan harga Rp. 300.000</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal text-center">Paket 3</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">Cuci Lipat</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30Kg dengan harga Rp. 100.000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



</div>
@include('partial/footer')

{{-- <div class="row row-md-2 mt-2">
    <div class="col-lg-3 col-md-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Reguler</h5>
                <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                <p class="card-text">Rp.8000/kg</p>
                <p class="card-text">Per transaksi</p>
                <p class="card-text">Tanpa minimum berat</p>
                <p class="card-text">Tiga hari pengerjaan</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-5 offset-md-2 offset-lg-0">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Express</h5>
                <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                <p class="card-text">Rp.8000/kg</p>
                <p class="card-text">Per transaksi</p>
                <p class="card-text">Tanpa minimum berat</p>
                <p class="card-text">Satu hari pengerjaan</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-5 mt-lg-0 mt-md-2">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Super Express</h5>
                <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                <p class="card-text">Rp.8000/kg</p>
                <p class="card-text">Per transaksi</p>
                <p class="card-text">Tanpa minimum berat</p>
                <p class="card-text">Delapan jam pengerjaan</p>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-5 offset-md-2 offset-lg-0 mt-lg-0 mt-md-2">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Extra Express</h5>
                <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                <p class="card-text">Rp.8000/kg</p>
                <p class="card-text">Per transaksi</p>
                <p class="card-text">Tanpa minimum berat</p>
                <p class="card-text">Empat jam pengerjaan</p>
            </div>
        </div>
    </div>

</div>
<div class="row row-sm-4 mt-4 align-content-center">
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Reguler</h5>
                <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                <p class="card-text">Rp.8000/kg</p>
                <p class="card-text">Per transaksi</p>
                <p class="card-text">Tanpa minimum berat</p>
                <p class="card-text">Tiga hari pengerjaan</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Express</h5>
                <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                <p class="card-text">Rp.8000/kg</p>
                <p class="card-text">Per transaksi</p>
                <p class="card-text">Tanpa minimum berat</p>
                <p class="card-text">Satu hari pengerjaan</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-center">Super Express</h5>
                <h6 class="card-subtitle mb-2 text-muted">Mulai dari</h6>
                <p class="card-text">Rp.8000/kg</p>
                <p class="card-text">Per transaksi</p>
                <p class="card-text">Tanpa minimum berat</p>
                <p class="card-text">Delapan jam pengerjaan</p>
            </div>
        </div>

    </div>
</div>

<div class="row row-md-4 my-3 text-center">
    <h1 class="text-center"></h1>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Paket 1</h4>
            </div>
            <div class="card-body" style="height: 12rem">
                <h1 class="card-title pricing-card-title">Cuci dan Setrika</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>30Kg dengan harga Rp. 220.000</li>
                    <li>atau</li>
                    <li>50Kg dengan harga Rp. 400.000</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Paket 2</h4>
            </div>
            <div class="card-body" style="height: 12rem">
                <h1 class="card-title pricing-card-title">Cuci atau Setrika</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>35Kg dengan harga Rp. 160.000</li>
                    <li>atau</li>
                    <li>60Kg dengan harga Rp. 300.000</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card mb-4 rounded-3">
            <div class="card-header py-3">
                <h4 class="my-0 fw-normal">Paket 3</h4>
            </div>
            <div class="card-body" style="height: 12rem">
                <h1 class="card-title pricing-card-title">Cuci Lipat</h1>
                <ul class="list-unstyled mt-3 mb-4">
                    <li>30Kg dengan harga Rp. 100.000</li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}








@endsection