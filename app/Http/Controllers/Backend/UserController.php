<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\UserDataTable;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(UserDataTable $dataTable)
    {
        $this->checkAuthorization(auth()->user(), ['user.view']);

        return $dataTable->render('backend.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->checkAuthorization(auth()->user(), ['user.create']);

        return view('backend.user.create', [
            'roles' => Role::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->checkAuthorization(auth()->user(), ['user.create']);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();


        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        session()->flash('success', __('User has been created.'));

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->checkAuthorization(auth()->user(), ['user.edit']);

        $user = User::findOrFail($id);

        return view('backend.user.edit', [
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->checkAuthorization(auth()->user(), ['user.edit']);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();

        $user->roles()->detach();
        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        return redirect()->route('users.index')->with('success', __('User has been updated.'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->checkAuthorization(auth()->user(), ['user.delete']);

        if ($user->email == 'admin@til.net' || $user->id == 1) {
            return redirect()->route('users.index')->with('warning', __('You can not delete Super Admin'));
        }

        $user->forceDelete();
        return redirect()->route('users.index')->with('success', __('User deleted successfully.'));
    }
}
