@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8 max-w-2xl">
    <h1 class="text-3xl font-bold text-gray-700 mb-4">Detail Aduan</h1>
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">{{ $complaint->judul_aduan }}</h2>
        <p class="text-gray-700 mb-2"><strong>Jenis Aduan:</strong> {{ $complaint->jenis_aduan }}</p>
        <p class="text-gray-700 mb-4"><strong>Deskripsi:</strong><br>{{ $complaint->deskripsi }}</p>
        <div class="mt-4">
            @if($complaint->status)
                <span class="bg-green-100 text-green-700 px-2 py-1 rounded">Selesai</span>
            @else
                <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded">Pending</span>
            @endif
        </div>

        <group class="mt-6 flex gap-4">
            <a href="{{ route('complaints.edit', $complaint->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-400">
                Edit Aduan
            </a>
            <form action="{{ route('complaints.destroy', $complaint->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus aduan ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-400">
                    Hapus Aduan
                </button>
            </form>
        </group>    

        <a href="{{ route('complaints.index') }}" class="inline-block mt-6 bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300">
            ← Kembali ke Daftar Aduan
        </a>
    </div>
</div>

@endsection