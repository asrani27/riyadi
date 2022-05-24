@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data Predikat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/m/predikat/create">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mulai</label>
                        <input type="text" name="mulai" class="form-control" placeholder="0" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sampai</label>
                        <input type="text" name="sampai" class="form-control" placeholder="50" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nilai Huruf</label>
                        <select name="predikat" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/m/predikat" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush