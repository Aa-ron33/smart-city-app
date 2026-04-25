@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-3xl font-bold text-center text-gray-700 mb-6">{{ $pageTitle ?? 'Our Services' }}</h2>
        <p class="text-center text-gray-600 mb-8">{{ $pageSubtitle ?? 'We offer comprehensive solutions tailored to your needs' }}</p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            @foreach($services as $service)
                <div class="bg-blue-50 p-6 rounded-lg hover:shadow-lg transition">
                    <h3 class="text-xl font-bold text-blue-600 mb-3">{{ $service['title'] }}</h3>
                    <p class="text-gray-700 mb-4">{{ $service['description'] }}</p>
                    <ul class="text-gray-600 text-sm space-y-1">
                        @foreach($service['features'] as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>

        <div class="bg-blue-100 p-6 rounded-lg text-center">
            <h3 class="text-2xl font-bold text-gray-700 mb-3">{{ $cta['heading'] }}</h3>
            <p class="text-gray-600 mb-4">{{ $cta['text'] }}</p>
            <a href="{{ $cta['url'] }}" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block">{{ $cta['buttonLabel'] }}</a>
        </div>
    </div>
</div>
@endsection