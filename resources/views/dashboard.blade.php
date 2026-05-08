@extends('layouts.app')

@section('content')

{{-- News Ticker --}}
<div class="relative overflow-hidden bg-white border-b border-gray-200 py-3 shadow-sm">
    <div class="flex items-center">
        <span class="bg-cyan-500 text-white font-bold px-4 py-2 mr-4 shrink-0 text-sm">📰 NEWS</span>
        <div class="flex animate-slide gap-12 whitespace-nowrap">
            @foreach(range(1, 2) as $i)
                <div class="inline-flex gap-12 text-cyan-600 text-sm font-medium">
                    <span>🏙️ Lorem ipsum: City continues to grow with new digital infrastructure</span>
                    <span class="text-gray-300">•</span>
                    <span>🚌 Lorem ipsum: Public transportation expanded to 50 new routes</span>
                    <span class="text-gray-300">•</span>
                    <span>🌱 Lorem ipsum: City greening program successfully plants 10,000 trees</span>
                    <span class="text-gray-300">•</span>
                    <span>💼 Lorem ipsum: Local SMEs grow 30% through digital platform</span>
                    <span class="text-gray-300">•</span>
                    <span>🏥 Lorem ipsum: New healthcare facilities opened in 5 districts</span>
                    <span class="text-gray-300">•</span>
                    <span>⚡ Lorem ipsum: Electrical infrastructure strengthened for 100,000 residents</span>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Hero Banner --}}
<div class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white py-12 px-6 text-center">
    <h1 class="text-2xl md:text-4xl font-bold mb-4">🏙️ Smart City HQ</h1>
    <p class="text-xl mb-8 opacity-90">City services, local businesses, and community — all in one platform</p>
    @guest
        <a href="/register" class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-all">
            Get Started →
        </a>
    @endguest
    @auth
        <a href="/profile" class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-all">
            View Profile →
        </a>
    @endauth
</div>

{{-- Stats --}}
<div class="container mx-auto px-6 py-12">
    <div class="grid grid-cols-3 gap-6 mb-12">
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <p class="text-4xl font-bold text-cyan-500">{{ $users }}+</p>
            <p class="text-gray-600 mt-2">👥 Registered Citizens</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <p class="text-4xl font-bold text-cyan-500">{{ $complaints }}</p>
            <p class="text-gray-600 mt-2">📋 Complaints Handled</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <p class="text-4xl font-bold text-cyan-500">{{ $services }}+</p>
            <p class="text-gray-600 mt-2">🏪 Services Available</p>
        </div>
    </div>

    {{-- Local Products --}}
    <h2 class="text-3xl font-bold text-gray-700 mb-6 text-center">🛍️ Local SME Products</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
        <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-all">
            <div class="text-5xl mb-3">🍪</div>
            <h3 class="font-bold text-gray-700">Traditional Cookies</h3>
            <p class="text-cyan-500 font-bold mt-1">Rp 25,000</p>
            <p class="text-gray-500 text-sm">Toko Bu Sari</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-all">
            <div class="text-5xl mb-3">👗</div>
            <h3 class="font-bold text-gray-700">Local Batik</h3>
            <p class="text-cyan-500 font-bold mt-1">Rp 150,000</p>
            <p class="text-gray-500 text-sm">Batik Nusantara</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-all">
            <div class="text-5xl mb-3">🌿</div>
            <h3 class="font-bold text-gray-700">Organic Herbal</h3>
            <p class="text-cyan-500 font-bold mt-1">Rp 45,000</p>
            <p class="text-gray-500 text-sm">Apotek Hijau</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-4 text-center hover:shadow-lg transition-all">
            <div class="text-5xl mb-3">🎨</div>
            <h3 class="font-bold text-gray-700">Handcrafts</h3>
            <p class="text-cyan-500 font-bold mt-1">Rp 75,000</p>
            <p class="text-gray-500 text-sm">Galeri Kreatif</p>
        </div>
    </div>

    {{-- City Services --}}
    <h2 class="text-3xl font-bold text-gray-700 mb-6 text-center">🏛️ City Services</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-12">
        <a href="/complaints/create" class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-all hover:border-cyan-500 border-2 border-transparent">
            <div class="text-4xl mb-3">📋</div>
            <h3 class="font-bold text-gray-700">Complaints</h3>
            <p class="text-gray-500 text-sm mt-1">Report city issues</p>
        </a>
        <a href="/services" class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-all hover:border-cyan-500 border-2 border-transparent">
            <div class="text-4xl mb-3">🏪</div>
            <h3 class="font-bold text-gray-700">Public Services</h3>
            <p class="text-gray-500 text-sm mt-1">ID Card, License & more</p>
        </a>
        <a href="/about" class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-all hover:border-cyan-500 border-2 border-transparent">
            <div class="text-4xl mb-3">ℹ️</div>
            <h3 class="font-bold text-gray-700">About the City</h3>
            <p class="text-gray-500 text-sm mt-1">City information & news</p>
        </a>
    </div>

    {{-- CTA --}}
    <div class="bg-cyan-500 rounded-2xl p-12 text-center text-white">
        <h2 class="text-3xl font-bold mb-4">Have a Local Product?</h2>
        <p class="text-lg mb-8 opacity-90">Register your product and reach thousands of city residents!</p>
        <a href="/register" class="bg-white text-cyan-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition-all">
            Register as Seller →
        </a>
    </div>
</div>

@endsection