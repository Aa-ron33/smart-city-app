@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold text-gray-700 mb-6">Edit Aduan</h1>

    <form action="{{ route('complaints.update', $complaint->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="judul_aduan" class="block text-gray-700 font-bold mb-2">Judul Aduan</label>
            <input type="text" name="judul_aduan" id="judul_aduan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $complaint->judul_aduan }}" required>
        </div>

        <div class="mb-4">
            <label for="jenis_aduan" class="block text-gray-700 font-bold mb-2">Jenis Aduan</label>
            <input type="text" name="jenis_aduan" id="jenis_aduan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" value="{{ $complaint->jenis_aduan }}" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Deskripsi</label>
            <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>{{ $complaint->description }}</textarea>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update Aduan
            </button>
        </div>
    </form>
</div>
@endsection