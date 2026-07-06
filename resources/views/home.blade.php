@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">Smart Robot Kit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav ms-auto text-center">
                <a href="#about" class="nav-link text-white me-lg-4">Tentang</a>
                <a href="#layanan" class="nav-link text-white me-lg-4">Layanan</a>
                <a href="#produk" class="nav-link text-white">Produk</a>
            </div>
        </div>
    </div>
</nav>

<section class="hero text-center py-5 mt-5">
    <div class="container py-lg-5">
        <h1 class="shimmer-text display-4 fw-bold">
            Pembelajaran Robotika Terstruktur untuk Generasi Masa Depan
        </h1>
        <p class="mt-4 col-md-8 mx-auto text-light lead">
            Smart Robot Kit dirancang sebagai media pembelajaran berbasis praktik yang membantu siswa memahami 
            konsep robotika secara bertahap.
        </p>
        <a href="#produk" class="btn btn-premium mt-4 px-5 py-3">Lihat Produk</a>
    </div>
</section>

<section id="about" class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Tentang Produk</h2>
        <p class="text-secondary col-lg-10 mx-auto px-2">
            Smart Robot Kit merupakan solusi pembelajaran berbasis STEM yang disusun secara sistematis sesuai 
            dengan tingkat perkembangan siswa. Setiap robot dilengkapi dengan modul pembelajaran yang mencakup 
            pengenalan komponen, fungsi sistem, serta implementasi langsung melalui praktik.
        </p>
    </div>
</section>

