@extends('layout/main')

@section('container')

<div class="container-fluid">
    <div class="container mt-5">

        <form action="/statusCucian/cari" class="row mb-5">
            <div class="col-sm-2 offset-lg-2 offset-sm-2">
                <label for="search" class="col-form-label">No transaksi</label>
            </div>
            <div class="col-sm-5 my-sm-3 my-lg-0">
                <input type="number" id="search" name="search" class="form-control border border-2 border-dark "
                    placeholder="Nomor Transaksi" value="{{ old('search') }}">
                @if($errors->has('search'))
                <span class="text-danger">{{ $errors->first('search') }}</span>
                @endif
            </div>
            <div class="col-lg-2 my-lg-0 my-3">
                <button class="btn btn-primary d-grid" type="submit">Cari</button>
            </div>
        </form>


        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="card border-3 border border-dark mt-5  p-3" style="height: 40rem">
                        @if($data === 0)
                        @else
                        @foreach($data as $item)
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped position-relative" role="progressbar"
                                aria-label="Basic example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                style="width: 
                                @if($item->status_id === 1) 20%
                                @elseif($item->status_id === 2) 40% 
                                @elseif($item->status_id === 3) 60%
                                @elseif($item->status_id === 4) 80%
                                @elseif($item->status_id === 5) 100%
                                @endif">
                            </div>
                        </div>
                        <div class="row mt-4 mb-1">
                            <div class="col d-flex justify-content-between">
                                <p>status Cucian saat ini {{ now()->format('d/m/Y H:m') }}
                                </p>
                                <p><strong> status pembayaran : {{ $item->pembayaran }} </strong></p>
                            </div>
                        </div>
                        <p><strong> Terakhir di update {{ $item->status->updated_at->diffForHumans()
                                }}</strong></p>
                        <hr class="border border-primary border-2 my-1">
                        <div class="scrollspy">
                            @for($i = $item->status_id -1; $i >= 0; $i--) <p style="font-size: 1rem" class="mt-1">
                                Status Cucian anda : {{ $status[$i]->status }}
                                <hr>
                            </p>
                            @endfor
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


@endsection


{{-- <div class="progress">
    <div class="progress-bar progress-bar-striped position-relative" role="progressbar" aria-label="Basic example"
        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
        style="width: @if($status === 'selesai') 50% @else 75% @endif">
        <div class="position-absolute btn btn-dark start-25"></div>
    </div>
</div> --}}