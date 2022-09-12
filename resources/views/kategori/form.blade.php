@extends('layout.app')

@section('title')
 Kategori
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit Kategori</h5>

            <div class="card-body">
            <form action="{{route('kategori.update', $kategori->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{ $kategori->nama }}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama')
              <div class="text-danger">
                {{ $massage }}
              </div>
            @enderror
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
      @endsection