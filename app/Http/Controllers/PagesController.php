<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function home()
    {
        return Inertia::render('Welcome');
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function service()
    {
        return Inertia::render('Service');
    }
    
    public function contact()
    {
        return Inertia::render('Contact');
    }
}
