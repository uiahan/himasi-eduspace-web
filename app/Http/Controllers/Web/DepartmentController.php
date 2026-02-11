<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index(Department $department)
    {
        $department->load('staff');
        return view("pages.himaprofile.department", compact("department"));
    }
}
