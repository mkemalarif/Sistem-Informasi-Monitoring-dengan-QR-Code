@extends('layout/main')

@section('container')

<div class="container-fluid mb-5">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid" src="{{ asset('img/homepageIcon.png') }}" alt="icon1">
            </div>
            <div class="col-lg-5 offset-lg-1">
                <p style="font-size: 2.5rem">Pakaian Anti Hilang Tertukar</p>
                <p class="tulisanBiru" style="font-size: 2.6rem; font-style"> <strong> Laundry Kiloan Terbaik dan
                        Termurah</strong></p>
                <p>dapatkan pengalaman menyenangkan dan nyaman dalam mencuci pakaian hanya di Fariz Laundry</p>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-5">
        <div class="row">
            <h1 class="text-center tulisanBiru mt-5">Keunggulan</h1>
        </div>
        <div class="row d-flex align-content-center mb-5">
            <div class="col-4 offset-4">
                <hr style="border:solid blue;">
            </div>

        </div>
        <div class="row text-center">
            <div class="col">
                <img src="{{ asset('img/uang.png') }}" alt="jam"
                    class="img-thumbnail border-2 border-dark rounded-2 rounded-circle p-2" style="width:8rem">
                <p class="tulisanBiru my-4 " style="font-size: 2rem"><strong> harga yang bersahabat</strong></p>
                <p style="font-size: 1rem"> <small> tersedianya jasa laundry yang murah dan bersahabat dimulai dari
                        harga
                        Rp.8000
                        untuk setiap satu
                        kilogram cucian</small></p>
            </div>
            <div class="col">
                <img src="{{ asset('img/jam.png') }}" alt="uang"
                    class="img-thumbnail border-2 border-dark rounded-2 rounded-circle p-2" style="width:8rem">
                <p class="tulisanBiru my-4 " style="font-size: 2rem"><strong> harga yang bersahabat</strong></p>
                <p style="font-size: 1rem"> <small>Nikmati Jasa laundry cucian yang cepat dan dapatkan informasi tentang
                        status cucian anda</small></p>
            </div>
            <div class="col">
                <img src="{{ asset('img/nyaman.png') }}" alt="nyaman"
                    class="img-thumbnail border-2 border-dark rounded-2 rounded-circle p-2" style="width:8rem">
                <p class="tulisanBiru my-4 " style="font-size: 2rem"><strong>Pelayanan yang ramah</strong></p>
                <p style="font-size: 1rem"> <small>bawa cucian anda ke outlet dan dapatkan keramahan dan kenyamanan dari
                        pegawai kami. layanan yang memuaskan adalah salah satu bentuk kebahagiaan terbaik</small></p>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <h1 class="text-center tulisanBiru mt-5">Layanan yang kami tawarkan</h1>
        </div>
        <div class="row d-flex align-content-center mb-5">
            <div class="col-4 offset-4">
                <hr style="border:solid blue;">
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg col-sm-12 text-center">
                <img src="{{ asset('img/keranjang.png') }}" class="img-fluid mb-5" alt="" style="width: 4rem">
                <h5>Laundry kiloan mulai dari Rp. 8000/Kg</h5>
            </div>
            <div class="col-lg col-sm-12">
                <img src="{{ asset('img/mesin-cuci.png') }}" class="img-fluid mb-5" alt="" style="width: 4rem">
                <h5>Laundry super express mulai dari Rp.15000/Kg</h5>
            </div>
            <div class="col-lg col-sm-12">
                <img src="{{ asset('img/iron.png') }}" class="img-fluid mb-5" alt="" style="width: 4rem">
                <h5> Cuci lipat express mulai dari Rp.8000/Kg</h5>
            </div>
        </div>
        <a href="/daftarHarga" class="btn btn-primary text-center btn-lg ms-3 mt-4 ">Info Layanan Harga</a>
    </div>
</div>
@include('partial/footer')


@endsection