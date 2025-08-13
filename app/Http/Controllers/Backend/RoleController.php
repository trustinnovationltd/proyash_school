<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->checkAuthorization(auth()->user(), ['role.view']);
        $query = Role::query();

        if (request()->has('search') && request()->input('search') !== '') {
            $query->where('name', 'like', '%'.request()->input('search').'%');
        }

        return view('backend.role.index', [
            'roles' => $query->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->checkAuthorization(auth()->user(), ['role.create']);
        return view('backend.role.create', [
            'all_permissions' => Permission::all(),
            'permission_groups' => User::getpermissionGroups(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->checkAuthorization(auth()->user(), ['role.create']);

        // Process Data.
        $role = Role::create(['name' => $request->name]);
        $permissions = $request->input('permissions');

        if (! empty($permissions)) {
            $role->syncPermissions($permissions);
        }

        session()->flash('success', 'Role has been created.');

        return redirect()->route('role.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->checkAuthorization(auth()->user(), ['role.edit']);

        $role = Role::findById($id);
        if (! $role) {
            session()->flash('error', 'Role not found.');

            return back();
        }

        return view('backend.role.edit', [
            'role' => $role,
            'all_permissions' => Permission::all(),
            'permission_groups' => User::getpermissionGroups(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->checkAuthorization(auth()->user(), ['role.edit']);

        $role = Role::findById($id);
        if (! $role) {
            session()->flash('error', 'Role not found.');

            return back();
        }

        $permissions = $request->input('permissions');
        if (! empty($permissions)) {
            $role->name = $request->name;
            $role->save();
            $role->syncPermissions($permissions);
        }

        session()->flash('success', 'Role has been updated.');

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->checkAuthorization(auth()->user(), ['role.delete']);

        $role = Role::findById($id);
        if (! $role) {
            session()->flash('error', 'Role not found.');

            return back();
        }

        if ($role->name == 'superadmin' || $role->id == 1) {
            return redirect()->route('role.index')->with('warning', __('You can not delete Super Admin Role'));
        }

        $role->delete();
        session()->flash('success', 'Role has been deleted.');

        return redirect()->route('role.index');
    }
}
