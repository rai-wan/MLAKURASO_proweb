@extends('layouts.list')

@section('title', 'Produk')

@section('content')
    @include('components.header')  <!-- Menampilkan header -->
    
    <div class="product-content">
        <h1>Daftar Produk</h1>
        <!-- Tabel produk atau konten lainnya di sini -->
    </div>
    
    @include('components.footer')  <!-- Menampilkan footer -->
@endsection
