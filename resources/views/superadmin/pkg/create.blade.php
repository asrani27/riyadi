@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Tambah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/t/pkg/create">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Periode</label>
                        <select name="periode_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($periode as $item)
                            <option value="{{$item->id}}">{{$item->tahun}} - {{$item->semester == '1' ?
                                'ganjil':'genap'}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Kelas</label>
                        <select name="kelas_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($kelas as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Wali Kelas</label>
                        <select name="guru_id" class="form-control" required>
                            <option value="">-pilih-</option>
                            @foreach ($guru as $item)
                            <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/t/pkg" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush