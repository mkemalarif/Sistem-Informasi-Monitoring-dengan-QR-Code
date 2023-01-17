@extends("layout.main")

@section("container")

<div class="container-fluid">
    <div class="container mt-5">

        <h1 class="text-center tulisanBiru my-3">Frequently Asked Question</h1>
        <p class="justify-content-center p-3" data-bs-toggle="collapse" href="#collapse1">1. Apa itu Fariz Laundry
        </p>
        <div class="collapse" id="collapse1">
            <p>Fariz Laundry adalah salah satu jasa laundry yang menawarkan
                pelayanan profesional, ramah, harga yang terjangkau dan mudah</p>
        </div>
        <hr class="my-3">

        <p class="justify-content-center p-3" data-bs-toggle="collapse" href="#collapse2">2. Layanan yang
            ditawarkan
        </p>
        <div class="collapse" id="collapse2">
            <p>Fariz Laundry menawarkan layanan cuci, setrika, maupun lipat rapi. selain itu fariz laundry juga memiliki
                paket untuk cucian dalam jumlah besar dan banyak</p>
        </div>
        <hr class="my-3">

        <p class="justify-content-center p-3" data-bs-toggle="collapse" href="#collapse3">3. Dimana outlet Fariz
            Laundry
        </p>
        <div class="collapse" id="collapse3">
            <p>fariz laundry terletak di Jalan Aroepala Kompleks Permata Hijau Lestari blok P1/ No.2.</p>
            <p>lebih lengkap : <a href="/lokasi">Lokasi Fariz Laundry</a></p>
        </div>
        <hr class="my-3">




    </div>
</div>




@endsection