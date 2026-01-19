<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Recruitment;
use App\Models\RecruitmentCandidate;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index()
    {
        $departmentList = Department::all();
        $recruitmentList = Recruitment::all();

        return view("pages.himaprofile.recruitment", compact('departmentList', 'recruitmentList'));
    }

    public function show(Recruitment $recruitment)
    {
        $departmentList = Department::all();

        return view('pages.himaprofile.recruitment-detail',compact('recruitment', 'departmentList'));
    }

    public function store(Request $request, Recruitment $recruitment)
    {
        $data = $request->validate([
            'full_name' => 'required|string|max:255',
            'nim' => 'required|string|max:50',
            'photo' => 'nullable|image|max:2048',
            'class' => 'required|string|max:50',
            'prodi' => 'required|string|max:100',
            'email' => 'required|email',
            'phone' => 'required|string|max:20',
            'reason' => 'required|string',
            'portofolio' => 'nullable|string',
            'department' => 'nullable|string',
            'department_second' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store(
                'recruitment/candidates',
                'public'
            );
        }

        RecruitmentCandidate::create($data);

        return redirect()
            ->back()
            ->with('success', 'Pendaftaran berhasil dikirim 💚');
    }
}
