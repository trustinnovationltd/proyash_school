<?php

/**
 * @package EmployeeDataTable
 * @author Trust Innovation Limited <support@til.net>
 * @created 25-06-2025
 */

namespace App\DataTables;

use App\DataTables\DataTable;
use App\Models\Employees\Employee;
use Illuminate\Http\JsonResponse;

class EmployeeDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax(): JsonResponse
    {
        $employee = $this->query();
        return datatables()
            ->of($employee)
            ->addIndexColumn()
            ->addColumn('name', function ($employee) {
                return $employee->name_english . '<br><small>' . $employee->name_bangla . '</small>';
            })
            ->addColumn('image', function ($employee) {
                if ($employee->image) {
                    $url = asset('storage/' . $employee->image); // assuming you're using 'public' disk
                    return '<img src="' . $url . '" alt="employee" width="50" height="50" style="object-fit: cover; border-radius: 4px;">';
                }
                return '<span class="badge bg-secondary">No Image</span>';
            })
            ->addColumn('date_of_birth', function ($employee) {
                return \Carbon\Carbon::parse($employee->date_of_birth)->format('j F Y');
            })
            ->addColumn('joining_date', function ($employee) {
                return \Carbon\Carbon::parse($employee->joining_date)->format('j F Y');
            })
            ->addColumn('status', function ($employee) {
                return $employee->status ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>';
            })
            ->addColumn('action', function ($employee) {
                $edit = '<a title="' . __('Edit') . '" href="' . route('employees.edit', $employee->id) . '"class="btn btn-sm btn-info p-2"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;';
                $view = '<a title="' . __('Veiw') . '" href="' . route('employees.show', $employee->id) . '" class="btn btn-sm btn-primary p-2"><i class="fa-solid fa-eye "></i></a>&nbsp;';
                $delete = '<a title="' . __('delete') . '" class="btn btn-sm btn-danger p-2" onclick="confirmDelete(event,' . $employee->id . ')"><i class="fa-solid fa-trash"></i></a>&nbsp;';
                $delete .= '<form method="POST" action="' . route('employees.destroy', $employee->id) . '" id="employee-delete-form-' . $employee->id . '" accept-charset="UTF-8" style="display: none;">
                        ' . csrf_field() . '
                        <input type="hidden" name="_method" value="DELETE">
                        </form>';

                return $edit . $view . $delete;
            })

            ->rawColumns(['name', 'image', 'status', 'date_of_birth', 'joining_date', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        return Employee::orderBy('created_at', 'DESC');
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'DT_RowIndex', 'name' => 'DT_RowIndex', 'title' => __('SL'), 'width' => '2%', 'orderable' => false, 'searchable' => false])
            ->addColumn([
                'data' => 'image',
                'name' => 'image',
                'title' => __('Photo'),
                'orderable' => false,
                'searchable' => false,
                'width' => '8%'
            ])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => __('Name'), 'orderable' => true])
            ->addColumn(['data' => 'phone', 'name' => 'phone', 'title' => 'Phone',])
            ->addColumn(['data' => 'date_of_birth', 'name' => 'date_of_birth', 'title' => 'Date of Birth'])
            ->addColumn(['data' => 'gender', 'name' => 'gender', 'title' => 'Gender'])
            ->addColumn(['data' => 'blood_group', 'name' => 'blood_group', 'title' => 'Blood Group', 'width' => '15%'])
            ->addColumn(['data' => 'joining_date', 'name' => 'joining_date', 'title' => 'Joining Date', 'width' => '15%'])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status'), 'width' => '10%'])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '10%', 'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
