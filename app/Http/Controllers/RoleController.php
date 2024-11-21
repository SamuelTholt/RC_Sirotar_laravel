<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $column = $request->input('column', 'id');
        $direction = $request->input('direction', 'asc');
        $search = $request->input('search');
        $searchColumn = $request->input('column');

        $users = User::query();

        if ($search) {
            $users = $users->where($searchColumn, 'like', '%' . $search . '%');
        }

        if ($column == 'role.nazov_role') {
            $users = $users->join('role', 'users.role_id', '=', 'role.id')
                ->select('users.*', 'role.nazov_role as role_nazov_role')
                ->orderBy('role.nazov_role', $direction);
        }

        $users = $users->orderBy($column, $direction)->paginate(5);

        return view('role', compact('users', 'column', 'direction'));

    }

    public function priraditRolu(Request $request, User $user)
    {
        $validated = $request->validate([
            'role' => 'required|exists:role,id',
        ]);

        $user->role_id = $validated['role'];
        $user->save();

        return redirect()->back()->with('success', 'Role assigned successfully!');
    }
}
