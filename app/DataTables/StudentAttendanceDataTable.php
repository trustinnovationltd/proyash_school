<?php

/**
 * @package StudentAttendanceDataTable
 * @author Trust Innovation Limited <support@til.net>
 * @contributor Md Mostafijur Rahman <[mostafijur.til@gmail.com]>
 * @created 17-05-2025
 */

namespace App\DataTables;

use App\DataTables\DataTable;
use App\Models\StudentManualAttendance;
use Illuminate\Http\JsonResponse;

class StudentAttendanceDataTable extends DataTable
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
            ->addIndexColumn()
            ->addColumn('name', function ($student) {
                return $student->student_name ?? '';
            })
            ->addColumn('roll', function ($student) {
                return $student->student_roll ?? '';
            })
            ->addColumn('class', function ($student) {
                return optional($student->class)->title;
            })
            ->addColumn('section', function ($student) {
                return optional($student->section)->title;
            })
            ->addColumn('date', function ($student) {
                return $student->created_at->format('Y-m-d') ?? '';
            })
            ->addColumn('in_time', function ($student) {
                return $student->in_time;
            })
            ->addColumn('out_time', function ($student) {
                return $student->out_time;
            })
            ->addColumn('status', function ($student) {
                if ($student->status == 'present') {
                    return '<span class="badge bg-success">Present</span>';
                } elseif ($student->status == 'absent') {
                    return '<span class="badge bg-danger">Absent</span>';
                } elseif ($student->status == 'late') {
                    return '<span class="badge bg-warning">Late</span>';
                } else {
                    return '<span class="badge bg-info">Left Early</span>';
                }
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

            ->rawColumns(['name', 'roll', 'medium', 'shift', 'class', 'name', 'status', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        return StudentManualAttendance::with(['institute:id,name', 'academicYear:id,title', 'medium:id,title', 'shift:id,title', 'class:id,title']);
    }

    /*
    * DataTable HTML
    *
    * @return \Yajra\DataTables\Html\Builder
    */
    public function html()
    {
        return $this->builder()
            ->addColumn(['data' => 'DT_RowIndex', 'name' => 'DT_RowIndex', 'title' => __('SL'), 'orderable' => false, 'searchable' => false])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => __('Student Name'), 'orderable' => false, 'searchable' => false])
            ->addColumn(['data' => 'roll', 'name' => 'roll', 'title' => __('Roll'),])
            ->addColumn(['data' => 'class', 'name' => 'class', 'title' => __('Class')])
            ->addColumn(['data' => 'section', 'name' => 'section', 'title' => __('Section')])
            ->addColumn(['data' => 'date', 'name' => 'date', 'title' => __('Date'), 'orderable' => false])
            ->addColumn(['data' => 'in_time', 'name' => 'in_time', 'title' => __('In Time'), 'orderable' => false])
            ->addColumn(['data' => 'out_time', 'name' => 'out_time', 'title' => __('Out Time')])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status'), 'orderable' => false])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => __('Actions'), 'width' => '10%', 'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
