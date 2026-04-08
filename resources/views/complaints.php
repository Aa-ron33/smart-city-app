@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-2xl">
    <h1 class="text-3xl font-bold mb-8">📝 Laporkan Aduan</h1>

    <form method="POST" action="{{ route('complaints.store') }}" class="space-y-6 bg-white p-8 rounded-lg shadow">
        @csrf
        
        <div>
            <label class="block text-sm font-medium mb-2">Judul Aduan</label>
            <input type="text" name="judul_aduan" value="{{ old('judul_aduan') }}" 
                   class="w-full p-3 border rounded-lg @error('judul_aduan') border-red-500 @enderror" required>
            @error('judul_aduan') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-2">Jenis Aduan</label>
            <input type="text" name="jenis_aduan" value="{{ old('jenis_aduan') }}" 
                   class="w-full p-3 border rounded-lg @error('jenis_aduan') border-red-500 @enderror" 
                   placeholder="Contoh: Jalan Rusak, Sampah Bertumpuk" required>
            @error('jenis_aduan') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium mb-2">Deskripsi</label>
            <textarea name="deskripsi" rows="5" class="w-full p-3 border rounded-lg @error('deskripsi') border-red-500 @enderror" required>{{ old('deskripsi') }}</textarea>
            @error('deskripsi') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg font-semibold hover:bg-blue-700">
            🚀 Laporkan Aduan
        </button>
    </form>
</div>
@endsection