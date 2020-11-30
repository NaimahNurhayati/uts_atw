@extends('template.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding:10px 50px">
      <div class="card">
        <div class="card-header">
          Tambah Sebuah Komentar
        </div>
        <div class="card-body">
          <form action="{{url('komentar')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="" class="control-label">Nama</label>
              <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
              <label for="" class="control-label">Komentar</label>
              <textarea class="form-control" name="konten"></textarea>
            </div>
            <button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection