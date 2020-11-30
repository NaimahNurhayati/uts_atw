@extends('template.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12" style="padding:10px 50px">
      <div class="card">
        <div class="card-header">
          Edit Postingan Artikel
        </div>
        <div class="card-body">
          <form action="{{url('artikel', $artikel->id)}}" method="post">
            @csrf
            @method("PUT")
            <div class="form-group">
              <label for="" class="control-label">Judul</label>
              <input type="text" class="form-control" name="judul" value="{{$artikel->judul}}">
            </div>
            <div class="form-group">
              <label for="" class="control-label">Konten</label>
              <textarea class="form-control" name="konten">{{$artikel->konten}}</textarea>
            </div>
            <div class="form-group">
              <label for="" class="control-label">Tag</label>
              <input type="text" class="form-control" name="tag" value="{{$artikel->tag}}">
            </div>
            <button class="btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection