<?php

namespace App\Http\Controllers;

use App\Models\Supabase;
use Illuminate\Http\Request;

class SupabaseController extends Controller
{
    // ================= GET ALL DATA =================
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    // ================= FORM CREATE =================
    public function create()
    {
        return view('users.create');
    }

    // ================= INSERT DATA =================
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name
        ]);

        return redirect('/users');
    }

    // ================= FORM EDIT =================
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    // ================= UPDATE DATA =================
    public function update(Request $request, $id)
    {
        User::where('id', $id)->update([
            'name' => $request->name
        ]);

        return redirect('/users');
    }

    // ================= DELETE =================
    public function destroy($id)
    {
        User::where('id', $id)->delete();
        return redirect('/users');
    }
}
