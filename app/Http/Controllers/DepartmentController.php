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
        if (!$departments) {
            return response()->json(['message' => 'Department tidak ditemukan!'], 404);
        }
        return response()->json($departments);
    }

    public function show($id)
    {
        $department = Department::with('organization')->find($id);
        if (!$department) {
            return response()->json(['message' => 'Department tidak ditemukan!'], 404);
        }
        return response()->json($department);
    }

    public function staff($id)
    {
        $department = Department::find($id);
        if (!$department) {
            return response()->json(['message' => 'Department tidak ditemukan!'], 404);
        }
        $staff = Staff::where('department_id', $id)->get();
        return response()->json($staff);
    }

    public function program($id)
    {
        $department = Department::find($id);
        if (!$department) {
            return response()->json(['message' => 'Department tidak ditemukan!'], 404);
        }
        $programs = Program::where('department_id', $id)->get();
        return response()->json($programs);
    }

    public function show_program($department_id, $program_id)
    {
        $department = Department::find($department_id);
        if (!$department) {
            return response()->json(['message' => 'Department tidak ditemukan!'], 404);
        }
        $program = Program::where('department_id', $department_id)
            ->where('id', $program_id)
            ->first();
        if (!$program) {
            return response()->json(['message' => 'Program tidak ditemukan!'], 404);
        }
        return response()->json($program);
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
