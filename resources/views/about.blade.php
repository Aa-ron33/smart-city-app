@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-8 relative z-10">
        <div class="bg-white shadow-md rounded-lg p-6">
          <div class="mb-8 bg-blue-50 p-4 rounded-lg">
            <h3 class="text-center text-2xl font-semibold text-blue-600 mb-4">Who We Are</h3>
            <p class="text-gray-700 mb-4">
              HQ Homepage has been serving customers since 2020. We are dedicated to providing exceptional service
              and innovative solutions that meet the needs of our diverse clientele.
            </p>
            <p class="text-gray-700">
              Our team of experienced professionals is committed to excellence in everything we do,
              from product development to customer support.
            </p>
          </div>

          <div class="mb-8">
            <h3 class="text-center text-2xl font-semibold text-blue-600 mb-4">Our Values</h3>
            <div class="grid md:grid-cols-3 gap-4">
              <div class="bg-blue-50 p-4 rounded-lg">
                <h4 class="font-bold text-lg mb-2">Innovation</h4>
                <p class="text-gray-700">Constantly evolving and improving our offerings</p>
              </div>
              <div class="bg-blue-50 p-4 rounded-lg">
                <h4 class="font-bold text-lg mb-2">Integrity</h4>
                <p class="text-gray-700">Honest and transparent in all our dealings</p>
              </div>
              <div class="bg-blue-50 p-4 rounded-lg">
                <h4 class="font-bold text-lg mb-2">Excellence</h4>
                <p class="text-gray-700">Committed to the highest quality standards</p>
              </div>
            </div>
          </div>

          <div class="mb-8 bg-blue-50 p-4 rounded-lg">
            <h3 class="text-center text-2xl font-semibold text-blue-600 mb-4">Our Team</h3>
            <p class="text-gray-700">
              We have a diverse team of experts from various backgrounds, all working together
              to deliver the best possible experience for our customers. Our collaborative approach
              ensures that we can tackle any challenge and exceed expectations.
            </p>
          </div>
        </div>
      </div>
@endsection