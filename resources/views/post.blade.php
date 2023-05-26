@extends('layout.main')
@section('title', 'Post')

@section('content')
<div class="card">
  <span class="card-header">
    Buat Blog
  </span>
  <div class="card-body">
    <div class="mb-3">
      <label for="topik" class="form-label">Topik</label>
      <input type="text" class="form-control" name="topik" id="topik" placeholder="Topik">
    </div>
    <div class="mb-3">
      <label for="materi" class="form-label">Materi</label>
      <input type="text" class="form-control" name="materi" id="materi" placeholder="Materi">
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Gambar</label>
      <input class="form-control" type="file" id="image">
    </div>
    <div class="mb-3">
      <label for="topik" class="form-label">Konten</label>
      <textarea class="form-control" name="konten" id="konten" placeholder="Konten"></textarea>
    </div>
    <div class="mb-3">
      <label for="keterangan" class="form-label">Keterangan</label>
      <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan">
    </div>
  </div>
  <div class="card-footer text-end">
    <button class="btn btn-secondary">Draft</button>
    <button class="btn btn-primary">Post</button>
  </div>
</div>
@endsection