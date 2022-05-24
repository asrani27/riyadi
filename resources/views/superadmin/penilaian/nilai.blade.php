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
                <h4> : {{$data->pkg->periode->tahun}} - {{$data->pkg->periode->semester == '1'?'ganjil':'genap'}}</h4>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Kelas</h4>
            </td>
            <td>
                <h4> : {{$data->pkg->kelas->nama}}</h4>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Wali Kelas</h4>
            </td>
            <td>
                <h4> : {{$data->pkg->guru->nama}}</h4>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Mata Pelajaran</h4>
            </td>
            <td>
                <h4> : {{$data->mapel->nama}}</h4>
            </td>
        </tr>
    </table>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Nilai</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Nilai TUGAS</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>NA</th>
                            <th>Huruf</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($siswa as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->siswa->nis}}</td>
                            <td>{{$item->siswa->nama}}</td>
                            <td>{{$item->tugas}}</td>
                            <td>{{$item->uts}}</td>
                            <td>{{$item->uas}}</td>
                            <td>{{$item->na}}</td>
                            <td>{{$item->huruf}}</td>
                            <td>
                                <button type="button" class="btn btn-sm editnilai btn-success" data-id="{{$item->id}}"
                                    data-id_siswa="{{$item->siswa->id}}" data-tugas="{{$item->tugas}}"
                                    data-uts="{{$item->uts}}" data-uas="{{$item->uas}}"
                                    data-nama_siswa="{{$item->siswa->nama}}">EDIT
                                    NILAI</button>
                            </td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-nilai" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="/t/penilaian/{{$id_periode}}/{{$id_pkg}}/{{$id_mapel}}"
                enctype="multipart/form-data">
                @csrf
                <div class="modal-header bg-gradient-success" style="padding:10px">
                    <h4 class="modal-title">Nilai</h4>
                </div>

                <div class="modal-body">
                    Nama<input type="text" id="nama_siswa" class="form-control" readonly><br />
                    Tugas <input type="text" id="tugas" class="form-control" name="tugas"
                        onkeypress="return hanyaAngka(event)" required><br />
                    UTS <input type="text" id="uts" class="form-control" name="uts"
                        onkeypress="return hanyaAngka(event)" required><br />
                    UAS <input type="text" id="uas" class="form-control" name="uas"
                        onkeypress="return hanyaAngka(event)" required>
                    <input type="hidden" id="id_siswa" name="id_siswa">
                </div>

                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-block btn-success">
                        Update Nilai</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')

<script>
    $(document).on('click', '.editnilai', function() {
        console.log('tes');
        $('#id_siswa').val($(this).data('id_siswa'));
        $('#nama_siswa').val($(this).data('nama_siswa'));
        $('#tugas').val($(this).data('tugas'));
        $('#uts').val($(this).data('uts'));
        $('#uas').val($(this).data('uas'));
        $("#modal-nilai").modal();
    });
</script>
@endpush