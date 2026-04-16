@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-700">Daftar Aduan</h1>
        <a href="{{ route('complaints.create') }}" class="bg-cyan-500 text-white px-4 py-2 rounded-lg hover:bg-cyan-400">
            + Buat Aduan
        </a>
    </div>

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <table class="w-full">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="p-3 text-left">ID</th>
                    <th class="p-3 text-left">Judul Aduan</th>
                    <th class="p-3 text-left">Jenis</th>
                    <th class="p-3 text-left">Status</th>
                    <th class="p-3 text-left">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($complaints as $complaint)
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3">{{ $complaint->id }}</td>
                    <td class="p-3">{{ $complaint->judul_aduan }}</td>
                    <td class="p-3">{{ $complaint->jenis_aduan }}</td>
                    <td class="p-3">
                        @if($complaint->status)
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded">Selesai</span>
                        @else
                            <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded">Pending</span>
                        @endif
                    </td>
                    <td class="p-3">
                        <a href="{{ route('complaints.show', $complaint->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-400">Detail</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="p-4">
            {{ $complaints->links() }}
        </div>
    </div>
</div>
@endsection