@extends('layouts.app')

@section('content')

{{-- Ticker Berita --}}
<div class="relative overflow-hidden bg-white border-b border-gray-200 py-3 shadow-sm">
    <div class="flex items-center">
        <span class="bg-cyan-500 text-white font-bold px-16 py-16 mr-4 shrink-0 text-sm">📰 BERITA</span>
        <div class="flex animate-slide gap-12 whitespace-nowrap">
            @foreach(range(1, 2) as $i)
                <div class="inline-flex gap-12 text-cyan-600 text-sm font-medium">
                    <span>🏙️ Lorem ipsum dolor sit amet, kota semakin maju dengan teknologi baru</span>
                    <span class="text-gray-300">•</span>
                    <span>🚌 Lorem ipsum transportasi publik diperluas hingga 50 rute baru</span>
                    <span class="text-gray-300">•</span>
                    <span>🌱 Lorem ipsum program penghijauan kota berhasil tanam 10.000 pohon</span>
                    <span class="text-gray-300">•</span>
                    <span>💼 Lorem ipsum UMKM lokal meningkat 30% berkat platform digital</span>
                    <span class="text-gray-300">•</span>
                    <span>🏥 Lorem ipsum fasilitas kesehatan baru dibuka di 5 kecamatan</span>
                    <span class="text-gray-300">•</span>
                    <span>⚡ Lorem ipsum infrastruktur listrik diperkuat untuk 100.000 warga</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Hero Banner --}}
<div class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white py-12 px-6 text-center">
    <h1 class="text-2xl md:text-4xl font-bold mb-4">🏙️ Smart City HQ</h1>
    <p class="text-xl mb-8 opacity-90">Platform layanan kota, UMKM, dan komunitas dalam satu aplikasi</p>
    @guest
        <a href="/register" class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-all">
            Daftar Sekarang →
        </a>
    @endguest
    @auth
        <a href="/profile" class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-all">
            Lihat Profile →
        </a>
    @endauth
</div>

{{-- Stats --}}
<div class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-3 gap-6 mb-12">
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <p class="text-4xl font-bold text-cyan-500">{{ $users }}+</p>
            <p class="text-gray-600 mt-2">👥 Warga Terdaftar</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <p class="text-4xl font-bold text-cyan-500">{{ $complaints }}</p>
            <p class="text-gray-600 mt-2">📋 Pengaduan Ditangani</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <p class="text-4xl font-bold text-cyan-500">{{ $services }}+</p>
            <p class="text-gray-600 mt-2">🏪 Layanan Tersedia</p>
        </div>
    </div>

    {{-- Iklan UMKM --}}
    <h2 class="text-3xl font-bold text-gray-700 mb-6 text-center">🛍️ Produk UMKM Lokal</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
        <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-all">
            <div class="text-5xl mb-3">🍪</div>
            <h3 class="font-bold text-gray-700">Kue Tradisional</h3>
            <p class="text-cyan-500 font-bold mt-1">Rp 25.000</p>
            <p class="text-gray-500 text-sm">Toko Bu Sari</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-all">
            <div class="text-5xl mb-3">👗</div>
            <h3 class="font-bold text-gray-700">Batik Lokal</h3>
            <p class="text-cyan-500 font-bold mt-1">Rp 150.000</p>
            <p class="text-gray-500 text-sm">Batik Nusantara</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-all">
            <div class="text-5xl mb-3">🌿</div>
            <h3 class="font-bold text-gray-700">Herbal Organik</h3>
            <p class="text-cyan-500 font-bold mt-1">Rp 45.000</p>
            <p class="text-gray-500 text-sm">Apotek Hijau</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-all">
            <div class="text-5xl mb-3">🎨</div>
            <h3 class="font-bold text-gray-700">Kerajinan Tangan</h3>
            <p class="text-cyan-500 font-bold mt-1">Rp 75.000</p>
            <p class="text-gray-500 text-sm">Galeri Kreatif</p>
        </div>
    </div>

    {{-- Layanan Kota --}}
    <h2 class="text-3xl font-bold text-gray-700 mb-6 text-center">🏛️ Layanan Kota</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-12">
        <a href="/complaints/create" class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-all hover:border-cyan-500 border-2 border-transparent">
            <div class="text-4xl mb-3">📋</div>
            <h3 class="font-bold text-gray-700">Pengaduan</h3>
            <p class="text-gray-500 text-sm mt-1">Laporkan masalah kota</p>
        </a>
        <a href="/services" class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-all hover:border-cyan-500 border-2 border-transparent">
            <div class="text-4xl mb-3">🏪</div>
            <h3 class="font-bold text-gray-700">Layanan Publik</h3>
            <p class="text-gray-500 text-sm mt-1">KTP, SIM, dan lainnya</p>
        </a>
        <a href="/about" class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-all hover:border-cyan-500 border-2 border-transparent">
            <div class="text-4xl mb-3">ℹ️</div>
            <h3 class="font-bold text-gray-700">Tentang Kota</h3>
            <p class="text-gray-500 text-sm mt-1">Info seputar kota</p>
        </a>
    </div>

    {{-- CTA --}}
    <div class="bg-cyan-500 rounded-2xl p-12 text-center text-white">
        <h2 class="text-3xl font-bold mb-4">Punya Produk UMKM?</h2>
        <p class="text-lg mb-8 opacity-90">Daftarkan produk kamu dan jangkau ribuan warga kota!</p>
        <a href="/register" class="bg-white text-cyan-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-all">
            Daftar Sebagai Pedagang →
        </a>
    </div>
</div>

@endsection