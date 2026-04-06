@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold text-center text-gray-700 mb-6">Smart City Dashboard</h1>
    <div class="grid grid-cols-3 gap-4">
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="text-xl font-bold text-gray-700">Users</h3>
            <p class="text-4xl font-bold text-cyan-500 mt-2">{{ $users }}</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="text-xl font-bold text-gray-700">Complaints</h3>
            <p class="text-4xl font-bold text-cyan-500 mt-2">{{ $complaints }}</p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
            <h3 class="text-xl font-bold text-gray-700">Services</h3>
            <p class="text-4xl font-bold text-cyan-500 mt-2">{{ $services }}</p>
        </div>
    </div>
</div>
@endsection