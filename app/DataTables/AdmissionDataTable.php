<?php

/**
 * @package AdmissionDataTable
 * @author Trust Innovation Limited <support@til.net>
 * @created 25-06-2025
 */

namespace App\DataTables;

use App\DataTables\DataTable;
use App\Models\Student;
use Illuminate\Http\JsonResponse;

class AdmissionDataTable extends DataTable
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
                return $student->name_bn . '<br><small>' . $student->name_en . '</small>';
            })
            ->addColumn('image', function ($student) {
                if ($student->image) {
                    $url = asset('storage/' . $student->image); // assuming you're using 'public' disk
                    return '<img src="' . $url . '" alt="student" width="50" height="50" style="object-fit: cover; border-radius: 4px;">';
                }
                return '<span class="badge bg-secondary">No Image</span>';
            })

            ->addColumn('father_name', function ($student) {
                return optional($student->guardian)->father_name_en ?? 'N/A';
            })
            ->addColumn('father_moblile', function ($student) {
                return optional($student->guardian)->father_mobile ?? 'N/A';
            })
            ->addColumn('address', function ($student) {
                return optional($student->address)->present_village;
            })
            ->addColumn('admission_date', function ($student) {
                // return $student->admission_date ? $student->admission_date->format('d-m-Y') : 'N/A';
                return $student->admission_date;
            })
            ->addColumn('status', function ($student) {
                return $student->status ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Inactive</span>';
            })
            ->addColumn('action', function ($student) {
                $edit = '<a title="' . __('Edit') . '" href="' . route('admin.admission.students.edit', $student->id) . '"class="btn btn-sm btn-info p-2"><i class="fa-solid fa-pen-to-square"></i></a>&nbsp;';
                $view = '<a title="' . __('Veiw') . '" href="' . route('admin.admission.students.show', $student->id) . '" class="btn btn-sm btn-primary p-2"><i class="fa-solid fa-eye "></i></a>&nbsp;';
                $delete = '<a title="' . __('delete') . '" class="btn btn-sm btn-danger p-2" onclick="confirmDelete(event,' . $student->id . ')"><i class="fa-solid fa-trash"></i></a>&nbsp;';
                $delete .= '<form method="POST" action="' . route('admin.admission.students.destroy', $student->id) . '" id="student-delete-form-' . $student->id . '" accept-charset="UTF-8" style="display: none;">
                        ' . csrf_field() . '
                        <input type="hidden" name="_method" value="DELETE">
                        </form>';

                return $edit . $view . $delete;
            })

            ->rawColumns(['name', 'image', 'class', 'name', 'status', 'action'])
            ->make(true);
    }

    /*
    * DataTable Query
    *
    * @return mixed
    */
    public function query()
    {
        return Student::with(['guardian', 'address'])->orderBy('created_at', 'DESC');
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
            ->addColumn(['data' => 'father_name', 'name' => 'father_name', 'title' => __('Father Name'),])
            ->addColumn(['data' => 'father_moblile', 'name' => 'father_moblile', 'title' => __('Father Mobile'),])
            ->addColumn(['data' => 'nationality', 'name' => 'nationality', 'title' => __('Nationality')])
            ->addColumn(['data' => 'birth_date', 'name' => 'birth_date', 'title' => 'Date of Birth'])
            ->addColumn(['data' => 'blood_group', 'name' => 'blood_group', 'title' => 'Blood Group', 'width' => '15%'])
            ->addColumn(['data' => 'status', 'name' => 'status', 'title' => __('Status'), 'width' => '10%'])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title' => __('Action'), 'width' => '10%', 'orderable' => false, 'searchable' => false])
            ->parameters(dataTableOptions());
    }
}
