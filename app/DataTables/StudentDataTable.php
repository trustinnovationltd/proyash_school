<?php

/**
 * @package StudentDataTable
 * @author Trust Innovation Limited <support@til.net>
 * @contributor Md Mostafijur Rahman <[mostafijur.til@gmail.com]>
 * @created 25-02-2025
 */

namespace App\DataTables;

use App\DataTables\DataTable;
use App\Models\Students\Student;
use Illuminate\Http\JsonResponse;

class StudentDataTable extends DataTable
{
    /*
    * DataTable Ajax
    *
    * @return \Yajra\DataTables\DataTableAbstract|\Yajra\DataTables\DataTables
    */
    public function ajax(): JsonResponse
    {
        $student = $this->query();
        return datatables()
            ->of($student)
            ->addColumn('institute', function ($student) {
                return optional($student->institute)->name;
            })
            ->addColumn('academic_year', function ($student) {
                return optional($student->academic)->title;
            })
            ->addColumn('medium', function ($student) {
                return optional($student->medium)->title;
            })
            ->addColumn('shift', function ($student) {
                return optional($student->shift)->title;
            })
            ->addColumn('class', function ($student) {
                return optional($student->class)->title;
            })
            ->addColumn('name', function ($student) {
                return $student->name_english;
            })
            ->addColumn('roll', function ($student) {
                return $student->roll_number;
            })
            ->addColumn('rfid', function ($student) {
                return $student->rfid_number;
            })
            ->addColumn('action', function ($student) {
                $edit = '<a title="' . __('Edit') . '" href="' . route('students.edit', $student->id) . '"class="btn btn-sm btn-info p-2"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;';
                $view = '<a title="' . __('Veiw') . '" href="' . route('students.show', $student->id) . '" class="btn btn-sm btn-primary p-2"><i class="fa-solid fa-eye "></i></a>&nbsp;';
                $delete = '<a title="' . __('delete') . '" class="btn btn-sm btn-danger p-2" onclick="confirmDelete(event,' . $student->id . ')"><i class="fa-solid fa-trash"></i></a>&nbsp;';
                $delete .= '<form method="POST" action="' . route('students.destroy', $student->id) . '" id="student-delete-form-' . $student->id . '" accept-charset="UTF-8" style="display: none;">
                        ' . csrf_field() . '
                        <input type="hidden" name="_method" value="DELETE">
                        </form>';

                return $edit . $view . $delete;
            })

            ->rawColumns(['institute', 'academic_year', 'medium', 'shift', 'class', 'name', 'roll', 'rfid', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        return Student::with('institute');
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'institute', 'name' => 'institute', 'title' => __('Institute'), 'orderable' => false, 'searchable' => false])
            ->addColumn(['data' => 'academic_year', 'name' => 'academic_year', 'title' => __('Academic Year'),])
            ->addColumn(['data' => 'medium', 'name' => 'medium', 'title' => __('Medium')])
            ->addColumn(['data' => 'shift', 'name' => 'shift', 'title' => __('Shift')])
            ->addColumn(['data' => 'class', 'name' => 'class', 'title' => __('Class'), 'orderable' => false])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => __('Name'), 'orderable' => false])
            ->addColumn(['data' => 'roll', 'name' => 'roll', 'title' => __('Roll')])
            ->addColumn(['data' => 'rfid', 'name' => 'rfid', 'title' => __('rfid'), 'orderable' => false])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '10%', 'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
