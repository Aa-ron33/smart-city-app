<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServicesController extends Controller
{
    public function index(): View
    {
        return view('services', [
            'pageTitle' => 'Smart City Services',
            'pageSubtitle' => 'All city services in one digital platform',
            'services' => $this->servicesList(),
            'cta' => [
                'heading' => 'Need Help?',
                'text' => 'Our team is ready to assist you 24/7',
                'url' => route('contact'),
                'buttonLabel' => 'Contact Us',
            ],
        ]);
    }

    public function show(string $id): mixed
{
    if ($id === 'healthcare') {
        return redirect()->route('healthcare.index');
    }

    if ($id === 'complaints') {
        return redirect()->route('complaints.index');
    }
    
    $services = $this->servicesList();
    $service = collect($services)->firstWhere('slug', $id);

    if (!$service) {
        abort(404);
    }

    return view('services', [
        'pageTitle' => $service['title'],
        'pageSubtitle' => $service['description'],
        'services' => $services,
        'selectedService' => $service,
        'cta' => [
            'heading' => 'Need Help?',
            'text' => 'Our team is ready to assist you 24/7',
            'url' => route('contact'),
            'buttonLabel' => 'Contact Us',
        ],
    ]);
}

    private function servicesList(): array
    {
        return [
            [
                'slug' => 'id-card',
                'title' => '🪪 ID Card (KTP)',
                'description' => 'Apply for a national ID card online without long queues at the office.',
                'features' => ['Online Application', 'Track Status', 'Real-time Notification'],
            ],
            [
                'slug' => 'drivers-license',
                'title' => '🚗 Driver\'s License',
                'description' => 'Renew your driver\'s license without visiting the office in person.',
                'features' => ['Document Upload', 'Test Scheduling', 'Online Payment'],
            ],
            [
                'slug' => 'complaints',
                'title' => '📋 Public Complaints',
                'description' => 'Report infrastructure issues and city service problems easily.',
                'features' => ['Report Issues', 'Track Status', 'Direct Feedback'],
            ],
            [
                'slug' => 'marketplace',
                'title' => '🛍️ UMKM Marketplace',
                'description' => 'Shop local products from small businesses, state-owned enterprises.',
                'features' => ['Local Products', 'State Enterprises', 'Local Services'],
            ],
            [
                'slug' => 'healthcare',
                'title' => '🏥 Healthcare Services',
                'description' => 'Find healthcare facilities, doctor schedules, and online queuing.',
                'features' => ['Clinic Info', 'Doctor Schedule', 'Online Queue'],
            ],
            [
                'slug' => 'emergency',
                'title' => '🆘 Emergency Services',
                'description' => 'Emergency services and important contact numbers available anytime.',
                'features' => ['📞 Police: 110', '🚒 Fire Dept: 113', '🚑 Ambulance: 118'],
            ],
        ];
    }
}