@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/m/siswa/create">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIS</label>
                        <input type="text" name="nis" class="form-control" placeholder="NIS" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama Siswa" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                        <select name="jkel" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telp</label>
                        <input type="text" name="telp" class="form-control" placeholder="Telp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Agama</label>
                        <select name="agama" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="ISLAM">ISLAM</option>
                            <option value="PROTESTAN">PROTESTAN</option>
                            <option value="KATOLIK">KATOLIK</option>
                            <option value="HINDU">HINDU</option>
                            <option value="BUDDHA">BUDDHA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" placeholder="nama ayah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" placeholder="nama ibu">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Wali</label>
                        <input type="text" name="nama_wali" class="form-control" placeholder="nama wali">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/m/siswa" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush