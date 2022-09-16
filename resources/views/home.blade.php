@extends('layouts/app')

@section('title', 'Home | PT IndoKarya')

@section('content')

    <div class="container">
        <h1>Welcome to PT IndoKarya!</h1>
        <p>Belanja kebutuhanmu di aplikasi kami</p>

        <a href="#" class="btn tombol-manage">Contact Us</a>
    </div>

    {{-- PRODUCTS CONTECT --}}
    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-6">
                    <div class="col-md-12 bg-secondary product.content">
                        <h3>{{ $product->nama }}</h3>
                        <p>Rp. {{ $product->harga }}</p>
                        <h6>Stock: {{ $product->jumlah }}</h6>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
