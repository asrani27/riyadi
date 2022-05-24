@extends('layouts.app')
@push('css')

@endpush
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Data Periode</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/m/periode/edit/{{$data->id}}">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Periode/Tahun</label>
                        <input type="text" name="tahun" class="form-control" value="{{$data->tahun}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Semester</label>
                        <select name="semester" class="form-control" required>
                            <option value="">-pilih-</option>
                            <option value="1" {{$data->semester == '1' ? 'selected':''}}>Ganjil</option>
                            <option value="2" {{$data->semester == '2' ? 'selected':''}}>Genap</option>
                        </select>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="/m/periode" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('js')


@endpush