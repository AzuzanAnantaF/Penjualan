@extends('layout.app')

@section('title')
  Home
@endsection  

@section('content')
<div class="container text-center">
  <div class="row g-2">
    <div class="col-6 text-light">
      <div class="p-3 border bg-danger mt-4"> 10 Barang <i class="fa-solid fa-box-archive"></i></div>
    </div>
    <div class="col-6 text-light">
      <div class="p-3 border bg-primary mt-4"> 10 Kategori <i class="fa-solid fa-tags"></i></div>
    </div>
    <div class="col-6 text-light">
      <div class="p-3 border bg-secondary mt-2"> 10 Supplier <i class="fa-solid fa-truck-moving"></i></div>
    </div>
    <div class="col-6 text-light">
      <div class="p-3 border bg-warning mt-2"> 1000 Member <i class="fa-solid fa-users"></i></div>
    </div>
  </div>
</div>
@endsection  