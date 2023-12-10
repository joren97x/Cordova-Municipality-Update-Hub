<?php

namespace App\Http\Controllers\MunicipalAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function store(Request $request) {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'area_id' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        User::create($data);
        return back();

    }

    public function update(User $admin, Request $request) {
        $data = $request->validate([
            'email' => ['required', 'email'],
            'area_id' => 'required',
            'role' => 'required',
        ]);
        $admin->update($data);
        // User::create($data);
        return back();

    }

    public function destroy(User $admin, Request $request) {
        $admin->delete();
        return back();
    }

}
