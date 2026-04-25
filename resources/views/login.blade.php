@extends('layouts.app')

@section('content')

<div class="container mx-auto p-8 min-h-screen flex items-center justify-center">
      <div class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full transform transition-all hover:shadow-xl">
        <h2 class="text-3xl font-bold text-center text-gray-700 mb-2">Welcome Back!</h2>
        <p class="text-center text-gray-500 mb-6">Login to your account</p>
        
        <form action="{{ route('login.post') }}" method="POST" class="space-y-4">
          @csrf 
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
            <input 
              type="email"
              name="email" 
              placeholder="your.email@example.com" 
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all outline-none"
            />
          </div>
          
          <div>
            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
            <input 
              type="password" 
              name="password"
              placeholder="Enter your password" 
              class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all outline-none"
            />
          </div>

          <div class="flex items-center justify-between">
            <label class="flex items-center">
              <input type="checkbox" class="mr-2" />
              <span class="text-sm text-gray-600">Remember me</span>
            </label>
            <a href="#" class="text-blue-600 hover:text-blue-800 text-sm transition-colors">
              Forgot password?
            </a>
          </div>

          <button 
            type="submit"
            class="w-full bg-blue-500 text-white py-3 rounded-lg font-semibold hover:bg-blue-600 active:scale-95 transition-all transform"
          >
            Login
          </button>
        </form>

        <div class="mt-6 text-center">
          <p class="text-sm text-gray-600">
            Don't have an account?
            <a href="/register" class="text-blue-600 font-semibold hover:text-blue-800 transition-colors">
              Register here
            </a>
          </p>
        </div>

        <div class="mt-6">
          <div class="relative">
            <div class="absolute inset-0 flex items-center">
              <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
              <span class="px-2 bg-white text-gray-500">Or continue with</span>
            </div>
          </div>

          <div class="mt-4 grid grid-cols-2 gap-3">
            <button 
              type="button"
              class="border-2 border-gray-300 rounded-md p-2 hover:bg-gray-50 flex items-center justify-center transition-colors"
            >
              <span class="mr-2">📱</span> Google
            </button>
            <button 
              type="button"
              class="border-2 border-gray-300 rounded-md p-2 hover:bg-gray-50 flex items-center justify-center transition-colors"
            >
              <span class="mr-2">📘</span> Facebook
            </button>
          </div>
        </div>
      </div>
    </div>
    
@endsection