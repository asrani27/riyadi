@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Periode Kelas Guru</h3>
                <div class="pull-right box-tools">
                    <a href="/t/pkg/create" type="button" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Tambah Data</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Periode</th>
                            <th>Kelas</th>
                            <th>Wali Kelas</th>
                            <th>Jml Siswa</th>
                            <th>Jml Mapel</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($data as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->periode->tahun}} - {{$item->periode->semester == '1' ? 'ganjil':'genap'}}</td>
                            <td>{{$item->kelas == null ? '':$item->kelas->nama}}</td>
                            <td>{{$item->guru == null ? '':$item->guru->nama}}</td>
                            <td>{{$item->PKGsiswa->count()}}</td>
                            <td>{{$item->PKGmapel->count()}}</td>

                            <td>
                                <a href="/t/pkg/tambahsiswa/{{$item->id}}" class="btn btn-sm btn-info">+ Siswa</a>
                                <a href="/t/pkg/tambahmapel/{{$item->id}}" class="btn btn-sm btn-info">+ Mapel</a>

                                <a href="/t/pkg/edit/{{$item->id}}" class="btn btn-sm btn-success">Edit</a>
                                <a href="/t/pkg/delete/{{$item->id}}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin di hapus?');">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush