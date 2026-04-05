@extends('layouts.app')

@section('content')
    <div class="flex items-center justify-center min-h-[80vh] px-6">
        <div class="text-center max-w-4xl mx-auto">
            <span class="inline-block mb-4 px-4 py-1.5 rounded-full border border-cyan-500 bg-cyan-50 text-cyan-600 text-sm font-medium">
                WELCOME TO THE FUTURE
            </span>
            <h1 class="text-5xl md:text-7xl font-bold mb-6 text-gray-900">
                The Smart City <br>
                <span class="text-cyan-500">Headquarters</span>
            </h1>
            <p class="text-lg text-gray-600 mb-10 max-w-2xl mx-auto">
                We connect infrastructure, data, and people to build sustainable urban environments.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/register" class="px-8 py-4 bg-cyan-500 text-white font-semibold rounded-lg hover:bg-cyan-400 transition-all shadow-lg">
                    Initialize Account
                </a>
                <a href="/services" class="px-8 py-4 bg-white border border-gray-300 text-gray-800 font-medium rounded-lg hover:bg-gray-50 transition-all">
                    Explore Services
                </a>
            </div>
        </div>
    </div>
@endsection