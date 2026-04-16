@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-8 max-w-2xl">
        <h1 class="text-3xl font-bold text-gray-700 mb-4">Detail Aduan</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
        <show class="text-2xl font-semibold text-blue-600 mb-4">{{ $complaint->judul_aduan }}</show>
            <p class="text-gray-700 mb-2"><strong>Jenis Aduan:</strong> {{ $complaint->jenis_aduan }}</p>
            <p class="text-gray-700 mb-4"><strong>Deskripsi:</strong><br>{{ $complaint->deskripsi }}</p>
            <a href="{{ route('complaints.index') }}" class="bg-gray-200 text  -gray-700 px-4 py-2 rounded-lg hover:bg-gray-300">
                ← Kembali ke Daftar Aduan
            </a>
        </div>
        
        <div class="bg-white shadow-md rounded-lg p-6 mt-6">
            <h2 class="text-2xl font-semibold text-blue-600 mb-4">{{ $complaint->judul_aduan }}</h2>
            <p class="text-gray-700 mb-2"><strong>Jenis Aduan:</strong> {{ $complaint->jenis_aduan }}</p>
            <p class="text-gray-700 mb-4"><strong>Deskripsi:</strong><br>{{ $complaint->deskripsi }}</p>
            <a href="{{ route('complaints.index') }}" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300">
                ← Kembali ke Daftar Aduan
            </a>
        </div>
@endsection