<section id="layanan" class="bg-dark py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5 text-white">Layanan</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="glass p-4 h-100">
                    <h5 class="mb-3 text-white">Paket Pembelajaran</h5>
                    <p class="text-secondary">Setiap produk terdiri dari komponen robot, dan panduan penggunaan.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass p-4 h-100">
                    <h5 class="mb-3 text-white">Manual Book</h5>
                    <p class="text-secondary">Panduan PDF berisi langkah pembelajaran dari pengenalan hingga implementasi.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="glass p-4 h-100">
                    <h5 class="mb-3 text-white">Dukungan Pengguna</h5>
                    <p class="text-secondary">Layanan bantuan WhatsApp untuk konsultasi teknis dan pendampingan.</p>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h4 class="mb-4 text-white">Proses Pembelian</h4>
            <div class="row g-3 justify-content-center">
                <div class="col-sm-6 col-md-4">
                    <div class="glass p-3"><p class="text-secondary mb-0">1. Pilih jenis robot & level.</p></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="glass p-3"><p class="text-secondary mb-0">2. Konfirmasi via WhatsApp.</p></div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="glass p-3"><p class="text-secondary mb-0">3. Bayar & Produk dikirim.</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="produk" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Katalog Produk</h2>

        <style>
            .product-card {
                padding: 25px;
                border-radius: 16px;
                background: rgba(255,255,255,0.03);
                border: 1px solid rgba(255,255,255,0.08);
                transition: 0.3s;
                height: 100%;
            }
            .product-card:hover {
                transform: translateY(-5px);
                border-color: #38bdf8;
            }
            .main-img-container {
                width: 100%;
                max-width: 500px;
                margin: 0 auto 20px;
            }
            .main-product-img {
                width: 100%;
                height: auto; /* Mengikuti rasio asli di mobile */
                max-height: 300px;
                object-fit: cover;
                border-radius: 24px;
                border: 2px solid rgba(56, 189, 248, 0.2);
            }
            /* Menyesuaikan teks di layar kecil */
            @media (max-width: 576px) {
                .shimmer-text { font-size: 1.8rem; }
                .hero { padding-top: 80px; }
            }
        </style>

        @php
        $products = [
            [
                'title' => 'Line Follower',
                'desc' => 'Robot otomatis yang dirancang untuk mengikuti jalur garis hitam dengan presisi tinggi.',
                'img' => 'line.jpeg',
                'levels' => [
                    ['PAUD/TK','Pengenalan Robot','line-paud.pdf','Rp 250.000'],
                    ['SD','Kontrol & Pemahaman Komponen','line-sd.pdf','Rp 350.000'],
                    ['SMP','Sistem, Perakitan & Pemrograman','line-smp.pdf','Rp 450.000']
                ]
            ],
            [
                'title' => 'Manual Controller',
                'desc' => 'Memahami mekanika gerak dan transmisi daya melalui kendali smartphone.',
                'img' => 'manual.jpeg',
                'levels' => [
                    ['PAUD/TK','Pengenalan Robot','manual-paud.pdf','Rp 200.000'],
                    ['SD','Respon & Pemahaman Komponen','manual-sd.pdf','Rp 300.000'],
                    ['SMP','Sistem, Perakitan & Pemrograman','manual-smp.pdf','Rp 400.000']
                ]
            ],
            [
                'title' => 'Pendeteksi Warna',
                'desc' => 'Robot canggih yang mampu merespons objek berdasarkan input spektrum warna.',
                'img' => 'warna.jpeg',
                'levels' => [
                    ['PAUD/TK','Pengenalan Robot','warna-paud.pdf','Rp 300.000'],
                    ['SD','Respon & Pemahaman Komponen','warna-sd.pdf','Rp 400.000'],
                    ['SMP','Sistem, Perakitan & Pemrograman','warna-smp.pdf','Rp 500.000']
                ]
            ]
        ];
        @endphp

        @foreach($products as $product)
        <div class="text-center mb-4 mt-5">
            <div class="main-img-container">
                <img src="{{ asset('images/' . $product['img']) }}" alt="{{ $product['title'] }}" class="main-product-img img-fluid">
            </div>
            <h3 class="fw-bold">{{ $product['title'] }}</h3>
            <p class="text-secondary col-md-8 mx-auto">{{ $product['desc'] }}</p>
        </div>

        <div class="row g-4 mb-5">
            @foreach($product['levels'] as $level)
            <div class="col-sm-6 col-md-4">
                <div class="product-card text-center">
                    <div class="fw-bold text-white">Level {{ $level[0] }}</div>
                    <div class="small text-secondary mb-2">{{ $level[1] }}</div>
                    <div class="h5 text-info fw-bold">{{ $level[3] }}</div>
                    <a href="/manual/{{ $level[2] }}" class="btn btn-outline-light w-100 mb-2 btn-sm">Manual Book</a>
                    <a href="https://wa.me/085725424846?text=Halo, saya tertarik {{ $product['title'] }} Level {{ $level[0] }}" class="btn btn-premium w-100">Beli</a>
                </div>
            </div>
            @endforeach
        </div>
        @if(!$loop->last) <hr class="opacity-10"> @endif
        @endforeach

    </div>
</section>

<section class="bg-dark py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5 text-white">Keunggulan</h2>
        <div class="row g-4">
            @foreach([
                ['Kurikulum Terstruktur','Dari dasar hingga coding.'],
                ['Belajar Praktik','Bukan sekadar teori.'],
                ['Manual Lengkap','Panduan PDF mudah dipahami.'],
                ['Support Langsung','Bantuan via WhatsApp.']
            ] as $feature)
            <div class="col-6 col-md-3">
                <div class="glass p-3 h-100">
                    <h6 class="text-white fw-bold">{{ $feature[0] }}</h6>
                    <p class="text-secondary small mb-0">{{ $feature[1] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<footer class="text-center py-5">
    <div class="container">
        <h2 class="fw-bold">Mulai Belajar Sekarang</h2>
        <a href="https://wa.me/085725424846" class="btn btn-premium mt-4 px-5">Hubungi WhatsApp</a>
        <p class="text-secondary mt-5 small">© 2026 Smart Robot Kit</p>
    </div>
</footer>

@endsection