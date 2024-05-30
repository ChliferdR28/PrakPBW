@extends ('layouts.main')
@section('title', 'dataCoffee')

@section('coffee')
    <style>
        .nav-pills .nav-link.active {
            background-color: rgb(73, 73, 73);
            color: white;
        }

        .btn-outline-primary {
            border-color: rgb(73, 73, 73);
            color: rgb(73, 73, 73);
        }

        .btn-outline-primary:hover,
        .btn-outline-primary:focus,
        .btn-outline-primary:active {
            background-color: rgb(73, 73, 73);
            color: white;00000
            border-color: rgb(73, 73, 73);
        }
    </style>
    <div class="container-fluid">
        <a class="btn btn-outline-secondary mb-4 py-2" href="/coffee/tambah" role="button">
            <i class="bi bi-plus-square-fill mr-1"></i>
            Tambah
        </a>
        <div>
            <div class="class-body">
                @if (session('alert'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('alert') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span arial-hidden="true">
                                <i class="bi bi-x-lg"></i>
                            </span>
                        </button>
                    </div>
                @endif
                @if (session('alertdelete'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ session('alertdelete') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="bi bi-x-lg"></i>
                            </span>
                        </button>
                    </div>
                @endif
            </div>
            <table id="example" class="table table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Kategori</th>
                        <th scope="col" style="width:35%">Deskripsi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($coffee as $idx => $item)
                        <tr>
                            <td scope="row">{{ $idx + 1 }}</td>
                            <td scope="row">{{ $item->nama }}</td>
                            <td scope="row">{{ $item->harga }}</td>
                            <td scope="row">{{ $item->stok }}</td>
                            <td scope="row">{{ $item->kategori }}</td>
                            <td scope="row">{{ $item->deskripsi }}</td>
                            <td scope="row">
                                {{-- <img src="{{ asset('/storage/' . $item->gambar) }}" alt="Kosong"> --}}
                                <img src="{{ asset('/storage//' . $item->gambar) }}" alt="gambar" height="150" width="150">
                            </td>
                            <td scope="row" class="flex">
                                <a class="btn btn-primary" href="/formupdate/{{ $item->id }}"> <i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger" href="/delete/{{ $item->id }}"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @endsection
