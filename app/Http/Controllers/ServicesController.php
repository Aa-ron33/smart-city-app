<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ServicesController extends Controller
{
    /**
     * Display the services index page.
     */
    public function index(): View
    {
        return view('services', [
            'pageTitle' => 'Our Services',
            'pageSubtitle' => 'We offer comprehensive solutions tailored to your needs',
            'services' => $this->servicesList(),
            'cta' => [
                'heading' => 'Need a Custom Solution?',
                'text' => "Let's discuss how we can help your business grow",
                'url' => route('contact'),
                'buttonLabel' => 'Contact Us',
            ],
        ]);
    }

    /**
     * Optional: Dynamic detail page for a single service.
     */
    public function show(string $id): View
    {
        $services = $this->servicesList();
        $service = collect($services)->firstWhere('slug', $id);

        if (! $service) {
            abort(404);
        }

        return view('services', [
            'pageTitle' => $service['title'],
            'pageSubtitle' => $service['description'],
            'services' => $services,
            'selectedService' => $service,
            'cta' => [
                'heading' => 'Need a Custom Solution?',
                'text' => "Let's discuss how we can help your business grow",
                'url' => route('contact'),
                'buttonLabel' => 'Contact Us',
            ],
        ]);
    }

    private function servicesList(): array
    {
        return [
            [
                'slug' => 'web-development',
                'title' => 'Web Development',
                'description' => 'Custom website development using the latest technologies. Responsive, fast, and optimized for all devices.',
                'features' => ['Custom Design', 'Responsive Layout', 'SEO Optimized'],
            ],
            [
                'slug' => 'mobile-apps',
                'title' => 'Mobile Apps',
                'description' => 'Native and cross-platform mobile applications for iOS and Android devices.',
                'features' => ['iOS & Android', 'Cross-Platform', 'User-Friendly'],
            ],
            [
                'slug' => 'cloud-solutions',
                'title' => 'Cloud Solutions',
                'description' => 'Scalable cloud infrastructure and hosting solutions for your business applications.',
                'features' => ['99.9% Uptime', 'Scalable', 'Secure'],
            ],
            [
                'slug' => 'digital-marketing',
                'title' => 'Digital Marketing',
                'description' => 'Comprehensive digital marketing strategies to grow your online presence and reach.',
                'features' => ['SEO & SEM', 'Social Media', 'Content Marketing'],
            ],
            [
                'slug' => 'ui-ux-design',
                'title' => 'UI/UX Design',
                'description' => 'Beautiful and intuitive user interfaces that enhance user experience and engagement.',
                'features' => ['User Research', 'Wireframing', 'Prototyping'],
            ],
            [
                'slug' => 'consulting',
                'title' => 'Consulting',
                'description' => 'Expert consultation to help you make informed technology decisions for your business.',
                'features' => ['Strategy Planning', 'Technology Audit', 'Implementation'],
            ],
        ];
    }
}
