<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Program;
use App\Models\Staff;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::with('organization')->get();

        return view('departments.index', compact('departments'));
    }


    public function show($id)
    {
        $department = Department::with('organization')->findOrFail($id);

        return view('departments.show', compact('department'));
    }

    public function staff($id)
    {
        $department = Department::findOrFail($id);
        $staffs = Staff::where('department_id', $id)->get();

        return view('departments.staff', compact('department', 'staffs'));
    }

    public function program($id)
    {
        $department = Department::findOrFail($id);
        $programs = Program::where('department_id', $id)->get();

        return view('departments.program', compact('department', 'programs'));
    }

    public function show_program($department_id, $program_id)
    {
        $department = Department::findOrFail($department_id);

        $program = Program::where('department_id', $department_id)
            ->where('id', $program_id)
            ->firstOrFail();

        return view('programs.show', compact('department', 'program'));
    }

    // public function staff(Request $request)
    // {
    //     $query = Staff::with('department');

    //     if ($request->filled('department_id')) {
    //         $query->where('department_id', $request->input('department_id'));
    //     }
    //     $staff = $query->get();
    //     return response()->json($staff);
    // }

    // public function program(Request $request)
    // {
    //     $query = Program::with('department');

    //     if ($request->filled('department_id')) {
    //         $query->where('department_id', $request->input('department_id'));
    //     }
    //     $programs = $query->get();
    //     return response()->json($programs);
    // }

    // public function show_program($id)
    // {
    //     $program = Program::with('department')->find($id);
    //     if (!$program) {
    //         return response()->json(['message' => 'Program tidak ditemukan!'], 404);
    //     }
    //     return response()->json($program);
    // }
}
