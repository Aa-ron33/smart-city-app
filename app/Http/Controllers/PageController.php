<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
    public function dashboard()
{
    return view('dashboard', [
        'users' => 1240,
        'complaints' => 87,
        'services' => 34
    ]);
    // ADMIN COMPLAINTS
public function adminComplaints(Request $request)
{
    $search = $request->get('search');
    
    $complaints
}
}