<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request) {
        $departments = Department::all();

        $program = Program::with('department')
            ->when($request->department, function ($query) use ($request) {
                $query->where('department_id', $request->department);
            })
            ->latest()
            ->paginate(6)
            ->withQueryString();

        return view('pages.himaprofile.proker', compact('program', 'departments'));
    }
}
