@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
      <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-3xl font-bold text-center text-gray-700 mb-6">Our Services</h2>
        <p class="text-center text-gray-600 mb-8">We offer comprehensive solutions tailored to your needs</p>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
          <div class="bg-blue-50 p-6 rounded-lg hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-600 mb-3">Web Development</h3>
            <p class="text-gray-700 mb-4">
              Custom website development using the latest technologies. 
              Responsive, fast, and optimized for all devices.
            </p>
            <ul class="text-gray-600 text-sm space-y-1">
              <li>Custom Design</li>
              <li>Responsive Layout</li>
              <li>SEO Optimized</li>
            </ul>
          </div>

          <div class="bg-blue-50 p-6 rounded-lg hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-600 mb-3">Mobile Apps</h3>
            <p class="text-gray-700 mb-4">
              Native and cross-platform mobile applications 
              for iOS and Android devices.
            </p>
            <ul class="text-gray-600 text-sm space-y-1">
              <li>iOS & Android</li>
              <li>Cross-Platform</li>
              <li>User-Friendly</li>
            </ul>
          </div>

          <div class="bg-blue-50 p-6 rounded-lg hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-600 mb-3">Cloud Solutions</h3>
            <p class="text-gray-700 mb-4">
              Scalable cloud infrastructure and hosting solutions 
              for your business applications.
            </p>
            <ul class="text-gray-600 text-sm space-y-1">
              <li>99.9% Uptime</li>
              <li>Scalable</li>
              <li>Secure</li>
            </ul>
          </div>

          <div class="bg-blue-50 p-6 rounded-lg hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-600 mb-3">Digital Marketing</h3>
            <p class="text-gray-700 mb-4">
              Comprehensive digital marketing strategies to grow 
              your online presence and reach.
            </p>
            <ul class="text-gray-600 text-sm space-y-1">
              <li>SEO & SEM</li>
              <li>Social Media</li>
              <li>Content Marketing</li>
            </ul>
          </div>

          <div class="bg-blue-50 p-6 rounded-lg hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-600 mb-3">UI/UX Design</h3>
            <p class="text-gray-700 mb-4">
              Beautiful and intuitive user interfaces that 
              enhance user experience and engagement.
            </p>
            <ul class="text-gray-600 text-sm space-y-1">
              <li>User Research</li>
              <li>Wireframing</li>
              <li>Prototyping</li>
            </ul>
          </div>

          <div class="bg-blue-50 p-6 rounded-lg hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-600 mb-3">Consulting</h3>
            <p class="text-gray-700 mb-4">
              Expert consultation to help you make informed 
              technology decisions for your business.
            </p>
            <ul class="text-gray-600 text-sm space-y-1">
              <li>Strategy Planning</li>
              <li>Technology Audit</li>
              <li>Implementation</li>
            </ul>
          </div>
        </div>

        <div class="bg-blue-100 p-6 rounded-lg text-center">
          <h3 class="text-2xl font-bold text-gray-700 mb-3">Need a Custom Solution?</h3>
          <p class="text-gray-600 mb-4">"Let's discuss how we can help your business grow"</p>
          <a href="/contact" class="bg-blue-500 text-white px-6 py-3 rounded-md hover:bg-blue-600 inline-block">Contact Us</a>
        </div>
      </div>
    </div>
@endsection