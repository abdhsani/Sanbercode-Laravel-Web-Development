@extends('adminlte.master')

@section('content')
<div class="card p-4 mx-3">
  <div class="mb-4 text-center">
    <h2 class="mb-4">{{ $item->judul }}</h2>
  </div>
  <p>{{ $item->isi }}</p>
  <div class="text-muted mt-4">
    <small>Updated at : {{ $item->tanggal_diperbaharui }}</small>
    <br>
    <small>Created at : {{ $item->tanggal_dibuat }}</small>
  </div>
</div>
@endsection