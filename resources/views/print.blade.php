<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    {{-- bootstrap icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <script>
        windows.print();
    </script>
</head>

<body>

    <div class="container-fluid">
        <div class="container">
            <div class="row my-5">
                <h1 class="text center">Fariz Laundry</h1>
            </div>
            <div class="row offset-1">
                <p>Nama : {{ $data->nama }}</p>
            </div>
            <div class="row offset-1">
                <p>No Transaksi : {{ $data->noTransaksi }}</p>
            </div>
            <div class="row offset-1">
                <p>Tanggal Transaksi : {{ $data->created_at->format("d/m/Y") }}</p>
            </div>

            <div class="row">
                <table class="table table-bordered border-dark" style="table-layout: auto">
                    <thead>
                        <tr>
                            <td>No. </td>
                            <td>Jenis Transaksi</td>
                            <td>Berat</td>
                            <td>Harga per Kilo</td>
                            <td>Total Harga</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>{{ $data->category->jenisTransaksi }}</td>
                            <td>{{ $data->beratCucian }}</td>
                            <td>{{ $data->category->harga }}</td>
                            <td>{{ $data->category->harga * $data->beratCucian }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row d-flex justify-content-center my-3">{{ $qrCode }}</div>
            <div class="row">
                <div class="col text-center">
                    <p><strong>Customer</strong></p>
                </div>
                <div class="col text-center">
                    <p><strong>Petugas</strong></p>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col text-center">
                    <p><strong>{{ $data->nama }}</strong></p>
                </div>
                <div class="col text-center">
                    <p><strong>Admin</strong></p>
                </div>
            </div>






        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>