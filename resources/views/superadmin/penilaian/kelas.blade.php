@extends('layouts.app')
@push('css')
@endpush
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Periode Kelas</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Kelas</th>
                            <th>Wali Kelas</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($kelas as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->periode->tahun}}-{{$item->periode->semester == '1' ? 'Ganjil':'Genap'}}</td>
                            <td>{{$item->kelas->nama}}</td>
                            <td>{{$item->guru->nama}}</td>

                            <td>
                                <a href="/t/penilaian/{{$id_periode}}/{{$item->id}}"
                                    class="btn btn-sm btn-success">Next</a>
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