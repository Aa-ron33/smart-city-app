@extends('layouts.app')

@section('content')
<div class="container mx-auto p-8">
      <div class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-3xl font-bold text-center text-gray-700 mb-6">Contact Us</h2>
        
        <div class="grid md:grid-cols-2 gap-8 mb-8">
          <div>
            <h3 class="text-2xl font-semibold text-blue-600 mb-4">Get in Touch</h3>
            <form class="space-y-4">
              <div>
                <label class="block text-gray-700 font-semibold mb-2">Name</label>
                <input type="text" placeholder="Your Name" class="border-2 border-gray-300 rounded-md p-2 w-full" />
              </div>
              <div>
                <label class="block text-gray-700 font-semibold mb-2">Email</label>
                <input type="email" placeholder="your.email@example.com" class="border-2 border-gray-300 rounded-md p-2 w-full" />
              </div>
              <div>
                <label class="block text-gray-700 font-semibold mb-2">Subject</label>
                <input type="text" placeholder="Subject" class="border-2 border-gray-300 rounded-md p-2 w-full" />
              </div>
              <div>
                <label class="block text-gray-700 font-semibold mb-2">Message</label>
                <textarea placeholder="Your message..." rows="5" class="border-2 border-gray-300 rounded-md p-2 w-full"></textarea>
              </div>
              <button type="submit" class="bg-blue-500 text-white p-2 rounded-md w-full hover:bg-blue-600 transition-colors">
                Send Message
              </button>
            </form>
          </div>

          <div>
            <h3 class="text-2xl font-semibold text-blue-600 mb-4">Contact Information</h3>
            <div class="space-y-4">
              <div class="bg-blue-50 p-4 rounded-lg">
                <h4 class="font-bold text-lg mb-2">Email</h4>
                <p class="text-gray-700">info@hqhomepage.com</p>
                <p class="text-gray-700">support@hqhomepage.com</p>
              </div>
              <div class="bg-blue-50 p-4 rounded-lg">
                <h4 class="font-bold text-lg mb-2">Phone</h4>
                <p class="text-gray-700">+1 (555) 123-4567</p>
                <p class="text-gray-700">Mon-Fri: 9:00 AM - 6:00 PM</p>
              </div>
              <div class="bg-blue-50 p-4 rounded-lg">
                <h4 class="font-bold text-lg mb-2">Address</h4>
                <p class="text-gray-700">123 Business Street</p>
                <p class="text-gray-700">Suite 100</p>
                <p class="text-gray-700">City, State 12345</p>
              </div>
              <div class="bg-blue-50 p-4 rounded-lg">
                <h4 class="font-bold text-lg mb-2">Social Media</h4>
                <p class="text-gray-700">Twitter: <a href="#" class="text-blue-600 hover:underline">@HQTweet</a></p>
                <p class="text-gray-700">Facebook: <a href="#" class="text-blue-600 hover:underline">@HQfacebook</a></p>
                <p class="text-gray-700">Instagram: <a href="#" class="text-blue-600 hover:underline">@Head_quarter</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
    @endsection