<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Organization;
use App\Models\Program;

class HomeController extends Controller
{
    public function index()
    {
        $organization = Organization::where('status', 'active')->first();
        $program = Program::with('department')->latest()->take(6)->get();
        $gallery = Gallery::latest()->take(6)->get();

        return view('pages.himaprofile.home', compact('organization', 'program', 'gallery'));
    }

    public function galleries()
    {
        $galleries = Gallery::latest()->get();

        return view('pages.himaprofile.galleries', compact('galleries'));
    }
}
