@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8 max-w-2xl">
    <div class="bg-white shadow-md rounded-lg p-8">
        <h1 class="text-3xl font-bold text-blue-600 mb-6">👤 Profile Saya</h1>
        
        <div class="space-y-4">
            <div>
                <label class="font-bold text-gray-700">Nama:</label>
                <p class="text-gray-600">{{ $user->name }}</p>
            </div>
            <div>
                <label class="font-bold text-gray-700">Email:</label>
                <p class="text-gray-600">{{ $user->email }}</p>
            </div>
            <div>
                <label class="font-bold text-gray-700">Bergabung sejak:</label>
                <p class="text-gray-600">{{ $user->created_at->format('d M Y') }}</p>
            </div>
        </div>

        <div class="mt-8">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="bg-red-500 text-white px-6 py-2 rounded-lg hover:bg-red-400">
                    Logout
                </button>
            </form>
        </div>
    </div>
</div>
@endsection