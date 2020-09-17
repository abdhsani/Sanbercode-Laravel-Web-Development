@extends('adminlte.master')

@section('content')
  <div class="card p-5 mx-3" >
    <div class="mb-4 text-center">
      <h1 class="mb-4">Pertanyaan</h1>
      @if (session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      @endif
      <a href="/pertanyaan/create" class="btn btn-primary">+ Tambah Pertanyaan</a>
    </div>
    <div class="row">
      @forelse ($items as $key => $item)
        <div class="col-md-6 mb-3">
          <div class="card text-center">
            <div class="card-header">
              <h5 class="card-title">{{ $item->judul }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $item->isi }}</p> 
            </div>
            <div class="card-footer text-muted" style="justify-content: center; display:flex;">
              <a href="/pertanyaan/{{ $item->id }}" class="btn btn-info mr-2">Detail</a>
              <a href="/pertanyaan/{{ $item->id }}/edit" class="btn btn-warning mr-2">Edit</a>
              <form action="/pertanyaan/{{ $item->id }}" method="POST" onsubmit="return confirm('Yakin hapus pertanyaan?')">
                @csrf
                @method('DELETE')
                <input type="submit" value="Delete" class="btn btn-danger">
              </form>
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p>Tidak ada pertanyaan.</p>
        </div>
      @endforelse
    </div>
  </div>
@endsection