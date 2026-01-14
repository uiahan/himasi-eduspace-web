<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $organization = Organization::where('status', 'active')->first();

        return view('pages.himaprofile.about', compact('organization'));
    }
}
