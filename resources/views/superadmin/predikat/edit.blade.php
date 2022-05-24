@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data Predikat</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/m/predikat/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mulai</label>
                        <input type="text" name="mulai" class="form-control" value="{{$data->mulai}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sampai</label>
                        <input type="text" name="sampai" class="form-control" value="{{$data->sampai}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nilai Huruf</label>
                        <select name="predikat" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="A" {{$data->predikat == 'A' ? 'selected':''}}>A</option>
                            <option value="B" {{$data->predikat == 'B' ? 'selected':''}}>B</option>
                            <option value="C" {{$data->predikat == 'C' ? 'selected':''}}>C</option>
                            <option value="D" {{$data->predikat == 'D' ? 'selected':''}}>D</option>
                            <option value="E" {{$data->predikat == 'E' ? 'selected':''}}>E</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/m/predikat" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush