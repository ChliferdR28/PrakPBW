@extends ('layouts.main')
@section('title', 'Tambah Coffee')
@section('coffee')
    <div class="card">
        <div class="card-header col-md-12 bg-secondary py-2 text-light font-weight-bold">
            <h1> Menu Coffee</h1>
        </div>
        <div class="card-body">
        </div>
        <form action="/save" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label hidden>id</label>
                {{-- <input type="text" name="id" class="form-control" required> --}}
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="kategori" class="form-control">
                    <option value="0">--Pilih Menu--</option>
                    <option value="Noncoffee">NonCofee</option>
                    <option value="Coffee">Cofee</option>
                </select>
            </div>
            <div class="form-group">
                <label>Nama Minuman</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control">
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" class="form-control">
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Gambar</label>
                <input type="file" accept="image/*" name="gambar" class="form-control-file*">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-secondary">SIMPAN</button>
            </div>
        </form>
    </div>
@endsection
