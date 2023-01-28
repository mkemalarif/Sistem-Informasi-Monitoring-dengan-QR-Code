@extends("dashboard.layout.main")

@section("isiHalaman")

<div class="container-fluid">
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-7 offset-2">
                <div class="card">
                    <h3 class="card-header text-center text-light bg-utama">Form Tambah Data</h3>
                    <div class="card-body">

                        <form action="/dashboard" method="post">
                            @csrf
                            <div class="row my-3">
                                <div class="col-md-2">
                                    <label for="nama" class="form-label">Nama
                                    </label>
                                </div>
                                <div class="col">
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid
                                        @enderror" id="nama" placeholder="Nama" value="{{ old('nama') }}" required>
                                    @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-md-2">
                                    <label for="jenisCucian" class="form-label">Jenis Cucian</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" name="category_id" id="category_id" required>
                                        @foreach ($data as $item)
                                        @if(old('category_id') == $item->id)
                                        <option selected value={{ $item->id }}>{{
                                            $item->jenisTransaksi }}
                                        </option>
                                        @else
                                        <option value={{ $item->id }}>{{
                                            $item->jenisTransaksi }}
                                        </option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-2">
                                    <label for="beratCucian" class="form-label">Berat Cucian
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    <input type="number" name="beratCucian"
                                        class="form-control @error('beratCucian') is-invalid @enderror" id="beratCucian"
                                        placeholder="Berat" value="{{ old('value') }}" required>
                                    @error('beratCucian')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-auto">
                                    <label for="berat">Kg</label>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-md-2">
                                    <label for="jenisCucian" class="form-label">Pembayaran</label>
                                </div>
                                <div class="col">
                                    <select class="form-select" name="pembayaran" id="pembayaran" required>
                                        <option value="Belum Lunas">Belum Lunas</option>
                                        <option value="Lunas">Lunas</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@stop