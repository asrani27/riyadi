@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/m/siswa/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">NIS</label>
                        <input type="text" name="nis" class="form-control" value="{{$data->nis}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Siswa</label>
                        <input type="text" name="nama" class="form-control" value="{{$data->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Jenis Kelamin</label>
                        <select name="jkel" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="L" {{$data->jkel == 'L' ? 'selected':''}}>Laki-Laki</option>
                            <option value="P" {{$data->jkel == 'P' ? 'selected':''}}>Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="text" name="alamat" class="form-control" value="{{$data->alamat}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" value="{{$data->tempat_lahir}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="{{$data->tanggal_lahir}}"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telp</label>
                        <input type="text" name="telp" class="form-control" value="{{$data->telp}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Agama</label>
                        <select name="agama" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="ISLAM" {{$data->agama == 'ISLAM' ? 'selected':''}}>ISLAM</option>
                            <option value="PROTESTAN" {{$data->agama == 'PROTESTAN' ? 'selected':''}}>PROTESTAN</option>
                            <option value="KATOLIK" {{$data->agama == 'KATOLIK' ? 'selected':''}}>KATOLIK</option>
                            <option value="HINDU" {{$data->agama == 'HINDU' ? 'selected':''}}>HINDU</option>
                            <option value="BUDDHA" {{$data->agama == 'BUDDHA' ? 'selected':''}}>BUDDHA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" value="{{$data->nama_ayah}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" value="{{$data->nama_ibu}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Wali</label>
                        <input type="text" name="nama_wali" class="form-control" value="{{$data->nama_wali}}">
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/m/siswa" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush