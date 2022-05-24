@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="callout callout-info">
    <table>
        <tr>
            <td>
                <h4>Periode</h4>
            </td>
            <td>
                <h4> : {{$pkg->periode->tahun}} - {{$pkg->periode->semester == '1'?'ganjil':'genap'}}</h4>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Kelas</h4>
            </td>
            <td>
                <h4> : {{$pkg->kelas->nama}}</h4>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Wali Kelas</h4>
            </td>
            <td>
                <h4> : {{$pkg->guru->nama}}</h4>
            </td>
        </tr>
    </table>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Siswa Di Kelas Ini</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form method="post" action="/t/pkg/tambahsiswa/{{$id}}">
                    @csrf
                    <div class="form-group">
                        <label>Siswa</label>
                        <select name="siswa_id" class="form-control select2" required>
                            <option value="">-pilih-</option>
                            @foreach ($siswa as $item)
                            <option value="{{$item->id}}">{{$item->nis}} - {{$item->nama}}</option>
                            @endforeach
                        </select><br /><br />
                        <button type="submit" class="btn btn-block btn-primary">+ TAMBAHKAN</button>
                    </div>
                </form>

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
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
                            <td>{{$item->siswa->nis}}</td>
                            <td>{{$item->siswa->nama}}</td>
                            <td>
                                <a href="/t/pkg/tambahsiswa/{{$id}}/delete/{{$item->id}}" class="btn btn-sm btn-danger"
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