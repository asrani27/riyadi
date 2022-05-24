@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data Mapel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/m/mapel/create">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Mapel</label>
                        <input type="text" name="kode" class="form-control" placeholder="M001" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Mapel</label>
                        <input type="text" name="nama" class="form-control" placeholder="Matematika" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kelompok</label>
                        <select name="kelompok" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi Mapel" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/m/mapel" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush