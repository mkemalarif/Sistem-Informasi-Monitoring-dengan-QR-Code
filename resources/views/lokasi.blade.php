@extends("layout.main")

@section("container")


<div class="container-fluid">
    <div class="container pt-5 mb-5">
        <h1 class="text-center tulisanBiru mb-5">Lokasi Fariz Laundry</h1>
        <div class="row">
            <div class="col-lg-5 my-auto">
                <div class="card border rounded-pill border-2 border-primary my-3">
                    <div class="card-body">
                        <p><img style="width: 1.2rem" class="img-fluid" src="{{ asset('img/location-pin.png') }}"
                                alt=""> Jl. Aroepala Kompleks Permata Hijau Lestari, Blok P1/2</p>
                    </div>
                </div>
                <div class="card border rounded-pill border-2 border-primary my-3">
                    <div class="card-body">
                        <p><i class="bi bi-clock tulisanBiru" style="width:2rem"></i> 08.00 - 20.00 Wita</p>
                    </div>
                </div>
                <div class="card border rounded-pill border-2 border-primary my-3">
                    <div class="card-body">
                        <p><i class="bi bi-globe tulisanBiru"></i>
                            www.kemswash.com</p>
                    </div>
                </div>
                <div class="card border rounded-pill border-2 border-primary my-3">
                    <div class="card-body">
                        <p><i class="bi bi-whatsapp tulisanBiru"></i>
                            +6281340580271</p>
                    </div>
                </div>
            </div>
            <div class="col offset-lg-1">
                <img class="img-fluid border border-2 border-primary rounded" style="width:38rem"
                    src="{{ asset('photos/lokasi.png') }}" alt="">
            </div>
        </div>
    </div>
</div>

@include("partial/footer")


@endsection