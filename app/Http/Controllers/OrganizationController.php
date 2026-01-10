<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function organization()
    {
        $organization = Organization::first();
        if (!$organization) {
            return response()->json(['message' => 'Organization not found!'], 404);
        }
        return response()->json($organization);
    }
}
