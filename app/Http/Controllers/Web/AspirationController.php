<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Aspiration;
use App\Models\Department;
use Illuminate\Http\Request;

class AspirationController extends Controller
{
    public function index() {
        $departmentList = Department::all();
        return view('pages.himaprofile.aspiration', compact('departmentList'));
    }

    public function store(Request $request) {
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'message' => 'required'
        ]);

        Aspiration::create($validate);

        return back()->with('success', 'Aspirasi kamu berhasil dikirim, terimakasih ya');
    }
}
