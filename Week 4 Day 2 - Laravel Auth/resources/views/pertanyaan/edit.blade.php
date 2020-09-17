@extends('adminlte.master')

@section('content')
<div class="card mx-3">
  <div class="card-header bg-primary">
    <h3 class="card-title text-white">Edit Pertanyaan</h3>
  </div>
  <div class="card-body p-0">
    <form action="/pertanyaan/{{ $item->id }}" method="POST">
      @csrf
      @method('PUT')
      <div class="p-4">
        <div class="form-group">
          <label for="judul">Judul Pertanyaan</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', $item->judul) }}" placeholder="Masukkan Judul">
          @error('judul')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="isi">Isi Pertanyaan</label>
          <textarea class="form-control" id="isi" name="isi" rows="3">{{ old('isi', $item->isi) }}</textarea>
          @error('isi')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="card-footer text-muted">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection