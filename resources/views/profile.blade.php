@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8 max-w-4xl">

    {{-- Profile Card --}}
    <div class="bg-white shadow-md rounded-lg p-6 mb-6">
        <div class="flex items-center gap-6">
            
            {{-- Profile Picture --}}
            <div class="w-24 h-24 rounded-full bg-gray-200 flex items-center justify-center text-4xl shrink-0">
                👤
            </div>

            {{-- Name & Username --}}
            <div class="flex-1">
                <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}</h2>
                <p class="text-gray-500">@ {{ strtolower($user->name) }}</p>
                <p class="text-gray-400 text-sm mt-1">{{ $user->email }}</p>
                <p class="text-gray-400 text-sm">Member since {{ $user->created_at->format('d M Y') }}</p>
            </div>

            {{-- Stats --}}
            <div class="bg-blue-50 rounded-lg p-4 text-center min-w-[120px]">
                <p class="text-3xl font-bold text-cyan-500">{{ $user->complaints->count() }}</p>
                <p class="text-gray-500 text-sm mt-1">📋 Complaints</p>
            </div>

        </div>

        {{-- Buttons --}}
        <div class="flex gap-3 mt-6">
            <button class="bg-blue-500 text-white px-6 py-2 rounded-lg hover:bg-blue-400 transition-all">
                ✏️ Edit Profile
            </button>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-400 transition-all">
                    Logout
                </button>
            </form>
        </div>
    </div>

    {{-- Complaints --}}
    <div class="bg-white shadow-md rounded-lg p-6">
        <h3 class="text-xl font-bold text-gray-700 mb-4">📝 My Complaints</h3>

        @if($user->complaints->count() > 0)
            <div class="space-y-4">
                @foreach($user->complaints as $complaint)
                <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-all">
                    <div class="flex justify-between items-start">
                        <div>
                            <h4 class="font-bold text-gray-700">{{ $complaint->judul_aduan }}</h4>
                            <p class="text-gray-500 text-sm mt-1">{{ $complaint->jenis_aduan }}</p>
                            <p class="text-gray-400 text-sm">{{ $complaint->created_at->format('d M Y') }}</p>
                        </div>
                        <div>
                            @if($complaint->status)
                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">✅ Resolved</span>
                            @else
                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">⏳ Pending</span>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-12 text-gray-400">
                <p class="text-5xl mb-4">📭</p>
                <p>No complaints yet</p>
                <a href="{{ route('complaints.create') }}" class="inline-block mt-4 bg-cyan-500 text-white px-6 py-2 rounded-lg hover:bg-cyan-400">
                    + Submit a Complaint
                </a>
            </div>
        @endif
    </div>

</div>
@endsection