<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function view()
    {
        $staffs = staff::all();
        return view('staff_view', compact('staffs'));
    }

    public function create()
    {
        return view('staff_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'name' => 'required',
            'role' => 'required',
            'departement' => 'required',
        ]);

        Staff::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'role' => $request->role,
            'departement' => $request->departement,
        ]);

        return redirect()->route('staff.view');
    }
}
