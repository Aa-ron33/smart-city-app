<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Healthcare;
use App\Models\HealthcareService;
use App\Models\HealthcareBooking;
use Illuminate\Support\Facades\Auth;

class HealthcareController extends Controller
{
    // List semua fasilitas + filter per type
    public function index(Request $request)
    {
        $type = $request->type;
        
        $facilities = Healthcare::with('services')
            ->when($type, function($q) use ($type) {
                $q->where('type', $type);
            })
            ->where('status', 'active')
            ->get();

        return view('healthcare.HCindex', compact('facilities', 'type'));
    }

    // Detail 1 fasilitas + layanannya
    public function show(string $id)
    {
        $facility = Healthcare::with('services')->findOrFail($id);
        return view('healthcare.HCshow', compact('facility'));
    }

    // Form booking
    public function booking(string $id)
    {
        $facility = Healthcare::with('services')->findOrFail($id);
        return view('healthcare.HCbooking', compact('facility'));
    }

    // Simpan booking
    public function storeBooking(Request $request)
    {
        $request->validate([
            'healthcare_id' => 'required',
            'service_id' => 'required',
            'booking_date' => 'required|date|after:today',
            'booking_time' => 'required',
            'notes' => 'nullable',
        ]);

        HealthcareBooking::create([
            'user_id' => Auth::id(),
            'healthcare_id' => $request->healthcare_id,
            'service_id' => $request->service_id,
            'booking_date' => $request->booking_date,
            'booking_time' => $request->booking_time,
            'notes' => $request->notes,
            'status' => 'pending',
        ]);

        return redirect()->route('healthcare.HCindex')
            ->with('success', '✅ Booking berhasil! Silakan datang sesuai jadwal.');
    }

    // Riwayat booking user
    public function myBookings()
    {
        $bookings = HealthcareBooking::with(['facility', 'service'])
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('healthcare.HCmy-bookings', compact('bookings'));
    }
}