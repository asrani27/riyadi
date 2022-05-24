@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data Mapel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/m/mapel/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Mapel</label>
                        <input type="text" name="kode" class="form-control" value="{{$data->kode}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Mapel</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kelompok</label>
                        <select name="kelompok" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="A" {{$data->kelompok == 'A' ? 'selected':''}}>A</option>
                            <option value="B" {{$data->kelompok == 'B' ? 'selected':''}}>B</option>
                            <option value="C" {{$data->kelompok == 'C' ? 'selected':''}}>C</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" value="{{$data->deskripsi}}" required>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/m/mapel" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush