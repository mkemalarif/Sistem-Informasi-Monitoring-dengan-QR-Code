@extends('dashboard/layout/main')

@section('isiHalaman')

<div class="container-fluid">
    <div class="container mt-5">
        <div class="row">
            @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col-3">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <div class="col-md-9 col-lg-12 col-sm-12">
                <div class="card border-2 border-dark">
                    <div class="row m-2">
                        <div class="col-lg-6">
                            <form action="/dashboard/admin">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="search.." name="search"
                                        id="search" value="{{ request('search') }}">
                                    <button class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <table class="table mt-1" style="table-layout: auto">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username Admin</th>
                                <th>Nama Admin</th>
                                <th>Role Admin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $dataAdmin)
                            <tr>
                                @if($dataAdmin->id == 1)
                                <th>{{ $nomor++}}</th>
                                <td>{{ $dataAdmin->username }}</td>
                                <td>{{ $dataAdmin->nama }}</td>
                                <td>{{ $dataAdmin->role }}</td>
                                @else
                                <th>{{ $nomor++}}</th>
                                <td>{{ $dataAdmin->username }}</td>
                                <td>{{ $dataAdmin->nama }}</td>
                                <td>{{ $dataAdmin->role }}</td>
                                <td>
                                    <a href="/dashboard/admin/{{ $dataAdmin->id }}/edit" class="btn btn-primary">Edit
                                    </a>
                                    <form action="/dashboard/admin/{{ $dataAdmin->id }}" method="POST" class="d-inline">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger border-0" type="submit"
                                            onclick="return confirm('hapus data?')" name="delete">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $admin->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection