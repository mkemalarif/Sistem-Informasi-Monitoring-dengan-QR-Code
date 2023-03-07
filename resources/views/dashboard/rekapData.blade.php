@extends("dashboard.layout.main")

@section("isiHalaman")

<div class="container-fluid">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card border border-2 border-dark">
                    <div class="row">
                        <div class="col-4 m-4">
                            {{-- form pencarian transaksi berdasarkan tanggal --}}
                            <form action="/rekapData" method="get">
                                @csrf
                                <div class="input-group">
                                    <input class="form-control text-center" type="date" name="tanggal" id="tanggal"
                                        value="{{ request('tanggal') }}">
                                    <button class=" btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-2 m-4">
                            {{-- form dropdown button untuk pencarian hari dan bulanan --}}
                            <form action="/rekapData" method="GET">
                                @csrf
                                <div class="input-group">
                                    <select class="form-select" name="tanggalCollection" id="">
                                        <option value="semua" {{ old('tanggalCollection')=="semua" ? 'selected' : '' }}>
                                            semua</option>
                                        <option value="harian" {{ old('tanggalCollection')=="harian" ? 'selected' : ''
                                            }}>harian</option>
                                        <option value="bulan" {{ old('tanggalCollection')=="bulan" ? 'selected' : '' }}>
                                            bulan</option>
                                    </select>

                                    <button class="btn btn-primary">cari</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-3 my-4">
                            {{-- form dropdown button untuk pencarian hari dan bulanan --}}
                            <form action="/rekapData" method="get">
                                @csrf
                                <div class="input-group">
                                    <select class="form-select" name="category" id="">
                                        @foreach($kategori as $category)
                                        <option value={{ $category->id }}>{{ $category->jenisTransaksi }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <button class="btn btn-primary">cari</button>
                                </div>
                            </form>
                        </div>

                        <div class=" col m-4">
                            @if($info === 1)
                            <p style="font-size: 1.5rem; font-weight: bold;"> Rekapitulasi Bulan {{
                                now()->locale('id')->translatedFormat('F Y')
                                }}</p>
                            @endif
                        </div>
                    </div>
                    <table class="table table-light" style="table-layout: auto">
                        <thead>
                            <tr>
                                <td>Nomor</td>
                                <td>Nomor Transaksi</td>
                                <td>Dilayani oleh</td>
                                <td>Nama</td>
                                <td>Jenis Transaksi</td>
                                <td>Berat Cucian</td>
                                <td>Tanggal Transaksi</td>
                                <td>Total Transaksi</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <th>{{ $nomor++ }}</th>
                                <td>{{ $item->noTransaksi }}</td>
                                <td>{{ $item->user->nama }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->category->jenisTransaksi }}</td>
                                <td>{{ $item->beratCucian }}</td>
                                <td>{{ $item->created_at->format("d-M-Y") }}</td>
                                <td>{{ $item->totalTransaksi = $item->beratCucian * $item->category->harga }}</td>
                            </tr>
                            <?php $total = $item->totalTransaksi + $total ?>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end" style="margin-right: 7rem">
                        <p style="font-size: 1.2rem">SubTotal : Rp. {{ $total }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

</script>

@endsection