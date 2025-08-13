<?php

/**
 * @package StudentDataTable
 * @author Trust Innovation Limited <support@til.net>
 * @contributor Md Mostafijur Rahman <[mostafijur.til@gmail.com]>
 * @created 07-04-2025
 */

namespace App\DataTables;

use App\DataTables\DataTable;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class UserDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax(): JsonResponse
    {
        $user = $this->query();
        return datatables()
            ->of($user)
            ->addColumn('name', function ($user) {
                return $user->name;
            })
            ->addColumn('email', function ($user) {
                return $user->email;
            })
            ->addColumn('phone', function ($user) {
                return $user->phone;
            })
            // ->addColumn('address', function ($user) {
            //     return $user->address;
            // })
            ->addColumn('role', function ($user) {
                return $user->roles->map(function ($role) {
                    return '<span class="badge rounded-pill bg-success text-light me-1">' . e($role->name) . '</span>';
                })->implode(' ');
            })
            ->addColumn('action', function ($user) {
                $edit = '<a title="' . __('Edit') . '" href="' . route('users.edit', $user->id) . '"class="btn btn-sm btn-info p-2"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;';
                $delete = '<a title="' . __('delete') . '" class="btn btn-sm btn-danger p-2" onclick="confirmDelete(event,' . $user->id . ')"><i class="fa-solid fa-trash"></i></a>&nbsp;';
                $delete .= '<form method="POST" action="' . route('users.destroy', $user->id) . '" id="user-delete-form-' . $user->id . '" accept-charset="UTF-8" style="display: none;">
                        ' . csrf_field() . '
                        <input type="hidden" name="_method" value="DELETE">
                        </form>';

                return $edit . $delete;
            })

            ->rawColumns(['institute', 'name', 'role', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        return User::query();
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => __('Name'), 'orderable' => false])
            ->addColumn(['data' => 'email', 'name' => 'email', 'title' => __('Email')])
            ->addColumn(['data' => 'role', 'name' => 'role', 'title' => __('Role'), 'orderable' => false])
            ->addColumn(['data' => 'phone', 'name' => 'phone', 'title' => __('Phone'), 'orderable' => false])
            // ->addColumn(['data' => 'address', 'name' => 'address', 'title' => __('Address'), 'orderable' => false])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '10%', 'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
