<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $organization = Organization::where('status' == 'active')->first();

        return view('pages.himaprofile.about', compact('organization'));
    }
}
