@extends("layout/main")


@section("container")

<div class="container-fluid">
    <div class="container mt-5">
        <div class="row">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="col-md-9 col-lg-12 col-sm-12">
                <div class="card border border-2 border-dark">

                    <div class="row m-2">
                        <div class="col-lg-6">
                            <form action="/dashboard">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search.." name="searchBar"
                                        id="searchBar" value="{{ request('searchBar') }}">
                                    <button class="btn btn-primary"> cari</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="table mt-1" style="table-layout: auto">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Transaksi</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Berat Cucian</th>
                                <th>Status Cucian</th>
                                <th>Tanggal</th>
                                <th>Total Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dataCucian)
                            <tr>
                                <th>{{ $nomor++}}</th>
                                <td>{{ $dataCucian->noTransaksi }}</td>
                                <td>{{ $dataCucian->nama }}</td>
                                <td>{{ $dataCucian->category->jenisTransaksi }}</td>
                                <td>{{ $dataCucian->beratCucian }} Kg</td>
                                <td>{{ $dataCucian->status->status }}</td>
                                <td>{{ $dataCucian->created_at->format('d/m/Y H:m') }}</td>
                                <td>Rp. {{ $dataCucian->totalHarga = $dataCucian->category->harga *
                                    $dataCucian->beratCucian }}</td>

                                <th>
                                    <a href="/dashboard/{{ $dataCucian->noTransaksi }}/edit"
                                        class="btn btn-primary">Edit
                                    </a>
                                    <form action="/dashboard/{{ $dataCucian->noTransaksi }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger border-0" type="submit"
                                            onclick="return confirm('hapus data?')" name="delete">
                                            Hapus
                                        </button>
                                    </form>
                                    <a href="/print/{{ $dataCucian->noTransaksi }}" class="btn btn-success">
                                        Print
                                    </a>
                                </th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $data->links() }}
                    </div>
                </div>
            </div>


        </div>

    </div>
</div>
</div>


@endsection