<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index(Request $request)
    {
        $program = Program::with('department')
            ->when($request->department, function ($query) use ($request) {
                $query->where('department_id', $request->department);
            })
            ->latest()
            ->paginate(9)
            ->withQueryString();

        return view('pages.himaprofile.proker', compact('program'));
    }

    public function show(Program $program)
    {
        $program->load('department');

        return view('pages.himaprofile.proker-detail', compact('program'));
    }
}
