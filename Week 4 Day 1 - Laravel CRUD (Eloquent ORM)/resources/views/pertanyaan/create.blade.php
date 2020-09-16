@extends('adminlte.master')

@section('content')
<div class="card p-2 mx-3">
  <div class="card-header bg-primary">
    <h3 class="card-title text-white">Buat Pertanyaan</h3>
  </div>
  <div class="card-body p-0">
    <form action="/pertanyaan" method="POST">
      @csrf
      <div class="p-4">
        <div class="form-group">
          <label for="judul">Judul Pertanyaan</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul', '') }}" placeholder="Masukkan Judul">
          @error('judul')
              <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="isi">Isi Pertanyaan</label>
          <textarea class="form-control" id="isi" name="isi" rows="4" placeholder="Masukkan Pertanyaan">{{ old('isi', '') }}</textarea>
          @error('isi')
              <div class="alert alert-danger mt-2">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="card-footer text-muted">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection