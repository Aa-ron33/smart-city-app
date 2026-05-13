@extends('layouts.app')

@section('content')
<div class="container mx-auto px-6 py-12">
    
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">🏥 Healthcare Services</h1>
        <p class="text-gray-500">Find government healthcare facilities near you</p>
    </div>

    {{-- Filter by Type --}}
    <div class="flex justify-center gap-3 mb-8">
        <a href="{{ route('healthcare.index') }}" 
           class="px-4 py-2 rounded-full text-sm font-medium {{ !$type ? 'bg-cyan-500 text-white' : 'bg-white text-gray-600 border hover:bg-gray-50' }}">
            All
        </a>
        <a href="{{ route('healthcare.index', ['type' => 'puskesmas']) }}" 
           class="px-4 py-2 rounded-full text-sm font-medium {{ $type == 'puskesmas' ? 'bg-cyan-500 text-white' : 'bg-white text-gray-600 border hover:bg-gray-50' }}">
            🏥 Puskesmas
        </a>
        <a href="{{ route('healthcare.index', ['type' => 'posyandu']) }}" 
           class="px-4 py-2 rounded-full text-sm font-medium {{ $type == 'posyandu' ? 'bg-cyan-500 text-white' : 'bg-white text-gray-600 border hover:bg-gray-50' }}">
            👶 Posyandu
        </a>
        <a href="{{ route('healthcare.index', ['type' => 'poslansia']) }}" 
           class="px-4 py-2 rounded-full text-sm font-medium {{ $type == 'poslansia' ? 'bg-cyan-500 text-white' : 'bg-white text-gray-600 border hover:bg-gray-50' }}">
            👴 Poslansia
        </a>
        <a href="{{ route('healthcare.index', ['type' => 'rsud']) }}" 
           class="px-4 py-2 rounded-full text-sm font-medium {{ $type == 'rsud' ? 'bg-cyan-500 text-white' : 'bg-white text-gray-600 border hover:bg-gray-50' }}">
            🏨 RSUD
        </a>
    </div>

    {{-- Facilities Grid --}}
    @if($facilities->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($facilities as $facility)
            <a href="{{ route('healthcare.show', $facility->id) }}" 
               class="bg-white shadow-md rounded-lg p-6 hover:shadow-lg transition-all border-l-4 
               {{ $facility->type == 'puskesmas' ? 'border-blue-500' : '' }}
               {{ $facility->type == 'posyandu' ? 'border-green-500' : '' }}
               {{ $facility->type == 'poslansia' ? 'border-purple-500' : '' }}
               {{ $facility->type == 'rsud' ? 'border-red-500' : '' }}">
                <div class="flex justify-between items-start mb-3">
                    <span class="text-2xl">
                        {{ $facility->type == 'puskesmas' ? '🏥' : '' }}
                        {{ $facility->type == 'posyandu' ? '👶' : '' }}
                        {{ $facility->type == 'poslansia' ? '👴' : '' }}
                        {{ $facility->type == 'rsud' ? '🏨' : '' }}
                    </span>
                    <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-full">Active</span>
                </div>
                <h3 class="font-bold text-gray-800 text-lg mb-1">{{ $facility->name }}</h3>
                <p class="text-gray-500 text-sm mb-2">{{ $facility->address }}</p>
                <p class="text-gray-400 text-xs">📞 {{ $facility->phone ?? 'No phone' }}</p>
                <p class="text-gray-400 text-xs mt-1">🕐 {{ $facility->operating_hours ?? 'Check facility' }}</p>
                <p class="text-cyan-500 text-sm font-medium mt-3">{{ $facility->services->count() }} services available →</p>
            </a>
            @endforeach
        </div>
    @else
        <div class="text-center py-16 text-gray-400">
            <p class="text-5xl mb-4">🏥</p>
            <p class="text-xl">No facilities found</p>
            <p class="text-sm mt-2">Try selecting a different category</p>
        </div>
    @endif

</div>
@endsection