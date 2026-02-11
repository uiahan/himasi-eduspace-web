<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Gallery;
use App\Models\Organization;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $organization = Organization::where('status', 'active')->first();
        $programs = Program::with('department')->latest()->take(6)->get();
        $galleries = Gallery::latest()->take(6)->get();

        return view('pages.himaprofile.home', [
            'organization' => $organization,
            'program' => $programs,
            'gallery' => $galleries,
        ]);
    }
}
