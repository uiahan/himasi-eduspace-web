<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Organization;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $organization = Organization::where('status', 'active')->first();
        $department = Department::all();
        $program = Program::with('department')->orderByDesc('created_at')->limit(6)->get();

        return view('pages.himaprofile.home', compact('organization', 'department', 'program'));
    }
}
