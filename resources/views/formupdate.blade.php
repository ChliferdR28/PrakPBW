@extends ('layouts.main')
@section('title', 'Update Coffee')
@section('coffee')
    <h1 class="text-center">Update Coffee</h1>
    <div class="card">
        <div class="card-header col-md-12 bg-secondary py-2 text-light font-weight-bold">
            <h1> Menu Coffee</h1>
        </div>
        <div class="card-body">
        </div>
        <form action="/saveedit/{{ $data->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label hidden>id</label>
                {{-- <input type="text" name="id" class="form-control" required> --}}
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <input type="text" name="kategori" class="form-control" value="{{ $data->kategori }}">
            </div>
            <div class="form-group">
                <label>Nama Minuman</label>
                <input type="text" name="nama" class="form-control" value="{{ $data->nama }}" required>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" value="{{ $data->harga }}">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control" value="{{ $data->stok }}">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" value="{{ $data->kategori }}" required>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" accept="image/*" name="gambar" class="form-control-file">
                {{-- <span>{{ $data->gambar }}</span> --}}
            </div>
            <div class="form-group">
                <img src="{{ asset('storage/' . $data->gambar) }}" alt="{{ $data->gambar }}" height="80" width="80">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-secondary">SIMPAN</button>
            </div>
        </form>
    </div>
@endsection
