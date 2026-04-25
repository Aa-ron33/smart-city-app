@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8 max-w-2xl">
    <div class="bg-white shadow-md rounded-lg p-8">
        <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">📋 Permohonan Pengaduan</h1>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('complaints.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-gray-700 font-bold mb-2">Judul Aduan</label>
                <input type="text" name="judul_aduan" 
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="Masukkan judul aduan" required>
                @error('judul_aduan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-bold mb-2">Jenis Aduan</label>
                <select name="jenis_aduan" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none">
                    <option value="">-- Pilih Jenis --</option>
                    <option value="infrastruktur">Infrastruktur</option>
                    <option value="lingkungan">Lingkungan</option>
                    <option value="transportasi">Transportasi</option>
                    <option value="layanan_publik">Layanan Publik</option>
                    <option value="lainnya">Lainnya</option>
                </select>
                @error('jenis_aduan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block text-gray-700 font-bold mb-2">Deskripsi</label>
                <textarea name="deskripsi" rows="5"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                    placeholder="Jelaskan pengaduan kamu secara detail..." required></textarea>
                @error('deskripsi')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-4">
                <button type="submit" class="w-full bg-cyan-500 text-white py-3 rounded-lg font-semibold hover:bg-cyan-400 transition-all">
                    🚀 Kirim Aduan
                </button>
                <a href="{{ route('complaints.index') }}" class="w-full text-center bg-gray-200 text-gray-700 py-3 rounded-lg font-semibold hover:bg-gray-300 transition-all">
                    ← Kembali
                </a>
            </div>
        </form>
    </div>
</div>
@endsection